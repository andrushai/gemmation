<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\modules\admin;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $sourcePath = '@frontend/modules/admin/assets';
    public $css = [
        '//fonts.googleapis.com/icon?family=Material+Icons',
        'style.css',
    ];
    public $js = [
        'init.js',
    ];
    public $depends = [
        'webmaxx\materialize\MaterializePluginAsset',
    ];
}
