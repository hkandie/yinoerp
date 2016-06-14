<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_demand}}".
 *
 * @property integer $fp_mrp_demand_id
 * @property integer $org_id
 * @property integer $fp_mrp_header_id
 * @property integer $item_id_m
 * @property string $demand_date
 * @property string $quantity
 * @property integer $demand_item_id_m
 * @property integer $toplevel_demand_item_id_m
 * @property string $source_type
 * @property string $primary_source_type
 * @property integer $source_header_id
 * @property integer $source_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMrpDemand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_demand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'item_id_m', 'source_type', 'primary_source_type', 'source_header_id', 'source_line_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'fp_mrp_header_id', 'item_id_m', 'demand_item_id_m', 'toplevel_demand_item_id_m', 'source_header_id', 'source_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['demand_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity'], 'number'],
            [['source_type', 'primary_source_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_demand_id' => Yii::t('app', 'Fp Mrp Demand ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'demand_date' => Yii::t('app', 'Demand Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'demand_item_id_m' => Yii::t('app', 'Demand Item Id M'),
            'toplevel_demand_item_id_m' => Yii::t('app', 'Toplevel Demand Item Id M'),
            'source_type' => Yii::t('app', 'Source Type'),
            'primary_source_type' => Yii::t('app', 'Primary Source Type'),
            'source_header_id' => Yii::t('app', 'Source Header ID'),
            'source_line_id' => Yii::t('app', 'Source Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
