<?php
declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Model;

use ComradeYanis\WeatherApi\Api\Data\WeatherInterface;
use ComradeYanis\WeatherApi\Model\ResourceModel\Weather as WeatherResource;
use Magento\Framework\Model\AbstractModel;

/**
 * Class Weather
 * @package ComradeYanis\WeatherApi\Model
 */
class Weather extends AbstractModel implements WeatherInterface
{
    /**
     * init constructor
     */
    protected function _construct()
    {
        $this->_init(WeatherResource::class);
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->getData(self::NAME);
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name): Weather
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * @param $description
     * @return Weather
     */
    public function setDescription($description): Weather
    {
        return $this->setData(self::DESCRIPTION, $description);
    }

    /**
     * @return string
     */
    public function getTemp(): string
    {
        return $this->getData(self::TEMP);
    }

    /**
     * @param $temp
     * @return Weather
     */
    public function setTemp($temp): Weather
    {
        return $this->setData(self::TEMP, $temp);
    }

    /**
     * @return string
     */
    public function getPressure(): string
    {
        return $this->getData(self::PRESSURE);
    }

    /**
     * @param $pressure
     * @return Weather
     */
    public function setPressure($pressure): Weather
    {
        return $this->setData(self::PRESSURE, $pressure);
    }

    /**
     * @return string
     */
    public function getHumidity(): string
    {
        return $this->getData(self::HUMIDITY);
    }

    /**
     * @param $humidity
     * @return Weather
     */
    public function setHumidity($humidity): Weather
    {
        return $this->setData(self::HUMIDITY, $humidity);
    }

    /**
     * @return string
     */
    public function getTempmax(): string
    {
        return $this->getData(self::TEMPMAX);
    }

    /**
     * @param $tempmax
     * @return Weather
     */
    public function setTempmax($tempmax): Weather
    {
        return $this->setData(self::TEMPMAX, $tempmax);
    }

    /**
     * @return string
     */
    public function getWindSpeed(): string
    {
        return $this->getData(self::WIND_SPEED);
    }

    /**
     * @param $windSpeed
     * @return Weather
     */
    public function setWindSpeed($windSpeed): Weather
    {
        return $this->setData(self::WIND_SPEED, $windSpeed);
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * @param $createdAt
     * @return Weather
     */
    public function setCreatedAt($createdAt): Weather
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * @return string
     */
    public function getUpdated(): string
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * @param $updatedAt
     * @return Weather
     */
    public function setUpdated($updatedAt): Weather
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }
}
