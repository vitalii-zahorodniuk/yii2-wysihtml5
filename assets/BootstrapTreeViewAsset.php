<?php
namespace xz1mefx\widgets\assets;

use yii\web\AssetBundle;

/**
 * Class BootstrapTreeViewAsset
 * @package xz1mefx\widgets\assets
 */
class BootstrapTreeViewAsset extends AssetBundle
{

    public $sourcePath = '@vendor/bower/bootstrap-treeview/dist';

    public $css = [
        'bootstrap-treeview.min.css',
    ];

    public $js = [
        'bootstrap-treeview.min.js',
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
    ];

}
