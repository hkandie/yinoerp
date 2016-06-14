<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_demand_v}}".
 *
 * @property integer $fp_mrp_demand_id
 * @property integer $fp_mrp_header_id
 * @property string $mrp_name
 * @property integer $org_id
 * @property integer $item_id_m
 * @property string $demand_date
 * @property string $quantity
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $source_type
 * @property string $primary_source_type
 * @property integer $source_header_id
 * @property integer $source_line_id
 * @property string $item_number
 * @property string $item_description
 * @property string $planner
 * @property string $product_line
 * @property string $standard_cost
 * @property string $sales_price
 * @property string $purchase_price
 */
class FpMrpDemandV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_demand_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_mrp_demand_id', 'fp_mrp_header_id', 'org_id', 'item_id_m', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'source_header_id', 'source_line_id'], 'integer'],
            [['mrp_name', 'org_id', 'item_id_m', 'source_type', 'primary_source_type', 'source_header_id', 'source_line_id'], 'required'],
            [['demand_date'], 'safe'],
            [['quantity', 'standard_cost', 'sales_price', 'purchase_price'], 'number'],
            [['mrp_name', 'source_type', 'primary_source_type'], 'string', 'max' => 25],
            [['item_number'], 'string', 'max' => 50],
            [['item_description'], 'string', 'max' => 256],
            [['planner', 'product_line'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_demand_id' => Yii::t('app', 'Fp Mrp Demand ID'),
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'mrp_name' => Yii::t('app', 'Mrp Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'demand_date' => Yii::t('app', 'Demand Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'source_type' => Yii::t('app', 'Source Type'),
            'primary_source_type' => Yii::t('app', 'Primary Source Type'),
            'source_header_id' => Yii::t('app', 'Source Header ID'),
            'source_line_id' => Yii::t('app', 'Source Line ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'planner' => Yii::t('app', 'Planner'),
            'product_line' => Yii::t('app', 'Product Line'),
            'standard_cost' => Yii::t('app', 'Standard Cost'),
            'sales_price' => Yii::t('app', 'Sales Price'),
            'purchase_price' => Yii::t('app', 'Purchase Price'),
        ];
    }
}
