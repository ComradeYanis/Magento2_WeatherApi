<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Api\Data;

/**
 * Interface WeatherInterface
 * ComradeYanis\WeatherApi\Api\Data
 */
interface WeatherInterface
{
    const ID = 'id';
    const NAME = 'name';
    const DESCRIPTION = 'description';
    const TEMP = 'temp';
    const PRESSURE = 'pressure';
    const HUMIDITY = 'humidity';
    const TEMPMAX = 'tempmax';
    const WIND_SPEED = 'wind_speed';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * @return string
     */
    public function getName();

    /**
     * @param $name
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return string
     */
    public function getTemp();

    /**
     * @param $temp
     * @return $this
     */
    public function setTemp($temp);

    /**
     * @return string
     */
    public function getPressure();

    /**
     * @param $pressure
     * @return $this
     */
    public function setPressure($pressure);

    /**
     * @return string
     */
    public function getHumidity();

    /**
     * @param $humidity
     * @return $this
     */
    public function setHumidity($humidity);

    /**
     * @return string
     */
    public function getTempmax();

    /**
     * @param $tempmax
     * @return $this
     */
    public function setTempmax($tempmax);

    /**
     * @return string
     */
    public function getWindSpeed();

    /**
     * @param $windSpeed
     * @return $this
     */
    public function setWindSpeed($windSpeed);

    /**
     * @return string
     */
    public function getCreatedAt();

    /**
     * @param $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * @return string
     */
    public function getUpdated();

    /**
     * @param $updatedAt
     * @return $this
     */
    public function setUpdated($updatedAt);
}
