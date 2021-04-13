<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Model\ResourceModel;

use ComradeYanis\WeatherApi\Api\Data\WeatherInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Weather
 * ComradeYanis\WeatherApi\Model\ResourceModel
 */
class Weather extends AbstractDb
{
    const TABLE_NAME = 'comradeyanis_weather';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME, WeatherInterface::ID);
    }
}
