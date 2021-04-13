<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Config
 * ComradeYanis\WeatherApi\Model
 */
class Config
{
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag('catalog/weatherapi/comradeyanis_weather_enable');
    }

    /**
     * Returns configured API key
     *
     * @return string
     */
    public function getApiKey(): string
    {
        return (string)$this->scopeConfig->getValue('catalog/weatherapi/comradeyanis_weather_api_key');
    }

    /**
     * Returns configured API url
     *
     * @return string
     */
    public function getApiUrl(): string
    {
        return (string)$this->scopeConfig->getValue('catalog/weatherapi/comradeyanis_weather_api_url');
    }

    /**
     * Returns configured API query
     *
     * @return string
     */
    public function getApiQuery(): string
    {
        return (string)$this->scopeConfig->getValue('catalog/weatherapi/comradeyanis_weather_api_query');
    }

    /**
     * Returns configured API units
     *
     * @return string
     */
    public function getApiUnits(): string
    {
        return (string)$this->scopeConfig->getValue('catalog/weatherapi/comradeyanis_weather_units');
    }

    /**
     * Returns configured API interval
     *
     * @return int
     */
    public function getApiInterval(): int
    {
        return (int)$this->scopeConfig->getValue('catalog/weatherapi/comradeyanis_weather_interval');
    }
}
