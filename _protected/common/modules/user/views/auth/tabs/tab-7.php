<?php

use kartik\widgets\FileInput;
// or 'use kartikile\FileInput' if you have only installed yii2-widget-fileinput in isolation
use yii\helpers\Url;

// Ajax uploads with drag and drop feature. Enable AJAX uploads by setting the `uploadUrl` property 
// in pluginOptions. You can also pass extra data to your upload URL via `uploadExtraData`. Refer 
// [plugin documentation and demos](http://plugins.krajee.com/file-input/demo) for more details 
// and options on using AJAX uploads.
echo FileInput::widget([
    'name' => 'profile-image[]',
    'options' => [
        'multiple' => true
    ],
    'pluginOptions' => [
        'uploadUrl' => Url::to(['/file/default/upload']),
        'uploadExtraData' => [
            'reference_table' => "user",
            'number' => 1,
        ],
        'maxFileCount' => 1
    ]
]);
