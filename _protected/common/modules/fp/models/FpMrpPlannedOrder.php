<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_planned_order}}".
 *
 * @property integer $fp_mrp_header_id
 * @property string $order_type
 * @property string $order_action
 * @property integer $item_id_m
 * @property string $need_by_date
 * @property string $quantity
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $source_type
 * @property string $primary_source_type
 * @property integer $source_header_id
 * @property integer $source_line_id
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $fp_mrp_planned_order_id
 * @property integer $org_id
 * @property integer $company_id
 */
class FpMrpPlannedOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_planned_order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_mrp_header_id', 'item_id_m', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'source_header_id', 'source_line_id', 'supplier_id', 'supplier_site_id', 'created_by', 'last_update_by', 'org_id', 'company_id'], 'integer'],
            [['order_action', 'item_id_m', 'source_type', 'primary_source_type', 'source_header_id', 'source_line_id', 'created_by', 'last_update_by'], 'required'],
            [['need_by_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity'], 'number'],
            [['order_type', 'order_action', 'source_type', 'primary_source_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'order_type' => Yii::t('app', 'Order Type'),
            'order_action' => Yii::t('app', 'Order Action'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'need_by_date' => Yii::t('app', 'Need By Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'source_type' => Yii::t('app', 'Source Type'),
            'primary_source_type' => Yii::t('app', 'Primary Source Type'),
            'source_header_id' => Yii::t('app', 'Source Header ID'),
            'source_line_id' => Yii::t('app', 'Source Line ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'fp_mrp_planned_order_id' => Yii::t('app', 'Fp Mrp Planned Order ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
