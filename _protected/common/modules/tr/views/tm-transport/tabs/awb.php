<?php
use kartik\builder\Form;

echo Form::widget([
    'model' => $model,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'awb' => ['type' => Form::INPUT_TEXTAREA],
    ]
]);
?>