<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\bootstrap4;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap javascript files.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 */
class BootstrapPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap/dist';
    public $js = [
        'js/bootstrap.bundle.js',
    ];
    public $depends = [
        \yii\jquery\JqueryAsset::class,
        \yii\bootstrap4\BootstrapAsset::class,
    ];
}