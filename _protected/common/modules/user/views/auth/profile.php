<?php

use kartik\form\ActiveForm;
use kartik\builder\Form;
use yii\helpers\Html;
use common\modules\option\models\OptionHeader;
use common\modules\extn\models\ExtnTheme;
use common\modules\option\models\OptionLine;
use yii\helpers\ArrayHelper;

$form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data'],
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'formConfig' => ['labelSpan' => 4]]);
?>
<div class="row">
    <ul class="nav nav-tabs responsive" id = "profileTab">
        <li><a href="#tabsHeader-1"><?php echo Yii::t('app', 'Basic Info') ?></a></li>
        <li><a href="#tabsHeader-2"><?php echo Yii::t('app', 'Preference') ?></a></li>
        <li><a href="#tabsHeader-3"><?php echo Yii::t('app', 'Association') ?></a></li>
        <li><a href="#tabsHeader-4"><?php echo Yii::t('app', 'Future') ?></a></li>
        <li><a href="#tabsHeader-5"><?php echo Yii::t('app', 'Attachments') ?></a></li>
        <li><a href="#tabsHeader-6"><?php echo Yii::t('app', 'Notes') ?></a></li>
        <li><a href="#tabsHeader-7"><?php echo Yii::t('app', 'Profile Picture') ?></a></li>
        <li><a href="#tabsHeader-8"><?php echo Yii::t('app', 'Addresses') ?></a></li>
        <li><a href="#tabsHeader-9"><?php echo Yii::t('app', 'Company Details') ?></a></li>
    </ul>
    <div id='content' class="tab-content responsive">
        <div class="tab-pane active" id="tabsHeader-1">
            <?php
            echo Form::widget([
                'model' => $profile,
                'form' => $form,
                'columns' => 3,
                'attributes' => [
                    'first_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => '']],
                    'last_name' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => '']],
                    'phone' => ['type' => Form::INPUT_TEXT, 'options' => ['placeholder' => '']],
                ]
            ]);


            $this->title = Yii::t('user', $profile->first_name);
            $this->params['breadcrumbs'][] = $this->title;
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
        </div>
        <div class="tab-pane" id="tabsHeader-2">

        </div>
        <div class="tab-pane" id="tabsHeader-3">
        </div>
        <div class="tab-pane" id="tabsHeader-4">
        </div>
        <div class="tab-pane" id="tabsHeader-5">
        </div>
        <div class="tab-pane" id="tabsHeader-6">
        </div>
        <div class="tab-pane" id="tabsHeader-7">
        </div>
        <div class="tab-pane" id="tabsHeader-8">
        </div>
        <div class="tab-pane" id="tabsHeader-9">
        </div>

    </div>
    <div class="col-md-9">


        <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
<?= Html::submitButton($user->isNewRecord ? Yii::t('user', 'Create') : Yii::t('user', 'Update'), ['class' => $user->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

            </div>
        </div>
    </div>
<?php ActiveForm::end(); ?>
</div>
<hr/>
<span class="heading"><?php echo Yii::t('user','User Access Details') ?></span>
<div id="tabsLine">
    <ul class="tabMain">
        <li><a href="#tabsLine-1"><?php echo Yii::t('user','Role Control') ?></a></li>
        <li><a href="#tabsLine-2"><?php echo Yii::t('user','User Group Assignment') ?></a></li>
    </ul>
    <div class="tabContainer"> 
        <div id="tabsLine-1" class="tabContent">
            <div id ="form_line" class="form_line">
                <form action=""  method="post" id="user_role"  name="user_role">
                    <table id="form_line_data_table" class="form">
                        <thead>
                            <tr>
                                <th><?php echo Yii::t('user','Action') ?></th>
                                <th><?php echo Yii::t('user','User Role Access Id') ?>#</th>
                                <th><?php echo Yii::t('user','Role Name') ?></th>
                            </tr>
                        </thead>
                        <tbody class="form_data_line_tbody user_role_assignment_values">
                        </tbody>
                    </table>


                </form> 
            </div>   
        </div> 

        <div id="tabsLine-2" class="tabContent">
            <div id ="form_line2" class="form_line2">
                <form action=""  method="post" id="user_group_line"  name="user_group_line">
                    <table class="form_line_data_table">
                        <thead> 
                            <tr>
                                <th><?php echo Yii::t('user','Action') ?></th>
                                <th><?php echo Yii::t('user','Group Access Id') ?>#</th>
                                <th><?php echo Yii::t('user','Group Name') ?></th>
                            </tr>
                        </thead>
                        <tbody class="form_data_line_tbody2 user_group_values" >
                        </tbody>
                    </table>
                </form>
            </div>
        </div>

    </div>

</div>



<div id="js_data">
    <ul id="js_saving_data">
        <li class="headerClassName" data-headerClassName="user" ></li>
        <li class="lineClassName" data-lineClassName="user_role" ></li>
        <li class="lineClassName2" data-lineClassName2="user_group" ></li>
        <li class="savingOnlyHeader" data-savingOnlyHeader="false" ></li>
        <li class="primary_column_id" data-primary_column_id="user_id" ></li>
        <li class="form_header_id" data-form_header_id="user_header" ></li>
        <li class="line_key_field" data-line_key_field="user_id" ></li>
        <li class="single_line" data-single_line="false" ></li>
        <li class="form_line_id" data-form_line_id="user_role" ></li>
    </ul>
    <ul id="js_contextMenu_data">
        <li class="docHedaderId" data-docHedaderId="user_id" ></li>
        <li class="docLineId" data-docLineId="user_role_id" ></li>
        <li class="btn1DivId" data-btn1DivId="user" ></li>
        <li class="btn2DivId" data-btn2DivId="form_line" ></li>
        <li class="trClass" data-docHedaderId="user" ></li>
        <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
        <li class="noOfTabbs" data-noOfTabbs="1" ></li>
    </ul>
</div>
