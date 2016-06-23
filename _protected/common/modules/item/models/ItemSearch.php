<?php

namespace common\modules\item\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\item\models\Item;

/**
 * ItemSearch represents the model behind the search form about `common\modules\item\models\Item`.
 */
class ItemSearch extends Item
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'item_id_m', 'org_id', 'image_file_id', 'allow_negative_balance_cb', 'uom_id', 'inventory_item_cb', 'stockable_cb', 'transactable_cb', 'reservable_cb', 'cycle_count_enabled_cb', 'kit_cb', 'bom_enabled_cb', 'costing_enabled_cb', 'inventory_asset_cb', 'material_ac_id', 'material_oh_ac_id', 'overhead_ac_id', 'resource_ac_id', 'osp_ac_id', 'expense_ac_id', 'serial_starting_number', 'purchased_cb', 'use_asl_cb', 'default_buyer', 'receipt_sub_inventory', 'over_receipt_percentage', 'receipt_days_early', 'receipt_days_late', 'weight_uom_id', 'weight', 'volume_uom_id', 'volume', 'dimension_uom_id', 'length', 'width', 'height', 'equipment_cb', 'electronic_format_cb', 'wip_supply_subinventory', 'wip_supply_locator', 'fix_order_quantity', 'saftey_stock_days', 'saftey_stock_percentage', 'saftey_stock_quantity', 'fix_days_supply', 'fix_lot_multiplier', 'minimum_order_quantity', 'maximum_order_quantity', 'minmax_multibin_number', 'demand_timefence', 'planning_timefence', 'release_timefence', 'pre_processing_lt', 'post_processing_lt', 'processing_lt', 'cumulative_mfg_lt', 'cumulative_total_lt', 'lt_lot_size', 'build_in_wip_cb', 'customer_ordered_cb', 'internal_ordered_cb', 'shippable_cb', 'returnable_cb', 'invoiceable_cb', 'service_request_cb', 'sourcing_rule_id', 'sales_ac_id', 'cogs_ac_id', 'deffered_cogs_ac_id', 'ap_payment_term', 'ar_payment_term', 'rev_enabled_cb', 'onhand_with_rev_cb', 'item_rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['item_number', 'item_description', 'product_line', 'locator_control', 'long_description', 'origination_type', 'origination_date', 'item_type', 'item_status', 'bom_type', 'default_cost_group', 'lot_uniqueness', 'lot_generation', 'lot_prefix', 'lot_starting_number', 'serial_uniqueness', 'serial_generation', 'serial_prefix', 'invoice_matching', 'contract_item_type', 'duration_uom_id', 'over_receipt_action', 'receipt_day_action', 'receipt_routing', 'planning_method', 'planner', 'make_buy', 'forecast_method', 'forecast_control', 'wip_supply_type', 'billing_type', 'atp', 'picking_rule', 'ip_tax_class', 'op_tax_class', 'rounding_option', 'am_asset_type', 'am_activity_cause', 'am_activity_type', 'am_activity_source', 'creation_date', 'last_update_date'], 'safe'],
            [['product_line_percentage', 'list_price', 'minmax_min_quantity', 'minmax_max_quantity', 'minmax_multibin_size', 'duration'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Item::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'item_id' => $this->item_id,
            'item_id_m' => $this->item_id_m,
            'org_id' => $this->org_id,
            'image_file_id' => $this->image_file_id,
            'product_line_percentage' => $this->product_line_percentage,
            'allow_negative_balance_cb' => $this->allow_negative_balance_cb,
            'uom_id' => $this->uom_id,
            'origination_date' => $this->origination_date,
            'inventory_item_cb' => $this->inventory_item_cb,
            'stockable_cb' => $this->stockable_cb,
            'transactable_cb' => $this->transactable_cb,
            'reservable_cb' => $this->reservable_cb,
            'cycle_count_enabled_cb' => $this->cycle_count_enabled_cb,
            'kit_cb' => $this->kit_cb,
            'bom_enabled_cb' => $this->bom_enabled_cb,
            'costing_enabled_cb' => $this->costing_enabled_cb,
            'inventory_asset_cb' => $this->inventory_asset_cb,
            'material_ac_id' => $this->material_ac_id,
            'material_oh_ac_id' => $this->material_oh_ac_id,
            'overhead_ac_id' => $this->overhead_ac_id,
            'resource_ac_id' => $this->resource_ac_id,
            'osp_ac_id' => $this->osp_ac_id,
            'expense_ac_id' => $this->expense_ac_id,
            'serial_starting_number' => $this->serial_starting_number,
            'purchased_cb' => $this->purchased_cb,
            'use_asl_cb' => $this->use_asl_cb,
            'default_buyer' => $this->default_buyer,
            'list_price' => $this->list_price,
            'receipt_sub_inventory' => $this->receipt_sub_inventory,
            'over_receipt_percentage' => $this->over_receipt_percentage,
            'receipt_days_early' => $this->receipt_days_early,
            'receipt_days_late' => $this->receipt_days_late,
            'weight_uom_id' => $this->weight_uom_id,
            'weight' => $this->weight,
            'volume_uom_id' => $this->volume_uom_id,
            'volume' => $this->volume,
            'dimension_uom_id' => $this->dimension_uom_id,
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'equipment_cb' => $this->equipment_cb,
            'electronic_format_cb' => $this->electronic_format_cb,
            'wip_supply_subinventory' => $this->wip_supply_subinventory,
            'wip_supply_locator' => $this->wip_supply_locator,
            'fix_order_quantity' => $this->fix_order_quantity,
            'saftey_stock_days' => $this->saftey_stock_days,
            'saftey_stock_percentage' => $this->saftey_stock_percentage,
            'saftey_stock_quantity' => $this->saftey_stock_quantity,
            'fix_days_supply' => $this->fix_days_supply,
            'fix_lot_multiplier' => $this->fix_lot_multiplier,
            'minimum_order_quantity' => $this->minimum_order_quantity,
            'maximum_order_quantity' => $this->maximum_order_quantity,
            'minmax_min_quantity' => $this->minmax_min_quantity,
            'minmax_max_quantity' => $this->minmax_max_quantity,
            'minmax_multibin_number' => $this->minmax_multibin_number,
            'minmax_multibin_size' => $this->minmax_multibin_size,
            'demand_timefence' => $this->demand_timefence,
            'planning_timefence' => $this->planning_timefence,
            'release_timefence' => $this->release_timefence,
            'pre_processing_lt' => $this->pre_processing_lt,
            'post_processing_lt' => $this->post_processing_lt,
            'processing_lt' => $this->processing_lt,
            'cumulative_mfg_lt' => $this->cumulative_mfg_lt,
            'cumulative_total_lt' => $this->cumulative_total_lt,
            'lt_lot_size' => $this->lt_lot_size,
            'build_in_wip_cb' => $this->build_in_wip_cb,
            'customer_ordered_cb' => $this->customer_ordered_cb,
            'internal_ordered_cb' => $this->internal_ordered_cb,
            'shippable_cb' => $this->shippable_cb,
            'returnable_cb' => $this->returnable_cb,
            'invoiceable_cb' => $this->invoiceable_cb,
            'service_request_cb' => $this->service_request_cb,
            'sourcing_rule_id' => $this->sourcing_rule_id,
            'sales_ac_id' => $this->sales_ac_id,
            'cogs_ac_id' => $this->cogs_ac_id,
            'deffered_cogs_ac_id' => $this->deffered_cogs_ac_id,
            'ap_payment_term' => $this->ap_payment_term,
            'ar_payment_term' => $this->ar_payment_term,
            'duration' => $this->duration,
            'rev_enabled_cb' => $this->rev_enabled_cb,
            'onhand_with_rev_cb' => $this->onhand_with_rev_cb,
            'item_rev_number' => $this->item_rev_number,
            'created_by' => $this->created_by,
            'creation_date' => $this->creation_date,
            'last_update_by' => $this->last_update_by,
            'last_update_date' => $this->last_update_date,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'item_number', $this->item_number])
            ->andFilterWhere(['like', 'item_description', $this->item_description])
            ->andFilterWhere(['like', 'product_line', $this->product_line])
            ->andFilterWhere(['like', 'locator_control', $this->locator_control])
            ->andFilterWhere(['like', 'long_description', $this->long_description])
            ->andFilterWhere(['like', 'origination_type', $this->origination_type])
            ->andFilterWhere(['like', 'item_type', $this->item_type])
            ->andFilterWhere(['like', 'item_status', $this->item_status])
            ->andFilterWhere(['like', 'bom_type', $this->bom_type])
            ->andFilterWhere(['like', 'default_cost_group', $this->default_cost_group])
            ->andFilterWhere(['like', 'lot_uniqueness', $this->lot_uniqueness])
            ->andFilterWhere(['like', 'lot_generation', $this->lot_generation])
            ->andFilterWhere(['like', 'lot_prefix', $this->lot_prefix])
            ->andFilterWhere(['like', 'lot_starting_number', $this->lot_starting_number])
            ->andFilterWhere(['like', 'serial_uniqueness', $this->serial_uniqueness])
            ->andFilterWhere(['like', 'serial_generation', $this->serial_generation])
            ->andFilterWhere(['like', 'serial_prefix', $this->serial_prefix])
            ->andFilterWhere(['like', 'invoice_matching', $this->invoice_matching])
            ->andFilterWhere(['like', 'contract_item_type', $this->contract_item_type])
            ->andFilterWhere(['like', 'duration_uom_id', $this->duration_uom_id])
            ->andFilterWhere(['like', 'over_receipt_action', $this->over_receipt_action])
            ->andFilterWhere(['like', 'receipt_day_action', $this->receipt_day_action])
            ->andFilterWhere(['like', 'receipt_routing', $this->receipt_routing])
            ->andFilterWhere(['like', 'planning_method', $this->planning_method])
            ->andFilterWhere(['like', 'planner', $this->planner])
            ->andFilterWhere(['like', 'make_buy', $this->make_buy])
            ->andFilterWhere(['like', 'forecast_method', $this->forecast_method])
            ->andFilterWhere(['like', 'forecast_control', $this->forecast_control])
            ->andFilterWhere(['like', 'wip_supply_type', $this->wip_supply_type])
            ->andFilterWhere(['like', 'billing_type', $this->billing_type])
            ->andFilterWhere(['like', 'atp', $this->atp])
            ->andFilterWhere(['like', 'picking_rule', $this->picking_rule])
            ->andFilterWhere(['like', 'ip_tax_class', $this->ip_tax_class])
            ->andFilterWhere(['like', 'op_tax_class', $this->op_tax_class])
            ->andFilterWhere(['like', 'rounding_option', $this->rounding_option])
            ->andFilterWhere(['like', 'am_asset_type', $this->am_asset_type])
            ->andFilterWhere(['like', 'am_activity_cause', $this->am_activity_cause])
            ->andFilterWhere(['like', 'am_activity_type', $this->am_activity_type])
            ->andFilterWhere(['like', 'am_activity_source', $this->am_activity_source]);

        return $dataProvider;
    }
}
