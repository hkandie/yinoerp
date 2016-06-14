<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_contract_line}}".
 *
 * @property integer $hd_service_contract_line_id
 * @property integer $hd_service_contract_header_id
 * @property integer $line_number
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $line_type
 * @property string $unit_price
 * @property string $line_price
 * @property integer $tax_code_id
 * @property string $tax_amount
 * @property string $line_quantity
 * @property string $gl_tax_amount
 * @property string $start_date
 * @property string $line_description
 * @property string $end_date
 * @property integer $duration_uom_id
 * @property string $duration
 * @property integer $renewal_type
 * @property integer $uom_id
 * @property string $status
 * @property string $line_source
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $counter_instance_id
 * @property integer $event_id
 * @property string $termination_date
 * @property integer $period_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceContractLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_contract_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_service_contract_header_id', 'line_number', 'item_description', 'start_date', 'created_by', 'last_update_by'], 'required'],
            [['hd_service_contract_header_id', 'line_number', 'item_id_m', 'tax_code_id', 'duration_uom_id', 'renewal_type', 'uom_id', 'counter_instance_id', 'event_id', 'period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['unit_price', 'line_price', 'tax_amount', 'line_quantity', 'gl_tax_amount', 'end_date', 'duration', 'termination_date'], 'number'],
            [['start_date', 'creation_date', 'last_update_date'], 'safe'],
            [['item_description', 'line_description'], 'string', 'max' => 256],
            [['line_type', 'line_source', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 50],
            [['hd_service_contract_header_id', 'line_number'], 'unique', 'targetAttribute' => ['hd_service_contract_header_id', 'line_number'], 'message' => 'The combination of Hd Service Contract Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_contract_line_id' => Yii::t('app', 'Hd Service Contract Line ID'),
            'hd_service_contract_header_id' => Yii::t('app', 'Hd Service Contract Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_type' => Yii::t('app', 'Line Type'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'start_date' => Yii::t('app', 'Start Date'),
            'line_description' => Yii::t('app', 'Line Description'),
            'end_date' => Yii::t('app', 'End Date'),
            'duration_uom_id' => Yii::t('app', 'Duration Uom ID'),
            'duration' => Yii::t('app', 'Duration'),
            'renewal_type' => Yii::t('app', 'Renewal Type'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'status' => Yii::t('app', 'Status'),
            'line_source' => Yii::t('app', 'Line Source'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'counter_instance_id' => Yii::t('app', 'Counter Instance ID'),
            'event_id' => Yii::t('app', 'Event ID'),
            'termination_date' => Yii::t('app', 'Termination Date'),
            'period_id' => Yii::t('app', 'Period ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
