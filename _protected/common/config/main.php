<?php

return [
    'name' => 'G2G Innovate',
    //'language' => 'sr',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'user' => [
            'class' => 'common\modules\user\Module',
        ],
        'inoerp' => [
            'class' => 'common\modules\inoerp\Inoerp',
        ],
        'course' => 'common\modules\course\CourseModule',
        'student' => 'common\modules\student\StudentModule',
        'employee' => 'common\modules\employee\EmployeeModule',
        'parents' => 'common\modules\parents\ParentsModule',
        'fees' => 'common\modules\fees\FeesModule',
        'report' => 'common\modules\report\Report',
        'dashboard' => 'common\modules\dashboard\DashboardModule',
        'exams' => [
            'class' => 'common\modules\exam\Exam',
        ],
        'attendance' => [
            'class' => 'common\modules\attendance\Attendance',
        ],
        'settings' => [
            'class' => 'common\modules\settings\Settings',
        ],
        'order' => [
            'class' => 'common\modules\order\Order',
        ],
        'portal' => [
            'class' => 'common\modules\prtl\Portal',
        ],
        'stock' => [
            'class' => 'common\modules\stock\Stock',
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module',
        ],
        'accounts' => [
            'class' => 'common\modules\accounts\Accounts',
        ],
        'utility' => [
            'class' => 'common\modules\utility\Module',
        ],
        'rights' => [
            'class' => 'mdm\admin\Module',
            'controllerMap' => [
                'assignment' => [
                    'class' => 'mdm\admin\controllers\AssignmentController',
                    'userClassName' => 'common\modules\user\models\User',
                    'idField' => 'user_id', // id field of model User
                    'usernameField' => 'username', // username field of model User
                ],
            ],
        ],
    ],
    'components' => [

        'assetManager' => [
            'bundles' => [
// we will use bootstrap css from our theme
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [], // do not use yii default one
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'session' => [
            'class' => 'yii\web\DbSession',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ],
        'formatter' => [
            'dateFormat' => 'dd-MMM-yyyy',
            'datetimeFormat' => 'php:d-m-Y H:i:s',
            'timeFormat' => 'php:H:i:s',
            'decimalSeparator' => '.',
            'thousandSeparator' => ',',
            'currencyCode' => '$',
            'class' => 'yii\i18n\Formatter',
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/translations',
                    'sourceLanguage' => 'en',
                ],
                'user' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => 'common\modules\user\messages',
                ],
                'stock' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => 'common\modules\stock\messages',
                ],
                'yii' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/translations',
                    'sourceLanguage' => 'en'
                ],
            ],
        ],
    ], // components
// set allias for our uploads folder so it can be shared by both frontend and backend applications
// @appRoot alias is definded in common/config/bootstrap.php file
    
    'aliases' => [
        '@uploads' => '@appRoot/uploads'
    ],
];
