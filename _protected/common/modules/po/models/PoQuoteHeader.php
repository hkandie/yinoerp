<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_quote_header}}".
 *
 * @property integer $po_quote_header_id
 * @property integer $po_rfq_header_id
 * @property integer $quote_number
 * @property integer $supplier_site_id
 * @property integer $supplier_id
 * @property string $supplier_quote
 * @property string $quote_type
 * @property string $buyer
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $currency
 * @property integer $payment_term_id
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $valid_date
 * @property string $quote_status
 * @property integer $active_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoQuoteHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_quote_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_rfq_header_id', 'currency', 'payment_term_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_rfq_header_id', 'quote_number', 'supplier_site_id', 'supplier_id', 'ship_to_id', 'bill_to_id', 'payment_term_id', 'active_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['description'], 'string'],
            [['effective_start_date', 'effective_end_date', 'valid_date', 'creation_date', 'last_update_date'], 'safe'],
            [['supplier_quote', 'quote_type', 'quote_status'], 'string', 'max' => 25],
            [['buyer'], 'string', 'max' => 256],
            [['currency'], 'string', 'max' => 5],
            [['po_rfq_header_id', 'supplier_site_id', 'supplier_id', 'active_cb'], 'unique', 'targetAttribute' => ['po_rfq_header_id', 'supplier_site_id', 'supplier_id', 'active_cb'], 'message' => 'The combination of Po Rfq Header ID, Supplier Site ID, Supplier ID and Active Cb has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_quote_header_id' => Yii::t('app', 'Po Quote Header ID'),
            'po_rfq_header_id' => Yii::t('app', 'Po Rfq Header ID'),
            'quote_number' => Yii::t('app', 'Quote Number'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_quote' => Yii::t('app', 'Supplier Quote'),
            'quote_type' => Yii::t('app', 'Quote Type'),
            'buyer' => Yii::t('app', 'Buyer'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'currency' => Yii::t('app', 'Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'valid_date' => Yii::t('app', 'Valid Date'),
            'quote_status' => Yii::t('app', 'Quote Status'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
