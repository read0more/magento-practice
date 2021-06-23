<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Wisecommerce\Test\Block\Index;

use Wisecommerce\Test\Helper\TestHelper;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

/**
 * Class Index
 * @package Wisecommerce\Test\Block\Index
 */
class Index extends Template
{
    /**
     * @var TestHelper
     */
    protected $testHelper;

    /**
     * Constructor
     *
     * @param Context $context
     * @param array $data
     * @param TestHelper $testHelper
     */
    public function __construct(
        Context $context,
        TestHelper $testHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->testHelper = $testHelper;
    }


    /**
     * @return string
     */
    public function hello() {
        return $this->testHelper->hello();
    }
}

