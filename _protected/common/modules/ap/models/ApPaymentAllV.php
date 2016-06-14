<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_payment_all_v".
 *
 * @property integer $ap_payment_header_id
 * @property integer $bu_org_id
 * @property string $payment_type
 * @property string $payment_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property integer $from_bank_header_id
 * @property string $header_amount
 * @property string $currency
 * @property string $document_number
 * @property string $payment_status
 * @property integer $gl_journal_header_id
 * @property integer $ap_payment_line_id
 * @property integer $line_number
 * @property string $amount
 * @property string $line_description
 * @property integer $ap_transaction_header_id
 * @property string $transaction_type
 * @property string $transaction_number
 * @property string $hr_employee_id
 * @property string $apth_currency
 * @property string $apth_header_amount
 * @property string $transaction_status
 * @property string $paid_amount
 * @property string $apth_payment_status
 * @property string $supplier_name
 * @property integer $supplier_number
 * @property string $supplier_site_name
 * @property integer $supplier_site_number
 */
class ApPaymentAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_payment_all_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ap_payment_header_id', 'bu_org_id', 'supplier_id', 'supplier_site_id', 'from_bank_header_id', 'gl_journal_header_id', 'ap_payment_line_id', 'line_number', 'ap_transaction_header_id', 'supplier_number', 'supplier_site_number'], 'integer'],
            [['bu_org_id', 'supplier_id', 'supplier_site_id', 'currency', 'line_number', 'transaction_type', 'apth_currency', 'supplier_name', 'supplier_number', 'supplier_site_number'], 'required'],
            [['header_amount', 'amount', 'apth_header_amount', 'paid_amount'], 'number'],
            [['payment_type', 'payment_number', 'payment_status', 'transaction_status', 'apth_payment_status'], 'string', 'max' => 25],
            [['currency', 'line_description', 'apth_currency'], 'string', 'max' => 256],
            [['document_number', 'transaction_type', 'transaction_number'], 'string', 'max' => 50],
            [['hr_employee_id'], 'string', 'max' => 12],
            [['supplier_name', 'supplier_site_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_payment_header_id' => Yii::t('app', 'Ap Payment Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'payment_type' => Yii::t('app', 'Payment Type'),
            'payment_number' => Yii::t('app', 'Payment Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'from_bank_header_id' => Yii::t('app', 'From Bank Header ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'document_number' => Yii::t('app', 'Document Number'),
            'payment_status' => Yii::t('app', 'Payment Status'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'ap_payment_line_id' => Yii::t('app', 'Ap Payment Line ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'amount' => Yii::t('app', 'Amount'),
            'line_description' => Yii::t('app', 'Line Description'),
            'ap_transaction_header_id' => Yii::t('app', 'Ap Transaction Header ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'transaction_number' => Yii::t('app', 'Transaction Number'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'apth_currency' => Yii::t('app', 'Apth Currency'),
            'apth_header_amount' => Yii::t('app', 'Apth Header Amount'),
            'transaction_status' => Yii::t('app', 'Transaction Status'),
            'paid_amount' => Yii::t('app', 'Paid Amount'),
            'apth_payment_status' => Yii::t('app', 'Apth Payment Status'),
            'supplier_name' => Yii::t('app', 'Supplier Name'),
            'supplier_number' => Yii::t('app', 'Supplier Number'),
            'supplier_site_name' => Yii::t('app', 'Supplier Site Name'),
            'supplier_site_number' => Yii::t('app', 'Supplier Site Number'),
        ];
    }
}
