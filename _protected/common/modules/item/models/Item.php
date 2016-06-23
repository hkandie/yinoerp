<?php

namespace common\modules\item\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property integer $item_id
 * @property integer $item_id_m
 * @property integer $org_id
 * @property string $item_number
 * @property string $item_description
 * @property integer $image_file_id
 * @property string $product_line
 * @property string $product_line_percentage
 * @property string $locator_control
 * @property integer $allow_negative_balance_cb
 * @property string $long_description
 * @property integer $uom_id
 * @property string $origination_type
 * @property string $origination_date
 * @property string $item_type
 * @property string $item_status
 * @property integer $inventory_item_cb
 * @property integer $stockable_cb
 * @property integer $transactable_cb
 * @property integer $reservable_cb
 * @property integer $cycle_count_enabled_cb
 * @property integer $kit_cb
 * @property integer $bom_enabled_cb
 * @property string $bom_type
 * @property integer $costing_enabled_cb
 * @property integer $inventory_asset_cb
 * @property string $default_cost_group
 * @property integer $material_ac_id
 * @property integer $material_oh_ac_id
 * @property integer $overhead_ac_id
 * @property integer $resource_ac_id
 * @property integer $osp_ac_id
 * @property integer $expense_ac_id
 * @property string $lot_uniqueness
 * @property string $lot_generation
 * @property string $lot_prefix
 * @property string $lot_starting_number
 * @property string $serial_uniqueness
 * @property string $serial_generation
 * @property string $serial_prefix
 * @property integer $serial_starting_number
 * @property integer $purchased_cb
 * @property integer $use_asl_cb
 * @property string $invoice_matching
 * @property integer $default_buyer
 * @property string $list_price
 * @property string $contract_item_type
 * @property string $duration_uom_id
 * @property integer $receipt_sub_inventory
 * @property integer $over_receipt_percentage
 * @property string $over_receipt_action
 * @property integer $receipt_days_early
 * @property integer $receipt_days_late
 * @property string $receipt_day_action
 * @property string $receipt_routing
 * @property integer $weight_uom_id
 * @property integer $weight
 * @property integer $volume_uom_id
 * @property integer $volume
 * @property integer $dimension_uom_id
 * @property integer $length
 * @property integer $width
 * @property integer $height
 * @property integer $equipment_cb
 * @property integer $electronic_format_cb
 * @property string $planning_method
 * @property string $planner
 * @property string $make_buy
 * @property integer $wip_supply_subinventory
 * @property integer $wip_supply_locator
 * @property integer $fix_order_quantity
 * @property integer $saftey_stock_days
 * @property integer $saftey_stock_percentage
 * @property integer $saftey_stock_quantity
 * @property integer $fix_days_supply
 * @property integer $fix_lot_multiplier
 * @property integer $minimum_order_quantity
 * @property integer $maximum_order_quantity
 * @property string $minmax_min_quantity
 * @property string $minmax_max_quantity
 * @property integer $minmax_multibin_number
 * @property string $minmax_multibin_size
 * @property string $forecast_method
 * @property string $forecast_control
 * @property integer $demand_timefence
 * @property integer $planning_timefence
 * @property integer $release_timefence
 * @property integer $pre_processing_lt
 * @property integer $post_processing_lt
 * @property integer $processing_lt
 * @property integer $cumulative_mfg_lt
 * @property integer $cumulative_total_lt
 * @property integer $lt_lot_size
 * @property integer $build_in_wip_cb
 * @property string $wip_supply_type
 * @property integer $customer_ordered_cb
 * @property integer $internal_ordered_cb
 * @property integer $shippable_cb
 * @property integer $returnable_cb
 * @property integer $invoiceable_cb
 * @property string $billing_type
 * @property integer $service_request_cb
 * @property string $atp
 * @property string $picking_rule
 * @property integer $sourcing_rule_id
 * @property integer $sales_ac_id
 * @property integer $cogs_ac_id
 * @property integer $deffered_cogs_ac_id
 * @property string $ip_tax_class
 * @property string $op_tax_class
 * @property integer $ap_payment_term
 * @property integer $ar_payment_term
 * @property string $duration
 * @property integer $rev_enabled_cb
 * @property string $rounding_option
 * @property integer $onhand_with_rev_cb
 * @property integer $item_rev_number
 * @property string $am_asset_type
 * @property string $am_activity_cause
 * @property string $am_activity_type
 * @property string $am_activity_source
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'image_file_id', 'allow_negative_balance_cb', 'uom_id', 'inventory_item_cb', 'stockable_cb', 'transactable_cb', 'reservable_cb', 'cycle_count_enabled_cb', 'kit_cb', 'bom_enabled_cb', 'costing_enabled_cb', 'inventory_asset_cb', 'material_ac_id', 'material_oh_ac_id', 'overhead_ac_id', 'resource_ac_id', 'osp_ac_id', 'expense_ac_id', 'serial_starting_number', 'purchased_cb', 'use_asl_cb', 'default_buyer', 'receipt_sub_inventory', 'over_receipt_percentage', 'receipt_days_early', 'receipt_days_late', 'weight_uom_id', 'weight', 'volume_uom_id', 'volume', 'dimension_uom_id', 'length', 'width', 'height', 'equipment_cb', 'electronic_format_cb', 'wip_supply_subinventory', 'wip_supply_locator', 'fix_order_quantity', 'saftey_stock_days', 'saftey_stock_percentage', 'saftey_stock_quantity', 'fix_days_supply', 'fix_lot_multiplier', 'minimum_order_quantity', 'maximum_order_quantity', 'minmax_multibin_number', 'demand_timefence', 'planning_timefence', 'release_timefence', 'pre_processing_lt', 'post_processing_lt', 'processing_lt', 'cumulative_mfg_lt', 'cumulative_total_lt', 'lt_lot_size', 'build_in_wip_cb', 'customer_ordered_cb', 'internal_ordered_cb', 'shippable_cb', 'returnable_cb', 'invoiceable_cb', 'service_request_cb', 'sourcing_rule_id', 'sales_ac_id', 'cogs_ac_id', 'deffered_cogs_ac_id', 'ap_payment_term', 'ar_payment_term', 'rev_enabled_cb', 'onhand_with_rev_cb', 'item_rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['org_id', 'item_number', 'uom_id', 'origination_type', 'origination_date', 'item_status', 'created_by', 'last_update_by'], 'required'],
            [['product_line_percentage', 'list_price', 'minmax_min_quantity', 'minmax_max_quantity', 'minmax_multibin_size', 'duration'], 'number'],
            [['long_description'], 'string'],
            [['origination_date', 'creation_date', 'last_update_date'], 'safe'],
            [['item_number', 'duration_uom_id'], 'string', 'max' => 50],
            [['item_description'], 'string', 'max' => 256],
            [['product_line', 'item_type', 'over_receipt_action', 'receipt_day_action', 'receipt_routing', 'planning_method', 'planner', 'forecast_method', 'forecast_control', 'wip_supply_type', 'atp', 'picking_rule'], 'string', 'max' => 20],
            [['locator_control', 'item_status', 'bom_type', 'default_cost_group', 'billing_type'], 'string', 'max' => 15],
            [['origination_type', 'lot_uniqueness', 'lot_generation', 'lot_prefix', 'lot_starting_number', 'serial_uniqueness', 'serial_generation', 'serial_prefix', 'invoice_matching', 'contract_item_type', 'ip_tax_class', 'op_tax_class', 'rounding_option', 'am_asset_type', 'am_activity_cause', 'am_activity_type', 'am_activity_source'], 'string', 'max' => 25],
            [['make_buy'], 'string', 'max' => 10],
            [['item_number', 'org_id'], 'unique', 'targetAttribute' => ['item_number', 'org_id'], 'message' => 'The combination of Org ID and Item Number has already been taken.'],
            [['item_id_m', 'org_id'], 'unique', 'targetAttribute' => ['item_id_m', 'org_id'], 'message' => 'The combination of Item Id M and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id' => Yii::t('app', 'Item ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'image_file_id' => Yii::t('app', 'Image File ID'),
            'product_line' => Yii::t('app', 'Product Line'),
            'product_line_percentage' => Yii::t('app', 'Product Line Percentage'),
            'locator_control' => Yii::t('app', 'Locator Control'),
            'allow_negative_balance_cb' => Yii::t('app', 'Allow Negative Balance Cb'),
            'long_description' => Yii::t('app', 'Long Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'origination_type' => Yii::t('app', 'Origination Type'),
            'origination_date' => Yii::t('app', 'Origination Date'),
            'item_type' => Yii::t('app', 'Item Type'),
            'item_status' => Yii::t('app', 'Item Status'),
            'inventory_item_cb' => Yii::t('app', 'Inventory Item Cb'),
            'stockable_cb' => Yii::t('app', 'Stockable Cb'),
            'transactable_cb' => Yii::t('app', 'Transactable Cb'),
            'reservable_cb' => Yii::t('app', 'Reservable Cb'),
            'cycle_count_enabled_cb' => Yii::t('app', 'Cycle Count Enabled Cb'),
            'kit_cb' => Yii::t('app', 'Kit Cb'),
            'bom_enabled_cb' => Yii::t('app', 'Bom Enabled Cb'),
            'bom_type' => Yii::t('app', 'Bom Type'),
            'costing_enabled_cb' => Yii::t('app', 'Costing Enabled Cb'),
            'inventory_asset_cb' => Yii::t('app', 'Inventory Asset Cb'),
            'default_cost_group' => Yii::t('app', 'Default Cost Group'),
            'material_ac_id' => Yii::t('app', 'Material Ac ID'),
            'material_oh_ac_id' => Yii::t('app', 'Material Oh Ac ID'),
            'overhead_ac_id' => Yii::t('app', 'Overhead Ac ID'),
            'resource_ac_id' => Yii::t('app', 'Resource Ac ID'),
            'osp_ac_id' => Yii::t('app', 'Osp Ac ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'lot_uniqueness' => Yii::t('app', 'Lot Uniqueness'),
            'lot_generation' => Yii::t('app', 'Lot Generation'),
            'lot_prefix' => Yii::t('app', 'Lot Prefix'),
            'lot_starting_number' => Yii::t('app', 'Lot Starting Number'),
            'serial_uniqueness' => Yii::t('app', 'Serial Uniqueness'),
            'serial_generation' => Yii::t('app', 'Serial Generation'),
            'serial_prefix' => Yii::t('app', 'Serial Prefix'),
            'serial_starting_number' => Yii::t('app', 'Serial Starting Number'),
            'purchased_cb' => Yii::t('app', 'Purchased Cb'),
            'use_asl_cb' => Yii::t('app', 'Use Asl Cb'),
            'invoice_matching' => Yii::t('app', 'Invoice Matching'),
            'default_buyer' => Yii::t('app', 'Default Buyer'),
            'list_price' => Yii::t('app', 'List Price'),
            'contract_item_type' => Yii::t('app', 'Contract Item Type'),
            'duration_uom_id' => Yii::t('app', 'Duration Uom ID'),
            'receipt_sub_inventory' => Yii::t('app', 'Receipt Sub Inventory'),
            'over_receipt_percentage' => Yii::t('app', 'Over Receipt Percentage'),
            'over_receipt_action' => Yii::t('app', 'Over Receipt Action'),
            'receipt_days_early' => Yii::t('app', 'Receipt Days Early'),
            'receipt_days_late' => Yii::t('app', 'Receipt Days Late'),
            'receipt_day_action' => Yii::t('app', 'Receipt Day Action'),
            'receipt_routing' => Yii::t('app', 'Receipt Routing'),
            'weight_uom_id' => Yii::t('app', 'Weight Uom ID'),
            'weight' => Yii::t('app', 'Weight'),
            'volume_uom_id' => Yii::t('app', 'Volume Uom ID'),
            'volume' => Yii::t('app', 'Volume'),
            'dimension_uom_id' => Yii::t('app', 'Dimension Uom ID'),
            'length' => Yii::t('app', 'Length'),
            'width' => Yii::t('app', 'Width'),
            'height' => Yii::t('app', 'Height'),
            'equipment_cb' => Yii::t('app', 'Equipment Cb'),
            'electronic_format_cb' => Yii::t('app', 'Electronic Format Cb'),
            'planning_method' => Yii::t('app', 'Planning Method'),
            'planner' => Yii::t('app', 'Planner'),
            'make_buy' => Yii::t('app', 'Make Buy'),
            'wip_supply_subinventory' => Yii::t('app', 'Wip Supply Subinventory'),
            'wip_supply_locator' => Yii::t('app', 'Wip Supply Locator'),
            'fix_order_quantity' => Yii::t('app', 'Fix Order Quantity'),
            'saftey_stock_days' => Yii::t('app', 'Saftey Stock Days'),
            'saftey_stock_percentage' => Yii::t('app', 'Saftey Stock Percentage'),
            'saftey_stock_quantity' => Yii::t('app', 'Saftey Stock Quantity'),
            'fix_days_supply' => Yii::t('app', 'Fix Days Supply'),
            'fix_lot_multiplier' => Yii::t('app', 'Fix Lot Multiplier'),
            'minimum_order_quantity' => Yii::t('app', 'Minimum Order Quantity'),
            'maximum_order_quantity' => Yii::t('app', 'Maximum Order Quantity'),
            'minmax_min_quantity' => Yii::t('app', 'Minmax Min Quantity'),
            'minmax_max_quantity' => Yii::t('app', 'Minmax Max Quantity'),
            'minmax_multibin_number' => Yii::t('app', 'Minmax Multibin Number'),
            'minmax_multibin_size' => Yii::t('app', 'Minmax Multibin Size'),
            'forecast_method' => Yii::t('app', 'Forecast Method'),
            'forecast_control' => Yii::t('app', 'Forecast Control'),
            'demand_timefence' => Yii::t('app', 'Demand Timefence'),
            'planning_timefence' => Yii::t('app', 'Planning Timefence'),
            'release_timefence' => Yii::t('app', 'Release Timefence'),
            'pre_processing_lt' => Yii::t('app', 'Pre Processing Lt'),
            'post_processing_lt' => Yii::t('app', 'Post Processing Lt'),
            'processing_lt' => Yii::t('app', 'Processing Lt'),
            'cumulative_mfg_lt' => Yii::t('app', 'Cumulative Mfg Lt'),
            'cumulative_total_lt' => Yii::t('app', 'Cumulative Total Lt'),
            'lt_lot_size' => Yii::t('app', 'Lt Lot Size'),
            'build_in_wip_cb' => Yii::t('app', 'Build In Wip Cb'),
            'wip_supply_type' => Yii::t('app', 'Wip Supply Type'),
            'customer_ordered_cb' => Yii::t('app', 'Customer Ordered Cb'),
            'internal_ordered_cb' => Yii::t('app', 'Internal Ordered Cb'),
            'shippable_cb' => Yii::t('app', 'Shippable Cb'),
            'returnable_cb' => Yii::t('app', 'Returnable Cb'),
            'invoiceable_cb' => Yii::t('app', 'Invoiceable Cb'),
            'billing_type' => Yii::t('app', 'Billing Type'),
            'service_request_cb' => Yii::t('app', 'Service Request Cb'),
            'atp' => Yii::t('app', 'Atp'),
            'picking_rule' => Yii::t('app', 'Picking Rule'),
            'sourcing_rule_id' => Yii::t('app', 'Sourcing Rule ID'),
            'sales_ac_id' => Yii::t('app', 'Sales Ac ID'),
            'cogs_ac_id' => Yii::t('app', 'Cogs Ac ID'),
            'deffered_cogs_ac_id' => Yii::t('app', 'Deffered Cogs Ac ID'),
            'ip_tax_class' => Yii::t('app', 'Ip Tax Class'),
            'op_tax_class' => Yii::t('app', 'Op Tax Class'),
            'ap_payment_term' => Yii::t('app', 'Ap Payment Term'),
            'ar_payment_term' => Yii::t('app', 'Ar Payment Term'),
            'duration' => Yii::t('app', 'Duration'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rounding_option' => Yii::t('app', 'Rounding Option'),
            'onhand_with_rev_cb' => Yii::t('app', 'Onhand With Rev Cb'),
            'item_rev_number' => Yii::t('app', 'Item Rev Number'),
            'am_asset_type' => Yii::t('app', 'Am Asset Type'),
            'am_activity_cause' => Yii::t('app', 'Am Activity Cause'),
            'am_activity_type' => Yii::t('app', 'Am Activity Type'),
            'am_activity_source' => Yii::t('app', 'Am Activity Source'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
