<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Cron;

use ComradeYanis\WeatherApi\Model\ApiClient;
use ComradeYanis\WeatherApi\Model\Config;
use ComradeYanis\WeatherApi\Model\ResourceModel\Weather as WeatherResource;
use ComradeYanis\WeatherApi\Model\Weather;
use ComradeYanis\WeatherApi\Model\WeatherFactory;
use Psr\Log\LoggerInterface;

/**
 * Class WeatherDataUpdater
 * ComradeYanis\WeatherApi\Cron
 */
class WeatherDataUpdater
{

    /**
     * @var ApiClient
     */
    private $apiClient;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var WeatherFactory
     */
    private $weatherFactory;

    /**
     * @var WeatherResource
     */
    private $weatherResource;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * WeatherDataUpdater constructor.
     * @param ApiClient $apiClient
     * @param Config $config
     * @param WeatherFactory $weatherFactory
     * @param WeatherResource $weatherResource
     * @param LoggerInterface $logger
     */
    public function __construct(
        ApiClient $apiClient,
        Config $config,
        WeatherFactory $weatherFactory,
        WeatherResource $weatherResource,
        LoggerInterface $logger
    ) {
        $this->apiClient = $apiClient;
        $this->config = $config;
        $this->weatherFactory = $weatherFactory;
        $this->weatherResource = $weatherResource;
        $this->logger = $logger;
    }

    public function execute()
    {
        if (!$this->config->isEnabled()) {
            return;
        }

        try {
            $apiData = $this->apiClient->execute();
            /** @var Weather $weather */
            $weather = $this->weatherFactory->create();
            $weather->setName($apiData['name'] ?? '');
            $weather->setDescription($apiData['weather'][0]['description'] ?? '');
            $weather->setTemp($apiData['main']['temp'] ?? '');
            $weather->setTempMax($apiData['main']['temp_max'] ?? '');
            $weather->setHumidity($apiData['main']['humidity'] ?? '');
            $weather->setPressure($apiData['main']['pressure'] ?? '');
            $weather->setWindSpeed($apiData['wind']['speed'] ?? '');
            $this->weatherResource->save($weather);
        } catch (\Exception $exception) {
            $this->logger->error(__($exception->getMessage()));
        }
    }

}
