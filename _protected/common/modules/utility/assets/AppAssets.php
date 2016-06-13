<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/24/14
 * Time: 11:47 AM
 */

namespace common\modules\utility\assets;
use Yii;
use yii\web\AssetBundle;
use yii\web\View;

/**
 * Class AppAssets
 *
 * @package common\modules\utility\assets
 */
Yii::setAlias('@themes', Yii::$app->view->theme->baseUrl);

class AppAssets extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@themes';

    /**
     * @inheritdoc
     */
    public $css = [
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'js/c006-migration.js',
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\widgets\ActiveFormAsset',
    ];

    /**
     * @var array
     */
    public $jsOptions = [
    ];

}
