<?php
use kartik\builder\Form;
use common\modules\option\models\OptionHeader;
use common\modules\extn\models\ExtnTheme;
use common\modules\option\models\OptionLine;
use yii\helpers\ArrayHelper;
$option_header_id = OptionHeader::findOne(["option_type" => "SYS_LANGUAGE"])->option_header_id;
echo Form::widget([
    'model' => $profile,
    'form' => $form,
    'columns' => 1,
    'attributes' => [
        'user_language' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [ArrayHelper::map(OptionLine::find()->where(["option_header_id" => $option_header_id])->all(), 'option_line_id', 'description')]],
        'default_theme' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [ArrayHelper::map(ExtnTheme::find()->all(), 'extn_theme_id', 'theme_name')]],
        'block_notif_count' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [OptionHeader::$position_array]],
        'use_personal_db_cb' => ['type' => Form::INPUT_CHECKBOX],
    ]
]);
?>