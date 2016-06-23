<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\item\models\Item */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_id_m')->textInput() ?>

    <?= $form->field($model, 'org_id')->textInput() ?>

    <?= $form->field($model, 'item_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image_file_id')->textInput() ?>

    <?= $form->field($model, 'product_line')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_line_percentage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'locator_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allow_negative_balance_cb')->textInput() ?>

    <?= $form->field($model, 'long_description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'uom_id')->textInput() ?>

    <?= $form->field($model, 'origination_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'origination_date')->textInput() ?>

    <?= $form->field($model, 'item_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'item_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inventory_item_cb')->textInput() ?>

    <?= $form->field($model, 'stockable_cb')->textInput() ?>

    <?= $form->field($model, 'transactable_cb')->textInput() ?>

    <?= $form->field($model, 'reservable_cb')->textInput() ?>

    <?= $form->field($model, 'cycle_count_enabled_cb')->textInput() ?>

    <?= $form->field($model, 'kit_cb')->textInput() ?>

    <?= $form->field($model, 'bom_enabled_cb')->textInput() ?>

    <?= $form->field($model, 'bom_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'costing_enabled_cb')->textInput() ?>

    <?= $form->field($model, 'inventory_asset_cb')->textInput() ?>

    <?= $form->field($model, 'default_cost_group')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'material_ac_id')->textInput() ?>

    <?= $form->field($model, 'material_oh_ac_id')->textInput() ?>

    <?= $form->field($model, 'overhead_ac_id')->textInput() ?>

    <?= $form->field($model, 'resource_ac_id')->textInput() ?>

    <?= $form->field($model, 'osp_ac_id')->textInput() ?>

    <?= $form->field($model, 'expense_ac_id')->textInput() ?>

    <?= $form->field($model, 'lot_uniqueness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lot_generation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lot_prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lot_starting_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_uniqueness')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_generation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial_starting_number')->textInput() ?>

    <?= $form->field($model, 'purchased_cb')->textInput() ?>

    <?= $form->field($model, 'use_asl_cb')->textInput() ?>

    <?= $form->field($model, 'invoice_matching')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'default_buyer')->textInput() ?>

    <?= $form->field($model, 'list_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contract_item_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'duration_uom_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_sub_inventory')->textInput() ?>

    <?= $form->field($model, 'over_receipt_percentage')->textInput() ?>

    <?= $form->field($model, 'over_receipt_action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_days_early')->textInput() ?>

    <?= $form->field($model, 'receipt_days_late')->textInput() ?>

    <?= $form->field($model, 'receipt_day_action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'receipt_routing')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight_uom_id')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'volume_uom_id')->textInput() ?>

    <?= $form->field($model, 'volume')->textInput() ?>

    <?= $form->field($model, 'dimension_uom_id')->textInput() ?>

    <?= $form->field($model, 'length')->textInput() ?>

    <?= $form->field($model, 'width')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'equipment_cb')->textInput() ?>

    <?= $form->field($model, 'electronic_format_cb')->textInput() ?>

    <?= $form->field($model, 'planning_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'planner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'make_buy')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wip_supply_subinventory')->textInput() ?>

    <?= $form->field($model, 'wip_supply_locator')->textInput() ?>

    <?= $form->field($model, 'fix_order_quantity')->textInput() ?>

    <?= $form->field($model, 'saftey_stock_days')->textInput() ?>

    <?= $form->field($model, 'saftey_stock_percentage')->textInput() ?>

    <?= $form->field($model, 'saftey_stock_quantity')->textInput() ?>

    <?= $form->field($model, 'fix_days_supply')->textInput() ?>

    <?= $form->field($model, 'fix_lot_multiplier')->textInput() ?>

    <?= $form->field($model, 'minimum_order_quantity')->textInput() ?>

    <?= $form->field($model, 'maximum_order_quantity')->textInput() ?>

    <?= $form->field($model, 'minmax_min_quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minmax_max_quantity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'minmax_multibin_number')->textInput() ?>

    <?= $form->field($model, 'minmax_multibin_size')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forecast_method')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'forecast_control')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'demand_timefence')->textInput() ?>

    <?= $form->field($model, 'planning_timefence')->textInput() ?>

    <?= $form->field($model, 'release_timefence')->textInput() ?>

    <?= $form->field($model, 'pre_processing_lt')->textInput() ?>

    <?= $form->field($model, 'post_processing_lt')->textInput() ?>

    <?= $form->field($model, 'processing_lt')->textInput() ?>

    <?= $form->field($model, 'cumulative_mfg_lt')->textInput() ?>

    <?= $form->field($model, 'cumulative_total_lt')->textInput() ?>

    <?= $form->field($model, 'lt_lot_size')->textInput() ?>

    <?= $form->field($model, 'build_in_wip_cb')->textInput() ?>

    <?= $form->field($model, 'wip_supply_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'customer_ordered_cb')->textInput() ?>

    <?= $form->field($model, 'internal_ordered_cb')->textInput() ?>

    <?= $form->field($model, 'shippable_cb')->textInput() ?>

    <?= $form->field($model, 'returnable_cb')->textInput() ?>

    <?= $form->field($model, 'invoiceable_cb')->textInput() ?>

    <?= $form->field($model, 'billing_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'service_request_cb')->textInput() ?>

    <?= $form->field($model, 'atp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picking_rule')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sourcing_rule_id')->textInput() ?>

    <?= $form->field($model, 'sales_ac_id')->textInput() ?>

    <?= $form->field($model, 'cogs_ac_id')->textInput() ?>

    <?= $form->field($model, 'deffered_cogs_ac_id')->textInput() ?>

    <?= $form->field($model, 'ip_tax_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'op_tax_class')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ap_payment_term')->textInput() ?>

    <?= $form->field($model, 'ar_payment_term')->textInput() ?>

    <?= $form->field($model, 'duration')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rev_enabled_cb')->textInput() ?>

    <?= $form->field($model, 'rounding_option')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'onhand_with_rev_cb')->textInput() ?>

    <?= $form->field($model, 'item_rev_number')->textInput() ?>

    <?= $form->field($model, 'am_asset_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'am_activity_cause')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'am_activity_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'am_activity_source')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'creation_date')->textInput() ?>

    <?= $form->field($model, 'last_update_by')->textInput() ?>

    <?= $form->field($model, 'last_update_date')->textInput() ?>

    <?= $form->field($model, 'company_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
