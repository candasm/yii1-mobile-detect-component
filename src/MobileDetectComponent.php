<?php

namespace Yii1MobileDetectComponent;

/**
 * Wrapper for Mobile_Detect @link https://github.com/serbanghita/Mobile-Detect
 *
 * @author Candas Minareci <candas@minareci.net>
 */
class MobileDetectComponent extends \CApplicationComponent
{
    /**
     * @var \Mobile_Detect
     */
    private $mobileDetect;

    /**
     * @inheritdoc
     */
    public function init()
    {
        \Yii::import('application.vendors.mobiledetect.mobiledetectlib.Mobile_Detect');
        $this->mobileDetect = new \Mobile_Detect();
    }

    /**
     * @inheritdoc
     */
    public function __call($name, $parameters)
    {
        return call_user_func_array(array($this->mobileDetect, $name), $parameters);
    }
}
