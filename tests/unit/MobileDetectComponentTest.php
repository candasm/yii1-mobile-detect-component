<?php

namespace Yii1MobileDetectComponent\Tests;

use Yii1MobileDetectComponent\MobileDetectComponent;

class MobileDetectComponentTest extends TestCase
{
    private $component;
    private $detect;

    public function setUp()
    {
        $this->component = new MobileDetectComponent();
        $this->component->init();
        $this->detect = new \Mobile_Detect();
    }

    public function testLibraryMethods()
    {
        $this->assertEquals($this->detect->isMobile(), $this->component->isMobile());
        $this->assertEquals($this->detect->isTablet(), $this->component->isTablet());
    }

    public function testLibraryMagicIsMethods()
    {
        $this->assertEquals($this->detect->isIphone(), $this->component->isIphone());
        $this->assertEquals($this->detect->isSamsung(), $this->component->isSamsung());
        $this->assertEquals($this->detect->is('iphone'), $this->component->is('samsung'));
    }
}
