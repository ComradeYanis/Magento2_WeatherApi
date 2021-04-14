<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Api;

use ComradeYanis\WeatherApi\Api\Data\WeatherInterface;

/**
 * Interface WeatherApiInterface
 * @package ComradeYanis\WeatherApi\Api
 */
interface WeatherApiInterface
{
    /**
     * @return WeatherInterface
     */
    public function getLastData();
}
