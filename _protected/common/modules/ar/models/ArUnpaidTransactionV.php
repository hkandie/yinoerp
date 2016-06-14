<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_unpaid_transaction_v}}".
 *
 * @property integer $ar_transaction_header_id
 * @property integer $bu_org_id
 * @property string $transaction_class
 * @property string $transaction_number
 * @property string $header_amount
 * @property string $tax_amount
 * @property string $receipt_amount
 * @property string $exchange_rate
 * @property string $remaing_amount
 * @property string $currency
 * @property string $doc_currency
 * @property string $document_date
 * @property string $document_number
 * @property integer $gl_journal_header_id
 * @property integer $ledger_id
 * @property integer $sd_so_header_id
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property string $customer_name
 * @property string $customer_number
 * @property string $customer_site_name
 * @property integer $customer_site_number
 * @property string $so_number
 * @property string $org
 */
class ArUnpaidTransactionV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_unpaid_transaction_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_transaction_header_id', 'bu_org_id', 'gl_journal_header_id', 'ledger_id', 'sd_so_header_id', 'ar_customer_id', 'ar_customer_site_id', 'customer_site_number'], 'integer'],
            [['bu_org_id', 'currency', 'ar_customer_id', 'ar_customer_site_id', 'customer_name', 'customer_number', 'customer_site_name', 'customer_site_number', 'org'], 'required'],
            [['header_amount', 'tax_amount', 'receipt_amount', 'exchange_rate', 'remaing_amount'], 'number'],
            [['document_date'], 'safe'],
            [['transaction_class', 'doc_currency', 'customer_number'], 'string', 'max' => 25],
            [['transaction_number', 'document_number', 'so_number', 'org'], 'string', 'max' => 50],
            [['currency'], 'string', 'max' => 256],
            [['customer_name', 'customer_site_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_transaction_header_id' => Yii::t('app', 'Ar Transaction Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'transaction_class' => Yii::t('app', 'Transaction Class'),
            'transaction_number' => Yii::t('app', 'Transaction Number'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'receipt_amount' => Yii::t('app', 'Receipt Amount'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'remaing_amount' => Yii::t('app', 'Remaing Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'document_date' => Yii::t('app', 'Document Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'customer_number' => Yii::t('app', 'Customer Number'),
            'customer_site_name' => Yii::t('app', 'Customer Site Name'),
            'customer_site_number' => Yii::t('app', 'Customer Site Number'),
            'so_number' => Yii::t('app', 'So Number'),
            'org' => Yii::t('app', 'Org'),
        ];
    }
}
