<?php

use kartik\widgets\ActiveForm;
use kartik\builder\FormGrid;
use kartik\builder\Form;
use yii\helpers\Html;
use common\modules\option\models\OptionHeader;
use common\modules\extn\models\ExtnTheme;
use common\modules\option\models\OptionLine;
use yii\helpers\ArrayHelper;

$role = Yii::$app->getModule("user")->model("Role");

/**
 * @var yii\web\View $this
 * @var common\modules\user\models\User $user
 * @var common\modules\user\models\Profile $profile
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="user-form">

    <?php
    $form = ActiveForm::begin();
    echo FormGrid::widget([
        'model' => $user,
        'form' => $form,
        'autoGenerateColumns' => true,
        'rows' => [
            [
                'attributes' => [
                    'username' => ['type' => Form::INPUT_TEXT,],
                    'email' => ['type' => Form::INPUT_TEXT,],
                    'status' => [
                        'type' => Form::INPUT_DROPDOWN_LIST,
                        'items' => [0 => "Active", 1 => "In Active"]
                    ],
                    'role_id' => [
                        'type' => Form::INPUT_DROPDOWN_LIST,
                        'items' => ArrayHelper::map(common\modules\user\models\Role::find()->orderBy('name')->asArray()->all(), 'id', 'name')
                    ],
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
    <?php
    $option_header_id = OptionHeader::findOne(["option_type" => "SYS_LANGUAGE"])->option_header_id;
    echo Form::widget([
        'model' => $profile,
        'form' => $form,
        'columns' => 3,
        'attributes' => [
            'user_language' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [ArrayHelper::map(OptionLine::find()->where(["option_header_id" => $option_header_id])->all(), 'option_line_id', 'description')]],
            'default_theme' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [ArrayHelper::map(ExtnTheme::find()->all(), 'extn_theme_id', 'theme_name')]],
            'block_notif_count' => ['type' => Form::INPUT_DROPDOWN_LIST, 'items' => [OptionHeader::$position_array]],
            'use_personal_db_cb' => ['type' => Form::INPUT_CHECKBOX],
        ]
    ]);
    ?>
    <?php
    $option_header_id = OptionHeader::findOne(["option_type" => "SYS_LANGUAGE"])->option_header_id;
    echo Form::widget([
        'model' => $profile,
        'form' => $form,
        'columns' => 3,
        'attributes' => [
            'hr_employee_id' => ['type' => Form::INPUT_TEXT,],
            'supplier_id' => ['type' => Form::INPUT_TEXT,],
            'ar_customer_id' => ['type' => Form::INPUT_TEXT,],
        ]
    ]);
    ?>
    <?php
    echo Form::widget([
        'model' => $profile,
        'form' => $form,
        'columns' => 1,
        'attributes' => [
            'avatar' => ['type' => Form::INPUT_FILE],
        ]
    ]);
    ?>
    <div class="row">
        <div id="show_attachment" class="show_attachment">
            <div id="file_upload_form" class="form-group">
                <ul class="inRow asperWidth">
                    <li class="btn btn-info active inline input_file clickable" role="button">
                        <input id="attachments" class="input_file_btn clickable" type="file" multiple="" name="file_name[]"></input>
                        <i class="fa fa-paperclip clickable"> &nbsp;&nbsp;&nbsp;</i>Select File </li>
                    <li> <button  form="file_upload" name="attach_submit" id="attach_submit" class="btn btn-info active submit button">Attach</button></li>
                    <li class="show_loading_small"><img alt="Loading..." src="<?=  yii\helpers\Url::base()?>/themes/kip/images/small_loading.gif"/></li>
                </ul>
                <div class="uploaded_file_details"></div>
            </div>


            <?php
            $attachment_statement = "<div id=\"existing_attachment_list\"><ul class='first_level'>";

            if (!empty($file) && count($file) > 0) {
                $attachment_statement .= '<li><ul  class="second_level header"><li>Hide</li><li>Delete</li><li>File</li><li></li></ul></li>';
                foreach ($file as $records) {
                    $attachment_statement .= '<li><ul class="second_level">';
                    $attachment_statement .= '<li><input type="checkbox" class="hide_file" name="hide_file[]" value="' . $records->file_reference_id . '"></li>';
                    $attachment_statement .= '<li><input type="checkbox" class="delete_file" name="delete_file[]" value="' . $records->file_reference_id . '"></li>';
                    $attachment_statement .= '<li><a href=' . HOME_URL . $records->file_path . $records->file_name . '>' . $records->file_name . '</a></li>';
                    //		$attachment_statement .= '<li class="remove_row_img"><img src="' . HOME_URL . 'themes/images/remove.png" alt="remove this file" /> </li>';
                    $attachment_statement .= '</ul></li>';
                }
            }
            $attachment_statement .= "</ul></div>";
            ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php
    ActiveForm::end();
    ?>

</div>
