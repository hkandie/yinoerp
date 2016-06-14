<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_supply}}".
 *
 * @property integer $fp_mrp_supply_id
 * @property integer $fp_mrp_header_id
 * @property integer $item_id_m
 * @property string $supply_date
 * @property string $quantity
 * @property integer $supply_item_id_m
 * @property integer $toplevel_supply_item_id_m
 * @property string $supply_type
 * @property string $primary_supply_type
 * @property integer $supply_header_id
 * @property integer $supply_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMrpSupply extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_supply}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_mrp_header_id', 'item_id_m', 'supply_item_id_m', 'toplevel_supply_item_id_m', 'supply_header_id', 'supply_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['item_id_m', 'supply_type', 'primary_supply_type', 'supply_header_id', 'supply_line_id', 'created_by', 'last_update_by'], 'required'],
            [['supply_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity'], 'number'],
            [['supply_type', 'primary_supply_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_supply_id' => Yii::t('app', 'Fp Mrp Supply ID'),
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'supply_date' => Yii::t('app', 'Supply Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'supply_item_id_m' => Yii::t('app', 'Supply Item Id M'),
            'toplevel_supply_item_id_m' => Yii::t('app', 'Toplevel Supply Item Id M'),
            'supply_type' => Yii::t('app', 'Supply Type'),
            'primary_supply_type' => Yii::t('app', 'Primary Supply Type'),
            'supply_header_id' => Yii::t('app', 'Supply Header ID'),
            'supply_line_id' => Yii::t('app', 'Supply Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
