<?php
/**
 * Asset for bootbox plugin
 * @author Brusenskiy Dmitry <brussens@nativeweb.ru>
 * @author Bruno Salzano <d4rkstar@gmail.com>
 * @since 0.1.0
 * @version 0.1.2
 * @link https://github.com/d4rkstar/yii2-bootbox-asset
 * @link http://bootboxjs.com/
 * @copyright 2015 Brusenskiy Dmitry
 * @license http://opensource.org/licenses/MIT MIT
 * @package d4rkstar\bootbox
 */

namespace d4rkstar\bootbox;


use Yii;
use yii\web\AssetBundle;

class BootBoxAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/bootbox.js';

    public $js = [
        'bootbox.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
} 
