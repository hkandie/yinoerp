<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_rfq_header}}".
 *
 * @property integer $po_rfq_header_id
 * @property integer $bu_org_id
 * @property integer $rfq_number
 * @property string $rfq_name
 * @property string $security_level
 * @property string $outcome
 * @property string $rfq_type
 * @property string $buyer
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $currency
 * @property string $doc_currency
 * @property integer $payment_term_id
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $due_date
 * @property string $rfq_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoRfqHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_rfq_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'rfq_name', 'currency', 'doc_currency', 'payment_term_id', 'rfq_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'rfq_number', 'ship_to_id', 'bill_to_id', 'payment_term_id', 'due_date', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['description'], 'string'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['exchange_rate'], 'number'],
            [['rfq_name', 'exchange_rate_type', 'rfq_status'], 'string', 'max' => 50],
            [['security_level', 'outcome', 'rfq_type'], 'string', 'max' => 25],
            [['buyer'], 'string', 'max' => 256],
            [['currency', 'doc_currency'], 'string', 'max' => 5],
            [['security_level', 'rfq_type'], 'unique', 'targetAttribute' => ['security_level', 'rfq_type'], 'message' => 'The combination of Security Level and Rfq Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_rfq_header_id' => Yii::t('app', 'Po Rfq Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'rfq_number' => Yii::t('app', 'Rfq Number'),
            'rfq_name' => Yii::t('app', 'Rfq Name'),
            'security_level' => Yii::t('app', 'Security Level'),
            'outcome' => Yii::t('app', 'Outcome'),
            'rfq_type' => Yii::t('app', 'Rfq Type'),
            'buyer' => Yii::t('app', 'Buyer'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'due_date' => Yii::t('app', 'Due Date'),
            'rfq_status' => Yii::t('app', 'Rfq Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
