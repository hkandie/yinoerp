<?php
use kartik\builder\Form;

echo Form::widget([
    'model' => $org,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'org' => ['type' => Form::INPUT_TEXT,],
        'code' => ['type' => Form::INPUT_TEXT,],
        'description' => ['type' => Form::INPUT_TEXT,],
        'rev_enabled' => ['type' => Form::INPUT_TEXT,],
        'rev_number' => ['type' => Form::INPUT_TEXT,]
    ],
]);
?>