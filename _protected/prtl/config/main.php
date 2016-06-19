<?php

$params = array_merge(
        require(__DIR__ . '/../../common/config/params.php'), require(__DIR__ . '/../../common/config/params-local.php'), require(__DIR__ . '/params.php'), require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'inoERP',
    'name' => 'inoERP',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=127.0.0.1;dbname=inoerp',
            'username' => 'root',
            'password' => 'Rolexe540',
            'tablePrefix' => '',
            'charset' => 'utf8',
        ],
        // here you can set theme used for your frontend application 
        // - template comes with: 'default', 'slate', 'spacelab' and 'cerulean'
        'view' => [
            'theme' => [
                'pathMap' => ['@app/views' => '@webroot/themes/kip/views'],
                'baseUrl' => '@web/themes/kip',
            ],
        ],
        'user' => [
            'identityClass' => 'common\modules\user\models\User',
            'class' => 'common\modules\user\components\User',
            'enableAutoLogin' => true,
            'loginUrl' => ['/user/auth/login'],
        ],
        'request' => [
            'cookieValidationKey' => '9cd134018cf57953c56003bcd6679dbdb8f004f2',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
            'sessionTable' => '_session',
        ],
        'as beforeRequest' => [  //if guest user access site so, redirect to login page.
            'class' => 'yii\filters\AccessControl',
            'rules' => [
                [
                    'actions' => ['login', 'error', 'forgot', 'register', 'reset'],
                    'allow' => true,
                ],
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
