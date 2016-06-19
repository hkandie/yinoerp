<?php

use kartik\form\ActiveForm;
use kartik\builder\Form;
use yii\helpers\Html;
use common\modules\option\models\GenOptions;

/* @var $this yii\web\View */
/* @var $model common\modules\tr\models\TmCargo */
/* @var $form yii\widgets\ActiveForm */
$form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data'],
            'type' => ActiveForm::TYPE_HORIZONTAL,
            'formConfig' => ['labelSpan' => 4]]);
?>

<span class="heading"><?php echo Yii::t('user', 'Cargo Header') ?></span>
<div class="tm-cargo-form">

    <div id ="form_header">
        <div id="tabsHeader">
            <ul class="tabMain">
                <li><a href="#tabsHeader-1"><?php echo Yii::t('user', 'Basic') ?></a></li>
                <li><a href="#tabsHeader-2"><?php echo Yii::t('user', 'Description') ?></a></li>
                <li><a href="#tabsHeader-3"><?php echo Yii::t('user', 'Note') ?></a></li>
                <li><a href="#tabsHeader-4"><?php echo Yii::t('user', 'Attachments') ?></a></li>
                <li><a href="#tabsHeader-5"><?php echo Yii::t('user', 'Physical State') ?></a></li>
            </ul>
            <div class="tabContainer">
                <div id="tabsHeader-1" class="tabContent">
                    <table>
                        <tr>

                            <td style="width: 25%;vertical-align: top">
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 1,
                                    'attributes' => [
                                        'id' => ['type' => Form::INPUT_STATIC],
                                        'from_company' => ['type' => Form::INPUT_TEXT],
                                        'from_street' => ['type' => Form::INPUT_TEXT],
                                        'from_address_nr' => ['type' => Form::INPUT_TEXT],
                                        'from_zipcode' => ['type' => Form::INPUT_TEXT],
                                        'from_city' => ['type' => Form::INPUT_TEXT],
                                        'from_state' => ['type' => Form::INPUT_TEXT],
                                        'from_country' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$country_a],
                                    ]
                                ]);
                                ?></td>
                            <td style="width: 25%;vertical-align: top">
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 1,
                                    'attributes' => [
                                        'to_company' => ['type' => Form::INPUT_TEXT],
                                        'to_street' => ['type' => Form::INPUT_TEXT],
                                        'to_address_nr' => ['type' => Form::INPUT_TEXT],
                                        'to_zipcode' => ['type' => Form::INPUT_TEXT],
                                        'to_city' => ['type' => Form::INPUT_TEXT],
                                        'to_state' => ['type' => Form::INPUT_TEXT],
                                        'to_country' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$country_a],
                                        'arrival_date' => ['type' => Form::INPUT_TEXT],
                                    ]
                                ]);
                                ?>
                            </td>
                            <td style="width: 50%;vertical-align: top">
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 1,
                                    'attributes' => [
                                        'user_id' => ['type' => Form::INPUT_TEXT],
                                        'cargo_id' => ['type' => Form::INPUT_TEXT],
                                        'price' => ['type' => Form::INPUT_TEXT],
                                        'currency' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$currency_a],
                                        'cargo_type' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$cargo_type_a],
                                        'transport_type' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$package_type_a],
                                    ]
                                ]);
                                ?>
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 2,
                                    'attributes' => [
                                        'weight' => ['type' => Form::INPUT_TEXT],
                                        'weight_unit' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$weight_a],
                                        'volume' => ['type' => Form::INPUT_TEXT],
                                        'volume_unit' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$volume_a],
                                        'length' => ['type' => Form::INPUT_TEXT],
                                        'length_unit' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$length_a],
                                        'height' => ['type' => Form::INPUT_TEXT],
                                        'height_unit' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$length_a],
                                        'width' => ['type' => Form::INPUT_TEXT],
                                        'width_unit' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$length_a],
                                        'size' => ['type' => Form::INPUT_TEXT],
                                        'size_unit' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$measurements_a],
                                    ]
                                ]);
                                ?>
                            </td>
                        </tr>
                    </table>

                </div>
                <div id="tabsHeader-2" class="tabContent">
                    <?php
                    echo Form::widget([
                        'model' => $model,
                        'form' => $form,
                        'columns' => 1,
                        'attributes' => [
                            'description' => ['type' => Form::INPUT_TEXTAREA],
                        ]
                    ]);
                    ?>
                </div>
                <div id="tabsHeader-3" class="tabContent">
                    <?php
                    echo Form::widget([
                        'model' => $model,
                        'form' => $form,
                        'columns' => 1,
                        'attributes' => [
                            'notes' => ['type' => Form::INPUT_TEXTAREA],
                        ]
                    ]);
                    ?>
                </div>
                <div id="tabsHeader-4" class="tabContent">
                    <?php
                    echo Form::widget([
                        'model' => $model,
                        'form' => $form,
                        'columns' => 1,
                        'attributes' => [
                            'physical_state' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$physical_state_a],
                            'image_file_id' => ['type' => Form::INPUT_TEXTAREA],
                        ]
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary        ']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
