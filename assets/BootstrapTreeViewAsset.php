<?php
namespace xz1mefx\widgets\assets;

use yii\web\AssetBundle;

/**
 * Class BootstrapTreeViewAsset
 * @package xz1mefx\widgets\assets
 */
class BootstrapTreeViewAsset extends AssetBundle
{

    public $sourcePath = '@vendor/xz1mefx/yii2-widgets/assets';

    public $css = [
        'web-assets/bootstrap-treeview-1.2.0/dist/bootstrap-treeview.min.css',
    ];

    public $js = [
        'web-assets/bootstrap-treeview-1.2.0/dist/bootstrap-treeview.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
