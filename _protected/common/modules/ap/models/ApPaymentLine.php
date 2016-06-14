<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_payment_line".
 *
 * @property integer $ap_payment_line_id
 * @property integer $ap_payment_header_id
 * @property integer $ap_transaction_header_id
 * @property integer $line_number
 * @property string $amount
 * @property string $line_description
 * @property string $gl_amount
 * @property string $exchange_rate
 * @property string $status
 * @property string $line_source
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $period_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ApPaymentLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_payment_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ap_payment_header_id', 'ap_transaction_header_id', 'line_number', 'created_by', 'last_update_by'], 'required'],
            [['ap_payment_header_id', 'ap_transaction_header_id', 'line_number', 'period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount', 'gl_amount', 'exchange_rate'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['line_description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 50],
            [['line_source', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['ap_payment_header_id', 'line_number'], 'unique', 'targetAttribute' => ['ap_payment_header_id', 'line_number'], 'message' => 'The combination of Ap Payment Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_payment_line_id' => Yii::t('app', 'Ap Payment Line ID'),
            'ap_payment_header_id' => Yii::t('app', 'Ap Payment Header ID'),
            'ap_transaction_header_id' => Yii::t('app', 'Ap Transaction Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'amount' => Yii::t('app', 'Amount'),
            'line_description' => Yii::t('app', 'Line Description'),
            'gl_amount' => Yii::t('app', 'Gl Amount'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'status' => Yii::t('app', 'Status'),
            'line_source' => Yii::t('app', 'Line Source'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'period_id' => Yii::t('app', 'Period ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
