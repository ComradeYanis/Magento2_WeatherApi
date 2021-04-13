<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Model\ResourceModel\Weather;

use ComradeYanis\WeatherApi\Model\ResourceModel\Weather as WeatherResource;
use ComradeYanis\WeatherApi\Model\Weather;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * ComradeYanis\WeatherApi\Model\ResourceModel\Weather
 */
class Collection extends AbstractCollection
{
    /**
     * Initialization here
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Weather::class, WeatherResource::class);
    }
}
