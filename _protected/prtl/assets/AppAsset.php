<?php

/**
 * -----------------------------------------------------------------------------
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 * -----------------------------------------------------------------------------
 */

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\View;
use Yii;

// set @themes alias so we do not have to update baseUrl every time we change themes
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

/**
 * -----------------------------------------------------------------------------
 * @author Qiang Xue <qiang.xue@gmail.com>
 *
 * @since 2.0
 * -----------------------------------------------------------------------------
 */
class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    public $css = [
        'css/bootstrap.min.css',
        'css/site.css',
        'css/datepicker.css',
        'css/font-awesome.min.css',
    ];
    public $js = [
        'js/jquery-ui.js',
        'js/bootstrap.min.js',
        'js/site.js',
        'js/momentjs.js',
        'js/datepicker.js',
        'js/humanize.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
    public $jsOptions = array(
        'position' => View::POS_HEAD // too high
            //'position' => View::POS_READY // in the html disappear the jquery.jrac.js declaration
            //'position' => View::POS_LOAD // disappear the jquery.jrac.js
            //'position' => View::POS_END // appear in the bottom of my page, but jquery is more down again
    );

}
