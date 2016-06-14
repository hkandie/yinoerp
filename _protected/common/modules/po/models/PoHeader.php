<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_header}}".
 *
 * @property integer $po_header_id
 * @property integer $bu_org_id
 * @property integer $ref_po_header_id
 * @property integer $release_number
 * @property string $po_type
 * @property string $po_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $buyer
 * @property integer $hr_employee_id
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $header_amount
 * @property string $tax_amount
 * @property integer $price_list_header_id
 * @property string $currency
 * @property string $doc_currency
 * @property integer $payment_term_id
 * @property string $agreement_start_date
 * @property string $agreement_end_date
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property integer $ef_id
 * @property string $po_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $multi_bu_cb
 * @property integer $rev_number
 * @property integer $company_id
 */
class PoHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'po_type', 'supplier_id', 'supplier_site_id', 'currency', 'doc_currency', 'payment_term_id', 'po_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'ref_po_header_id', 'release_number', 'supplier_id', 'supplier_site_id', 'hr_employee_id', 'ship_to_id', 'bill_to_id', 'price_list_header_id', 'payment_term_id', 'ef_id', 'created_by', 'last_update_by', 'multi_bu_cb', 'rev_number', 'company_id'], 'integer'],
            [['header_amount', 'tax_amount', 'exchange_rate'], 'number'],
            [['agreement_start_date', 'agreement_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['po_type', 'po_number', 'exchange_rate_type', 'po_status'], 'string', 'max' => 20],
            [['buyer'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['currency', 'doc_currency'], 'string', 'max' => 5],
            [['release_number', 'po_number'], 'unique', 'targetAttribute' => ['release_number', 'po_number'], 'message' => 'The combination of Release Number and Po Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'ref_po_header_id' => Yii::t('app', 'Ref Po Header ID'),
            'release_number' => Yii::t('app', 'Release Number'),
            'po_type' => Yii::t('app', 'Po Type'),
            'po_number' => Yii::t('app', 'Po Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'buyer' => Yii::t('app', 'Buyer'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'agreement_start_date' => Yii::t('app', 'Agreement Start Date'),
            'agreement_end_date' => Yii::t('app', 'Agreement End Date'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'po_status' => Yii::t('app', 'Po Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'multi_bu_cb' => Yii::t('app', 'Multi Bu Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
