### MobileDetect Component for Yii 1.x
[![Latest Stable Version](https://poser.pugx.org/candasm/yii1-mobile-detect-component/v/stable)](https://packagist.org/packages/candasm/yii1-mobile-detect-component)
[![Build Status](https://travis-ci.org/candasm/yii1-mobile-detect-component.svg?branch=master)](https://travis-ci.org/candasm/yii1-mobile-detect-component)
[![Total Downloads](https://poser.pugx.org/candasm/yii1-mobile-detect-component/downloads)](https://packagist.org/packages/candasm/yii1-mobile-detect-component)
[![Coverage Status](https://coveralls.io/repos/github/candasm/yii1-mobile-detect-component/badge.svg?branch=master)](https://coveralls.io/github/candasm/yii1-mobile-detect-component?branch=master)
[![License](https://poser.pugx.org/candasm/yii1-mobile-detect-component/license)](https://packagist.org/packages/candasm/yii1-mobile-detect-component)
### Install
In app config:
```php
'components'=>array(
    ...

    'mobileDetect' => array(
        'class' => 'application.vendors.candasm.yii1-mobile-detect-component.src.MobileDetectComponent'
    ),
    
    ...
);
```

### Usage
```php
  $detect = Yii::app()->mobileDetect;
  // call methods
  $detect->isMobile();
  $detect->isTablet();
  $detect->isIphone();
  ...
```
For more information visit [MobileDetect](https://github.com/serbanghita/Mobile-Detect) Library. 



#####Note: Don't forget to set vendor-dir in composer.json file for YiiFramework 1.1.x versions.
```
"config":{
	"vendor-dir":"protected/vendor/"
},
```