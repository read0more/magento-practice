<?php


namespace Wisecommerce\Test\Helper;


use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

/**
 * Class TestHelper
 * @package Wisecommerce\Test\Helper
 */
class TestHelper extends AbstractHelper
{
    /**
     * @var TimezoneInterface
     */
    protected $timezoneInterface;

    /**
     * TestHelper constructor.
     * @param Context $context
     * @param TimezoneInterface $timezoneInterface
     */
    public function __construct(Context $context, TimezoneInterface $timezoneInterface)
    {
        parent::__construct($context);
        $this->timezoneInterface = $timezoneInterface;
    }


    /**
     * @return string
     */
    public function hello()
    {
        return 'Hello from helper';
    }
}
