### MobileDetect Component for Yii 1.x

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



#####Note: Don't forget to set vendor-dir in composer.json file for YiiFramework 1.x versions.
```
"config":{
	"vendor-dir":"protected/vendor/"
},
```