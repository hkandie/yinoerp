<?php 
use kartik\builder\Form;
use common\modules\option\models\GenOptions;
?>
<table>
    <tr>

        <td style="width: 25%;vertical-align: top">
            <?php
            echo Form::widget([
                'model' => $model,
                'form' => $form,
                'columns' => 1,
                'attributes' => [
                    'departure_date' => ['type' => Form::INPUT_TEXT],
                    'startshipping_date' => ['type' => Form::INPUT_TEXT],
                    'from_city' => ['type' => Form::INPUT_TEXT],
                    'from_country' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$country_a],
                ]
            ]);
            ?>
        </td>
        <td style="width: 25%;vertical-align: top">
            <?php
            echo Form::widget([
                'model' => $model,
                'form' => $form,
                'columns' => 1,
                'attributes' => [
                    'arrival_date' => ['type' => Form::INPUT_TEXT],
                    'endshipping_date' => ['type' => Form::INPUT_TEXT],
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
                'columns' => 2,
                'attributes' => [
                    'price' => ['type' => Form::INPUT_TEXT],
                    'currency' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$currency_a],
                ]
            ]);
            ?> 
            <?php
            echo Form::widget([
                'model' => $model,
                'form' => $form,
                'columns' => 1,
                'attributes' => [
                    'transport_ID' => ['type' => Form::INPUT_TEXT],
                    'user_id' => ['type' => Form::INPUT_TEXT],
                    'transport_type' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$transport_type_a],
                    'container_type' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$container_type_a],
                    'weight' => ['type' => Form::INPUT_TEXT],
                    'volume' => ['type' => Form::INPUT_TEXT],
                    'length' => ['type' => Form::INPUT_TEXT],
                    'height' => ['type' => Form::INPUT_TEXT],
                    'width' => ['type' => Form::INPUT_TEXT],
                    'airfreight_security' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$airfreight_security_a],
                    'airfreight_security_type' => ['type' => Form::INPUT_DROPDOWN_LIST, "items" => GenOptions::$airfreight_security_type_a],
                    'shipper' => ['type' => Form::INPUT_TEXT],
                ]
            ]);
            ?>

        </td>
    </tr>
</table>