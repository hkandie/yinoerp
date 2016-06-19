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

<span class="heading"><?php echo Yii::t('user', 'OBC Header') ?></span>
<div class="tm-cargo-form">

    <div id ="form_header">
        <div id="tabsHeader">
            <ul class="tabMain">
                <li><a href="#tabsHeader-1"><?php echo Yii::t('user', 'Basic Info') ?></a></li>
            </ul>
            <div class="tabContainer">
                <div id="tabsHeader-1" class="tabContent">
                    <table>
                        <tr>

                            <td style="width: 25%;vertical-align: top">
                                <?php
                                echo  Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 1,
                                    'attributes' => [
                                        'id' => ['type' => Form::INPUT_STATIC],
                                        'startshipping_date' => ['type' => Form::INPUT_TEXT],
                                        'from_airport' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$airports_a],
                                        'from_city' => ['type' => Form::INPUT_TEXT],
                                        'from_country' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$country_a],
                                         ]
                                ]);?>
                            </td>
                            <td style="width: 25%;vertical-align: top">
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 1,
                                    'attributes' => [
                                        'endshipping_date' => ['type' => Form::INPUT_TEXT],
                                        'to_airport' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$country_a],
                                        'to_city' => ['type' => Form::INPUT_TEXT],
                                        'to_country' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$country_a],
                                    ]
                                ]);
                                ?>
                            </td>
                            <td style="width: 50%">
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 1,
                                    'attributes' => [
                                        'obc_id' => ['type' => Form::INPUT_TEXT],
                                        'courier_name' => ['type' => Form::INPUT_TEXT],
                                        'user_name' => ['type' => Form::INPUT_TEXT],
                                        'weight' => ['type' => Form::INPUT_TEXT],
                                        'volume' => ['type' => Form::INPUT_TEXT],
                                        'airliner' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$airline_a],
                                        'flight_number' => ['type' => Form::INPUT_TEXT],
                                        'cargo_type' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$package_type_a],
                                    ]
                                ]);
                                ?>
                                <?php
                                echo Form::widget([
                                    'model' => $model,
                                    'form' => $form,
                                    'columns' => 2,
                                    'attributes' => [
                                        'price' => ['type' => Form::INPUT_TEXT],
                                        'currency' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$currency_a],
                                    ]
                                ]);
                                ?>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary        ']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
