
<?php

use kartik\builder\FormGrid;
use kartik\builder\Form;
use yii\helpers\ArrayHelper;


echo FormGrid::widget([
    'model' => $user,
    'form' => $form,
    'autoGenerateColumns' => true,
    'rows' => [
        [
            'attributes' => [
                'username' => ['type' => Form::INPUT_TEXT,],
                'email' => ['type' => Form::INPUT_TEXT,],
                
            ],
        ],
    ]
]);
echo FormGrid::widget([
    'model' => $profile,
    'form' => $form,
    'autoGenerateColumns' => true,
    'rows' => [
        ['attributes' => [

                'first_name' => ['type' => Form::INPUT_TEXT,],
                'last_name' => ['type' => Form::INPUT_TEXT,],
                'phone' => ['type' => Form::INPUT_TEXT,],
            ],
        ],
    ]
]);
?>


