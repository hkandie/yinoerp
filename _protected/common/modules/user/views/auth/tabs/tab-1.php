
<?php

use kartik\builder\FormGrid;
use kartik\builder\Form;

echo Form::widget([
    'model' => $user,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'username' => ['type' => Form::INPUT_STATIC,],
        'email' => ['type' => Form::INPUT_STATIC,],
    ]
]);
echo Form::widget([
    'model' => $profile,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'first_name' => ['type' => Form::INPUT_TEXT,],
        'last_name' => ['type' => Form::INPUT_TEXT,],
        'phone' => ['type' => Form::INPUT_TEXT,],
    ],
]);
?>


