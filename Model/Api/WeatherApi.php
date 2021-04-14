<?php
declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Model\Api;

use ComradeYanis\WeatherApi\Api\WeatherApiInterface;
use ComradeYanis\WeatherApi\Model\ResourceModel\Weather\CollectionFactory;

/**
 * Class WeatherApi
 * @package ComradeYanis\WeatherApi\Model\Api
 */
class WeatherApi implements WeatherApiInterface
{

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * WeatherApi constructor.
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        CollectionFactory $collectionFactory
    ) {
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * @return \ComradeYanis\WeatherApi\Api\Data\WeatherInterface
     */
    public function getLastData()
    {
        return $this->collectionFactory->create()->getLastRow();
    }
}
