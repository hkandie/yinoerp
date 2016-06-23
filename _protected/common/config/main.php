<?php

return [
    'name' => 'inoERP',
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
        'address' => ['class' => 'common\modules\address\Address',],
        'cc' => ['class' => 'common\modules\cc\Cc',],
        'extn' => ['class' => 'common\modules\extn\Extn',],
        'legal' => ['class' => 'common\modules\legal\Legal',],
        'pm' => ['class' => 'common\modules\pm\Pm',],
        'subinventory' => ['class' => 'common\modules\subinventory\Subinventory',],
        'adm' => ['class' => 'common\modules\adm\Adm',],
        'coa' => ['class' => 'common\modules\coa\Coa',],
        'extra' => ['class' => 'common\modules\extra\Extra',],
        'po' => ['class' => 'common\modules\po\Po',],
        'supplier' => ['class' => 'common\modules\supplier\Supplier',],
        'am' => ['class' => 'common\modules\am\Am',],
        'comment' => ['class' => 'common\modules\comment\Comment',],
        'fa' => ['class' => 'common\modules\fa\Fa',],
        'pos' => ['class' => 'common\modules\pos\Pos',],
        'sys' => ['class' => 'common\modules\sys\Sys',],
        'ap' => ['class' => 'common\modules\ap\Ap',],
        'common' => ['class' => 'common\modules\common\Common',],
        'file' => ['class' => 'common\modules\file\File',],
        'locator' => ['class' => 'common\modules\locator\Locator',],
        'prj' => ['class' => 'common\modules\prj\Prj',],
        'system' => ['class' => 'common\modules\system\System',],
        'ar' => ['class' => 'common\modules\ar\Ar',],
        'content' => ['class' => 'common\modules\content\Content',],
        'form' => ['class' => 'common\modules\form\Form',],
        'mdm' => ['class' => 'common\modules\mdm\Mdm',],
        'product' => ['class' => 'common\modules\product\Product',],
        'tm' => ['class' => 'common\modules\tm\Tm',],
        'backup' => ['class' => 'common\modules\backup\Backup',],
        'cst' => ['class' => 'common\modules\cst\Cst',],
        'fp' => ['class' => 'common\modules\fp\Fp',],
        'migration' => ['class' => 'common\modules\migration\Migration',],
        'pur' => ['class' => 'common\modules\pur\Pur',],
        'tr' => ['class' => 'common\modules\tr\Tr',],
        'bc' => ['class' => 'common\modules\bc\Bc',],
        'da' => ['class' => 'common\modules\da\Da',],
        'gl' => ['class' => 'common\modules\gl\Gl',],
        'module' => ['class' => 'common\modules\module\Module',],
        'qa' => ['class' => 'common\modules\qa\Qa',],
        'transaction' => ['class' => 'common\modules\transaction\Transaction',],
        'block' => ['class' => 'common\modules\block\Block',],
        'dashboard' => ['class' => 'common\modules\dashboard\Dashboard',],
        'hd' => ['class' => 'common\modules\hd\Hd',],
        'onhand' => ['class' => 'common\modules\onhand\Onhand',],
        'role' => ['class' => 'common\modules\role\Role',],
        'uom' => ['class' => 'common\modules\uom\Uom',],
        'bom' => ['class' => 'common\modules\bom\Bom',],
        'ec' => ['class' => 'common\modules\ec\Ec',],
        'hr' => ['class' => 'common\modules\hr\Hr',],
        'option' => ['class' => 'common\modules\option\Option',],
        'sd' => ['class' => 'common\modules\sd\Sd',],
        'business' => ['class' => 'common\modules\business\Business',],
        'engine' => ['class' => 'common\modules\engine\Engine',],
        'inv' => ['class' => 'common\modules\inv\Inv',],
        'org' => ['class' => 'common\modules\org\Org',],
        'c' => ['class' => 'common\modules\c\C',],
        'enterprise' => ['class' => 'common\modules\enterprise\Enterprise',],
        'inventory' => ['class' => 'common\modules\inventory\Inventory',],
        'path' => ['class' => 'common\modules\path\Path',],
        'sf' => ['class' => 'common\modules\sf\Sf',],
        'view' => ['class' => 'common\modules\view\View',],
        'category' => ['class' => 'common\modules\category\Category',],
        'ext' => ['class' => 'common\modules\ext\Ext',],
        'item' => ['class' => 'common\modules\item\Item',],
        'payment' => ['class' => 'common\modules\payment\Payment',],
        'wip' => ['class' => 'common\modules\wip\Wip',],
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
    ],
//    'as access' => [
//        'class' => 'mdm\admin\components\AccessControl',
//        'allowActions' => [
//            'user/auth/logout','user/auth/login', 'user/auth/error', 'user/auth/forgot',
//            'user/auth/register', 'user/auth/reset','user/auth/account','site/site/index' // add or remove allowed actions to this list
//        ]
//    ],
    // // components
// set allias for our uploads folder so it can be shared by both frontend and backend applications
// @appRoot alias is definded in common/config/bootstrap.php file
    'aliases' => [
        '@uploads' => '@appRoot/uploads'
    ],
];
