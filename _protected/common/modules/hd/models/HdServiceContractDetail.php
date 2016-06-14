<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_contract_detail}}".
 *
 * @property integer $hd_service_contract_detail_id
 * @property integer $hd_service_contract_line_id
 * @property integer $item_id_m
 * @property integer $inv_serial_number_id
 * @property integer $detail_number
 * @property integer $ar_customer_id
 * @property string $unit_price
 * @property string $level
 * @property string $line_ref
 * @property string $renewal_type
 * @property string $status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $description
 * @property string $quantity
 * @property integer $uom_id
 * @property string $line_amount
 * @property string $start_date
 * @property string $end_date
 * @property integer $duration_uom_id
 * @property string $duration
 * @property string $tax_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceContractDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_contract_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_service_contract_line_id', 'detail_number', 'end_date', 'created_by', 'last_update_by'], 'required'],
            [['hd_service_contract_line_id', 'item_id_m', 'inv_serial_number_id', 'detail_number', 'ar_customer_id', 'uom_id', 'duration_uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['unit_price', 'quantity', 'line_amount', 'duration', 'tax_amount'], 'number'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['level', 'renewal_type', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['line_ref'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_contract_detail_id' => Yii::t('app', 'Hd Service Contract Detail ID'),
            'hd_service_contract_line_id' => Yii::t('app', 'Hd Service Contract Line ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'detail_number' => Yii::t('app', 'Detail Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'level' => Yii::t('app', 'Level'),
            'line_ref' => Yii::t('app', 'Line Ref'),
            'renewal_type' => Yii::t('app', 'Renewal Type'),
            'status' => Yii::t('app', 'Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'description' => Yii::t('app', 'Description'),
            'quantity' => Yii::t('app', 'Quantity'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'line_amount' => Yii::t('app', 'Line Amount'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'duration_uom_id' => Yii::t('app', 'Duration Uom ID'),
            'duration' => Yii::t('app', 'Duration'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
