<?php

return [
    'components' => [
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'exchangemail.fly540.com',
                'username' => 'portal.admin@fly540.com',
                'password' => 'Tango540',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
    ],
];
