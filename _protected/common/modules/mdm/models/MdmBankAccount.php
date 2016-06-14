<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_bank_account}}".
 *
 * @property integer $mdm_bank_account_id
 * @property integer $mdm_bank_header_id
 * @property integer $mdm_bank_site_id
 * @property string $account_number
 * @property string $description
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
 * @property integer $hr_cash_ac_id
 * @property integer $hr_cash_clearing_ac_id
 * @property integer $hr_bank_charge_ac_id
 * @property integer $hr_exchange_gl_ac_id
 * @property integer $netting_ac_cb
 * @property string $minimum_payment
 * @property string $maximum_payment
 * @property integer $contact_id
 * @property integer $ap_payment_method_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmBankAccount extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_bank_account}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_bank_header_id', 'mdm_bank_site_id', 'account_number', 'account_usage', 'account_type', 'cash_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['mdm_bank_header_id', 'mdm_bank_site_id', 'supplier_id', 'supplier_site_id', 'ar_customer_id', 'ar_customer_site_id', 'cash_ac_id', 'cash_clearing_ac_id', 'bank_charge_ac_id', 'exchange_gl_ac_id', 'hr_cash_ac_id', 'hr_cash_clearing_ac_id', 'hr_bank_charge_ac_id', 'hr_exchange_gl_ac_id', 'netting_ac_cb', 'contact_id', 'ap_payment_method_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['minimum_payment', 'maximum_payment'], 'number'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['account_number', 'account_usage'], 'string', 'max' => 25],
            [['description', 'bu_org_id'], 'string', 'max' => 256],
            [['account_type'], 'string', 'max' => 50],
            [['mdm_bank_site_id'], 'unique'],
            [['mdm_bank_site_id', 'account_number'], 'unique', 'targetAttribute' => ['mdm_bank_site_id', 'account_number'], 'message' => 'The combination of Mdm Bank Site ID and Account Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_bank_account_id' => Yii::t('app', 'Mdm Bank Account ID'),
            'mdm_bank_header_id' => Yii::t('app', 'Mdm Bank Header ID'),
            'mdm_bank_site_id' => Yii::t('app', 'Mdm Bank Site ID'),
            'account_number' => Yii::t('app', 'Account Number'),
            'description' => Yii::t('app', 'Description'),
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
            'hr_cash_ac_id' => Yii::t('app', 'Hr Cash Ac ID'),
            'hr_cash_clearing_ac_id' => Yii::t('app', 'Hr Cash Clearing Ac ID'),
            'hr_bank_charge_ac_id' => Yii::t('app', 'Hr Bank Charge Ac ID'),
            'hr_exchange_gl_ac_id' => Yii::t('app', 'Hr Exchange Gl Ac ID'),
            'netting_ac_cb' => Yii::t('app', 'Netting Ac Cb'),
            'minimum_payment' => Yii::t('app', 'Minimum Payment'),
            'maximum_payment' => Yii::t('app', 'Maximum Payment'),
            'contact_id' => Yii::t('app', 'Contact ID'),
            'ap_payment_method_id' => Yii::t('app', 'Ap Payment Method ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
