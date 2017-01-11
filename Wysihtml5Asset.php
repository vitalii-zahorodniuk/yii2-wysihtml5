<?php

namespace xz1mefx\widgets\wysihtml5;

use yii\web\AssetBundle;

/**
 * Class Wysihtml5Asset
 * @package xz1mefx\widgets\wysihtml5
 */
class Wysihtml5Asset extends AssetBundle
{

    public $sourcePath = '@vendor/xz1mefx/yii2-widgets/wysihtml5/assets/dist';

    public $css = [
        'bootstrap3-wysihtml5.min.css',
    ];

    public $js = [
        'bootstrap3-wysihtml5.all.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
