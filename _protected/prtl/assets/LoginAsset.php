<?php
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
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@themes';
    
    public $css = [
        'css/bootstrap.min.css',   
        'css/public.css',
    ];
    public $js = [
        'js/prefixfree.min.js'       
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $jsOptions = array(
    'position' => View::POS_HEAD // too high
    //'position' => View::POS_READY // in the html disappear the jquery.jrac.js declaration
    //'position' => View::POS_LOAD // disappear the jquery.jrac.js
     //'position' => View::POS_END // appear in the bottom of my page, but jquery is more down again
); 
}

