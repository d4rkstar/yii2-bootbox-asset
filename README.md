#Yii2 bootbox plugin asset
Yii2 asset bundle of bootbox plugin (http://bootboxjs.com/)

[![Latest Stable Version](https://poser.pugx.org/d4rkstar/yii2-bootbox-asset/v/stable)](https://packagist.org/packages/d4rkstar/yii2-bootbox-asset)
[![Total Downloads](https://poser.pugx.org/d4rkstar/yii2-bootbox-asset/downloads)](https://packagist.org/packages/d4rkstar/yii2-bootbox-asset)
[![License](https://poser.pugx.org/d4rkstar/yii2-bootbox-asset/license)](https://packagist.org/packages/d4rkstar/yii2-bootbox-asset)

##Install
Either run
```
php composer.phar require --prefer-dist d4rkstar/yii2-bootbox-asset "*"
```

or add

```
"d4rkstar/yii2-bootbox-asset": "*"
```

to the require section of your `composer.json` file.

## Add your depending Asset Bundle
```php
class AppAsset extends AssetBundle
{
    // ...
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'd4rkstar\bootbox\BootBoxAsset',
    ];
}
```
