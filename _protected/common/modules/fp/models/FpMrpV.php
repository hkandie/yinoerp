<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_v}}".
 *
 * @property string $mrp_name
 * @property integer $org_id
 * @property string $org
 * @property string $item_number
 * @property string $item_description
 * @property string $demand_item_number
 * @property string $demand_item_description
 * @property string $toplevel_demand_item_number
 * @property string $toplevel_demand_item_description
 * @property integer $sourcing_rule_id
 * @property integer $fp_mrp_planned_order_id
 * @property integer $fp_mrp_header_id
 * @property string $order_type
 * @property string $order_action
 * @property integer $item_id_m
 * @property string $quantity
 * @property string $need_by_date
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $source_type
 * @property string $primary_source_type
 * @property integer $source_header_id
 * @property integer $source_line_id
 * @property string $so_number
 * @property string $forecast
 * @property integer $sales_order_line
 */
class FpMrpV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'sourcing_rule_id', 'fp_mrp_planned_order_id', 'fp_mrp_header_id', 'item_id_m', 'supplier_id', 'supplier_site_id', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'source_header_id', 'source_line_id', 'sales_order_line'], 'integer'],
            [['order_action', 'item_id_m', 'source_type', 'primary_source_type', 'source_header_id', 'source_line_id'], 'required'],
            [['quantity'], 'number'],
            [['need_by_date'], 'safe'],
            [['mrp_name', 'order_type', 'order_action', 'source_type', 'primary_source_type', 'forecast'], 'string', 'max' => 25],
            [['org', 'item_number', 'demand_item_number', 'toplevel_demand_item_number', 'so_number'], 'string', 'max' => 50],
            [['item_description', 'demand_item_description', 'toplevel_demand_item_description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mrp_name' => Yii::t('app', 'Mrp Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'org' => Yii::t('app', 'Org'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'demand_item_number' => Yii::t('app', 'Demand Item Number'),
            'demand_item_description' => Yii::t('app', 'Demand Item Description'),
            'toplevel_demand_item_number' => Yii::t('app', 'Toplevel Demand Item Number'),
            'toplevel_demand_item_description' => Yii::t('app', 'Toplevel Demand Item Description'),
            'sourcing_rule_id' => Yii::t('app', 'Sourcing Rule ID'),
            'fp_mrp_planned_order_id' => Yii::t('app', 'Fp Mrp Planned Order ID'),
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'order_type' => Yii::t('app', 'Order Type'),
            'order_action' => Yii::t('app', 'Order Action'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'quantity' => Yii::t('app', 'Quantity'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'source_type' => Yii::t('app', 'Source Type'),
            'primary_source_type' => Yii::t('app', 'Primary Source Type'),
            'source_header_id' => Yii::t('app', 'Source Header ID'),
            'source_line_id' => Yii::t('app', 'Source Line ID'),
            'so_number' => Yii::t('app', 'So Number'),
            'forecast' => Yii::t('app', 'Forecast'),
            'sales_order_line' => Yii::t('app', 'Sales Order Line'),
        ];
    }
}
