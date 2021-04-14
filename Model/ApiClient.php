<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Model;

use Magento\Framework\HTTP\Client\Curl;
use Magento\Framework\HTTP\Client\CurlFactory;
use Magento\Framework\Serialize\SerializerInterface;

/**
 * Class ApiClient
 * ComradeYanis\WeatherApi\Model
 */
class ApiClient
{

    /**
     * @var CurlFactory
     */
    private $curlFactory;

    /**
     * @var Config
     */
    private $config;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * ApiClient constructor.
     * @param CurlFactory $curlFactory
     * @param Config $config
     * @param SerializerInterface $serializer
     */
    public function __construct(
        CurlFactory $curlFactory,
        Config $config,
        SerializerInterface $serializer
    ) {
        $this->curlFactory = $curlFactory;
        $this->config = $config;
        $this->serializer = $serializer;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function execute()
    {
        /** @var Curl $curlClient */
        $curlClient = $this->curlFactory->create();
        $params = [
            'q' => $this->config->getApiQuery(),
            'units' => $this->config->getApiUnits()
        ];
        $url = $this->config->getApiUrl() . '?' . http_build_query($params);
        $curlClient->setHeaders([
            'x-rapidapi-key' => $this->config->getApiKey()
        ]);
        $curlClient->get($url);
        $response = $curlClient->getBody();

        $result = $this->serializer->unserialize($response);
        if (isset($result['cod']) && $result['cod'] == 200) {
            return $result;
        }
        throw new \Exception(__('Weather api error. Check your credentials'));
    }
}
