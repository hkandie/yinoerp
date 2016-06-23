<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\modules\item\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'item_id') ?>

    <?= $form->field($model, 'item_id_m') ?>

    <?= $form->field($model, 'org_id') ?>

    <?= $form->field($model, 'item_number') ?>

    <?= $form->field($model, 'item_description') ?>

    <?php // echo $form->field($model, 'image_file_id') ?>

    <?php // echo $form->field($model, 'product_line') ?>

    <?php // echo $form->field($model, 'product_line_percentage') ?>

    <?php // echo $form->field($model, 'locator_control') ?>

    <?php // echo $form->field($model, 'allow_negative_balance_cb') ?>

    <?php // echo $form->field($model, 'long_description') ?>

    <?php // echo $form->field($model, 'uom_id') ?>

    <?php // echo $form->field($model, 'origination_type') ?>

    <?php // echo $form->field($model, 'origination_date') ?>

    <?php // echo $form->field($model, 'item_type') ?>

    <?php // echo $form->field($model, 'item_status') ?>

    <?php // echo $form->field($model, 'inventory_item_cb') ?>

    <?php // echo $form->field($model, 'stockable_cb') ?>

    <?php // echo $form->field($model, 'transactable_cb') ?>

    <?php // echo $form->field($model, 'reservable_cb') ?>

    <?php // echo $form->field($model, 'cycle_count_enabled_cb') ?>

    <?php // echo $form->field($model, 'kit_cb') ?>

    <?php // echo $form->field($model, 'bom_enabled_cb') ?>

    <?php // echo $form->field($model, 'bom_type') ?>

    <?php // echo $form->field($model, 'costing_enabled_cb') ?>

    <?php // echo $form->field($model, 'inventory_asset_cb') ?>

    <?php // echo $form->field($model, 'default_cost_group') ?>

    <?php // echo $form->field($model, 'material_ac_id') ?>

    <?php // echo $form->field($model, 'material_oh_ac_id') ?>

    <?php // echo $form->field($model, 'overhead_ac_id') ?>

    <?php // echo $form->field($model, 'resource_ac_id') ?>

    <?php // echo $form->field($model, 'osp_ac_id') ?>

    <?php // echo $form->field($model, 'expense_ac_id') ?>

    <?php // echo $form->field($model, 'lot_uniqueness') ?>

    <?php // echo $form->field($model, 'lot_generation') ?>

    <?php // echo $form->field($model, 'lot_prefix') ?>

    <?php // echo $form->field($model, 'lot_starting_number') ?>

    <?php // echo $form->field($model, 'serial_uniqueness') ?>

    <?php // echo $form->field($model, 'serial_generation') ?>

    <?php // echo $form->field($model, 'serial_prefix') ?>

    <?php // echo $form->field($model, 'serial_starting_number') ?>

    <?php // echo $form->field($model, 'purchased_cb') ?>

    <?php // echo $form->field($model, 'use_asl_cb') ?>

    <?php // echo $form->field($model, 'invoice_matching') ?>

    <?php // echo $form->field($model, 'default_buyer') ?>

    <?php // echo $form->field($model, 'list_price') ?>

    <?php // echo $form->field($model, 'contract_item_type') ?>

    <?php // echo $form->field($model, 'duration_uom_id') ?>

    <?php // echo $form->field($model, 'receipt_sub_inventory') ?>

    <?php // echo $form->field($model, 'over_receipt_percentage') ?>

    <?php // echo $form->field($model, 'over_receipt_action') ?>

    <?php // echo $form->field($model, 'receipt_days_early') ?>

    <?php // echo $form->field($model, 'receipt_days_late') ?>

    <?php // echo $form->field($model, 'receipt_day_action') ?>

    <?php // echo $form->field($model, 'receipt_routing') ?>

    <?php // echo $form->field($model, 'weight_uom_id') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'volume_uom_id') ?>

    <?php // echo $form->field($model, 'volume') ?>

    <?php // echo $form->field($model, 'dimension_uom_id') ?>

    <?php // echo $form->field($model, 'length') ?>

    <?php // echo $form->field($model, 'width') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'equipment_cb') ?>

    <?php // echo $form->field($model, 'electronic_format_cb') ?>

    <?php // echo $form->field($model, 'planning_method') ?>

    <?php // echo $form->field($model, 'planner') ?>

    <?php // echo $form->field($model, 'make_buy') ?>

    <?php // echo $form->field($model, 'wip_supply_subinventory') ?>

    <?php // echo $form->field($model, 'wip_supply_locator') ?>

    <?php // echo $form->field($model, 'fix_order_quantity') ?>

    <?php // echo $form->field($model, 'saftey_stock_days') ?>

    <?php // echo $form->field($model, 'saftey_stock_percentage') ?>

    <?php // echo $form->field($model, 'saftey_stock_quantity') ?>

    <?php // echo $form->field($model, 'fix_days_supply') ?>

    <?php // echo $form->field($model, 'fix_lot_multiplier') ?>

    <?php // echo $form->field($model, 'minimum_order_quantity') ?>

    <?php // echo $form->field($model, 'maximum_order_quantity') ?>

    <?php // echo $form->field($model, 'minmax_min_quantity') ?>

    <?php // echo $form->field($model, 'minmax_max_quantity') ?>

    <?php // echo $form->field($model, 'minmax_multibin_number') ?>

    <?php // echo $form->field($model, 'minmax_multibin_size') ?>

    <?php // echo $form->field($model, 'forecast_method') ?>

    <?php // echo $form->field($model, 'forecast_control') ?>

    <?php // echo $form->field($model, 'demand_timefence') ?>

    <?php // echo $form->field($model, 'planning_timefence') ?>

    <?php // echo $form->field($model, 'release_timefence') ?>

    <?php // echo $form->field($model, 'pre_processing_lt') ?>

    <?php // echo $form->field($model, 'post_processing_lt') ?>

    <?php // echo $form->field($model, 'processing_lt') ?>

    <?php // echo $form->field($model, 'cumulative_mfg_lt') ?>

    <?php // echo $form->field($model, 'cumulative_total_lt') ?>

    <?php // echo $form->field($model, 'lt_lot_size') ?>

    <?php // echo $form->field($model, 'build_in_wip_cb') ?>

    <?php // echo $form->field($model, 'wip_supply_type') ?>

    <?php // echo $form->field($model, 'customer_ordered_cb') ?>

    <?php // echo $form->field($model, 'internal_ordered_cb') ?>

    <?php // echo $form->field($model, 'shippable_cb') ?>

    <?php // echo $form->field($model, 'returnable_cb') ?>

    <?php // echo $form->field($model, 'invoiceable_cb') ?>

    <?php // echo $form->field($model, 'billing_type') ?>

    <?php // echo $form->field($model, 'service_request_cb') ?>

    <?php // echo $form->field($model, 'atp') ?>

    <?php // echo $form->field($model, 'picking_rule') ?>

    <?php // echo $form->field($model, 'sourcing_rule_id') ?>

    <?php // echo $form->field($model, 'sales_ac_id') ?>

    <?php // echo $form->field($model, 'cogs_ac_id') ?>

    <?php // echo $form->field($model, 'deffered_cogs_ac_id') ?>

    <?php // echo $form->field($model, 'ip_tax_class') ?>

    <?php // echo $form->field($model, 'op_tax_class') ?>

    <?php // echo $form->field($model, 'ap_payment_term') ?>

    <?php // echo $form->field($model, 'ar_payment_term') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'rev_enabled_cb') ?>

    <?php // echo $form->field($model, 'rounding_option') ?>

    <?php // echo $form->field($model, 'onhand_with_rev_cb') ?>

    <?php // echo $form->field($model, 'item_rev_number') ?>

    <?php // echo $form->field($model, 'am_asset_type') ?>

    <?php // echo $form->field($model, 'am_activity_cause') ?>

    <?php // echo $form->field($model, 'am_activity_type') ?>

    <?php // echo $form->field($model, 'am_activity_source') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'creation_date') ?>

    <?php // echo $form->field($model, 'last_update_by') ?>

    <?php // echo $form->field($model, 'last_update_date') ?>

    <?php // echo $form->field($model, 'company_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
