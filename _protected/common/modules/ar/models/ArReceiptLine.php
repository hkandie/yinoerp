<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_receipt_line}}".
 *
 * @property integer $ar_receipt_line_id
 * @property integer $ar_receipt_header_id
 * @property integer $ar_transaction_header_id
 * @property integer $line_number
 * @property string $amount
 * @property string $exchange_rate
 * @property string $line_description
 * @property string $gl_amount
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
class ArReceiptLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_receipt_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_receipt_header_id', 'ar_transaction_header_id', 'line_number', 'created_by', 'last_update_by'], 'required'],
            [['ar_receipt_header_id', 'ar_transaction_header_id', 'line_number', 'period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount', 'exchange_rate', 'gl_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['line_description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 50],
            [['line_source', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['ar_receipt_header_id', 'line_number'], 'unique', 'targetAttribute' => ['ar_receipt_header_id', 'line_number'], 'message' => 'The combination of Ar Receipt Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_receipt_line_id' => Yii::t('app', 'Ar Receipt Line ID'),
            'ar_receipt_header_id' => Yii::t('app', 'Ar Receipt Header ID'),
            'ar_transaction_header_id' => Yii::t('app', 'Ar Transaction Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'amount' => Yii::t('app', 'Amount'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'line_description' => Yii::t('app', 'Line Description'),
            'gl_amount' => Yii::t('app', 'Gl Amount'),
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
