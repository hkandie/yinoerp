<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_svo_estimates}}".
 *
 * @property integer $hd_svo_estimates_id
 * @property integer $hd_svo_header_id
 * @property integer $item_id_m
 * @property string $billing_source
 * @property string $billing_type
 * @property integer $price_list_header_id
 * @property string $quantity
 * @property integer $uom_id
 * @property integer $action_type_id
 * @property string $price_date
 * @property string $unit_price
 * @property string $line_price
 * @property string $line_status
 * @property integer $sd_so_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSvoEstimates extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_svo_estimates}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_svo_header_id', 'item_id_m', 'line_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_svo_header_id', 'item_id_m', 'price_list_header_id', 'uom_id', 'action_type_id', 'sd_so_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'unit_price', 'line_price'], 'number'],
            [['price_date', 'creation_date', 'last_update_date'], 'safe'],
            [['billing_source', 'line_status'], 'string', 'max' => 25],
            [['billing_type'], 'string', 'max' => 15],
            [['hd_svo_header_id'], 'unique'],
            [['hd_svo_header_id', 'billing_source'], 'unique', 'targetAttribute' => ['hd_svo_header_id', 'billing_source'], 'message' => 'The combination of Hd Svo Header ID and Billing Source has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_svo_estimates_id' => Yii::t('app', 'Hd Svo Estimates ID'),
            'hd_svo_header_id' => Yii::t('app', 'Hd Svo Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'billing_source' => Yii::t('app', 'Billing Source'),
            'billing_type' => Yii::t('app', 'Billing Type'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'action_type_id' => Yii::t('app', 'Action Type ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'line_status' => Yii::t('app', 'Line Status'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
