
<?php
use kartik\builder\Form;

echo Form::widget([
    'model' => $profile,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'hr_employee_id' => ['type' => Form::INPUT_TEXT,],
        'supplier_id' => ['type' => Form::INPUT_TEXT,],
        'ar_customer_id' => ['type' => Form::INPUT_TEXT,],
    ]
]);
?>