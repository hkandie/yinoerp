<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_bank_account_v}}".
 *
 * @property integer $mdm_bank_account_id
 * @property string $account_number
 * @property string $account_description
 * @property string $account_usage
 * @property string $account_type
 * @property string $bu_org_id
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $cash_ac_id
 * @property integer $cash_clearing_ac_id
 * @property integer $bank_charge_ac_id
 * @property integer $exchange_gl_ac_id
 * @property integer $netting_ac_cb
 * @property string $minimum_payment
 * @property string $maximum_payment
 * @property integer $contact_id
 * @property integer $ap_payment_method_id
 * @property integer $mdm_bank_header_id
 * @property string $country
 * @property string $bank_name
 * @property integer $bank_number
 * @property string $description
 * @property string $bank_name_short
 * @property string $bank_name_alt
 * @property string $tax_reg_no
 * @property string $tax_payer_id
 * @property string $branch_name
 * @property string $branch_country
 * @property integer $branch_number
 * @property integer $mdm_bank_site_id
 * @property string $branch_name_short
 * @property string $branch_name_alt
 * @property string $ifsc_code
 * @property string $swift_code
 * @property string $routing_number
 * @property string $iban_code
 * @property string $branch_tax_reg_no
 * @property string $branch_tax_payer_id
 * @property integer $site_address_id
 * @property string $supplier_name
 * @property string $supplier_site_name
 * @property string $customer_name
 * @property string $customer_number
 */
class MdmBankAccountV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_bank_account_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_bank_account_id', 'supplier_id', 'supplier_site_id', 'ar_customer_id', 'ar_customer_site_id', 'cash_ac_id', 'cash_clearing_ac_id', 'bank_charge_ac_id', 'exchange_gl_ac_id', 'netting_ac_cb', 'contact_id', 'ap_payment_method_id', 'mdm_bank_header_id', 'bank_number', 'branch_number', 'mdm_bank_site_id', 'site_address_id'], 'integer'],
            [['account_number', 'account_usage', 'account_type', 'cash_ac_id', 'country', 'bank_name', 'branch_name'], 'required'],
            [['minimum_payment', 'maximum_payment'], 'number'],
            [['account_number', 'account_usage', 'country', 'branch_country', 'customer_number'], 'string', 'max' => 25],
            [['account_description', 'bu_org_id', 'bank_name', 'description', 'bank_name_alt', 'branch_name', 'branch_name_alt'], 'string', 'max' => 256],
            [['account_type', 'bank_name_short', 'branch_name_short', 'ifsc_code', 'swift_code', 'routing_number', 'iban_code'], 'string', 'max' => 50],
            [['tax_reg_no', 'tax_payer_id', 'branch_tax_reg_no', 'branch_tax_payer_id'], 'string', 'max' => 40],
            [['supplier_name', 'supplier_site_name', 'customer_name'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_bank_account_id' => Yii::t('app', 'Mdm Bank Account ID'),
            'account_number' => Yii::t('app', 'Account Number'),
            'account_description' => Yii::t('app', 'Account Description'),
            'account_usage' => Yii::t('app', 'Account Usage'),
            'account_type' => Yii::t('app', 'Account Type'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'cash_ac_id' => Yii::t('app', 'Cash Ac ID'),
            'cash_clearing_ac_id' => Yii::t('app', 'Cash Clearing Ac ID'),
            'bank_charge_ac_id' => Yii::t('app', 'Bank Charge Ac ID'),
            'exchange_gl_ac_id' => Yii::t('app', 'Exchange Gl Ac ID'),
            'netting_ac_cb' => Yii::t('app', 'Netting Ac Cb'),
            'minimum_payment' => Yii::t('app', 'Minimum Payment'),
            'maximum_payment' => Yii::t('app', 'Maximum Payment'),
            'contact_id' => Yii::t('app', 'Contact ID'),
            'ap_payment_method_id' => Yii::t('app', 'Ap Payment Method ID'),
            'mdm_bank_header_id' => Yii::t('app', 'Mdm Bank Header ID'),
            'country' => Yii::t('app', 'Country'),
            'bank_name' => Yii::t('app', 'Bank Name'),
            'bank_number' => Yii::t('app', 'Bank Number'),
            'description' => Yii::t('app', 'Description'),
            'bank_name_short' => Yii::t('app', 'Bank Name Short'),
            'bank_name_alt' => Yii::t('app', 'Bank Name Alt'),
            'tax_reg_no' => Yii::t('app', 'Tax Reg No'),
            'tax_payer_id' => Yii::t('app', 'Tax Payer ID'),
            'branch_name' => Yii::t('app', 'Branch Name'),
            'branch_country' => Yii::t('app', 'Branch Country'),
            'branch_number' => Yii::t('app', 'Branch Number'),
            'mdm_bank_site_id' => Yii::t('app', 'Mdm Bank Site ID'),
            'branch_name_short' => Yii::t('app', 'Branch Name Short'),
            'branch_name_alt' => Yii::t('app', 'Branch Name Alt'),
            'ifsc_code' => Yii::t('app', 'Ifsc Code'),
            'swift_code' => Yii::t('app', 'Swift Code'),
            'routing_number' => Yii::t('app', 'Routing Number'),
            'iban_code' => Yii::t('app', 'Iban Code'),
            'branch_tax_reg_no' => Yii::t('app', 'Branch Tax Reg No'),
            'branch_tax_payer_id' => Yii::t('app', 'Branch Tax Payer ID'),
            'site_address_id' => Yii::t('app', 'Site Address ID'),
            'supplier_name' => Yii::t('app', 'Supplier Name'),
            'supplier_site_name' => Yii::t('app', 'Supplier Site Name'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'customer_number' => Yii::t('app', 'Customer Number'),
        ];
    }
}
