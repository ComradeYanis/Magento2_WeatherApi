<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Block;

use ComradeYanis\WeatherApi\Model\Config;
use Magento\Framework\View\Element\Template;

/**
 * Class WeatherData
 * ComradeYanis\WeatherApi\Block
 */
class WeatherData extends Template
{
    /**
     * @var Config
     */
    private $config;

    /**
     * WeatherData constructor.
     * @param Template\Context $context
     * @param Config $config
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Config $config,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $data
        );
        $this->config = $config;
    }

    /**
     * @return bool
     */
    public function isEnable()
    {
        return $this->config->isEnabled();
    }

    /**
     * @return int
     */
    public function getInterval()
    {
        return $this->config->getApiInterval();
    }
}
