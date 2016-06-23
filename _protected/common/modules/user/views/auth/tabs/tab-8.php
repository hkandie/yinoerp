<h4>Existing Addresses</h4>
<?php

use kartik\builder\FormGrid;
use kartik\builder\Form;
use \common\modules\option\models\OptionHeader;
use \common\modules\option\models\OptionLine;
use yii\helpers\ArrayHelper;
?>
<div class="col-md-5">
    <?php
    if (count($addressReference)) {
        
    }
    ?>
</div>
<div class="col-md-1" style="border-right: 1px solid #000">
    
</div>
<div class="col-md-6">
    <?php
    $option_header_id = OptionHeader::findOne(["option_type" => "ADDRESS_USAGE_TYPE"])->option_header_id;
    echo Form::widget([
        'model' => $address,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'address_name' => ['type' => Form::INPUT_TEXT,],
            'type' => ['type' => Form::INPUT_TEXT,],
            'address_name' => ['type' => Form::INPUT_TEXT,],
            'mdm_tax_region_id' => ['type' => Form::INPUT_TEXT,],
            'description' => ['type' => Form::INPUT_TEXT,],
            'phone' => ['type' => Form::INPUT_TEXT,],
            'email' => ['type' => Form::INPUT_TEXT,],
            'website' => ['type' => Form::INPUT_TEXT,],
            'address' => ['type' => Form::INPUT_TEXT,],
            'country' => ['type' => Form::INPUT_TEXT,],
            'postal_code' => ['type' => Form::INPUT_TEXT,],
            'default_cb' => ['type' => Form::INPUT_TEXT,],
            'status' => ['type' => Form::INPUT_TEXT,],
            'usage_type' => ['type' => Form::INPUT_DROPDOWN_LIST,"placeholder"=>"--Select--", 'items' => [ArrayHelper::map(OptionLine::find()->where(["option_header_id" => $option_header_id])->all(), 'option_line_id', 'description')]],
            'rev_number' => ['type' => Form::INPUT_TEXT,]
        ],
    ]);
    ?>
</div>