<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_customer_site}}".
 *
 * @property integer $ar_customer_site_id
 * @property integer $ar_customer_id
 * @property integer $customer_site_number
 * @property string $customer_site_name
 * @property string $site_tax_country
 * @property string $site_tax_reg_no
 * @property string $site_tax_payer_id
 * @property integer $primary_cb
 * @property string $customer_site_ref
 * @property string $customer_site_type
 * @property string $status
 * @property integer $profile_id
 * @property string $currency
 * @property integer $payment_term_id
 * @property string $finance_profile_id
 * @property integer $payment_method_id
 * @property integer $order_type_id
 * @property integer $price_list_id
 * @property integer $internal_org_id
 * @property string $fob
 * @property integer $freight_terms
 * @property string $transportation
 * @property string $country_of_origin
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property integer $site_contact_id
 * @property integer $customer_site_attachement_id
 * @property integer $ar_sales_region_id
 * @property integer $bank_id
 * @property integer $bank_account_id
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArCustomerSite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_customer_site}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_customer_id', 'customer_site_number', 'customer_site_name', 'created_by', 'last_update_by'], 'required'],
            [['ar_customer_id', 'customer_site_number', 'primary_cb', 'profile_id', 'payment_term_id', 'finance_profile_id', 'payment_method_id', 'order_type_id', 'price_list_id', 'internal_org_id', 'freight_terms', 'ship_to_id', 'bill_to_id', 'site_contact_id', 'customer_site_attachement_id', 'ar_sales_region_id', 'bank_id', 'bank_account_id', 'rev_enabled_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['customer_site_name'], 'string', 'max' => 60],
            [['site_tax_country'], 'string', 'max' => 256],
            [['site_tax_reg_no', 'site_tax_payer_id'], 'string', 'max' => 100],
            [['customer_site_ref'], 'string', 'max' => 30],
            [['customer_site_type', 'status', 'currency'], 'string', 'max' => 12],
            [['fob', 'transportation', 'country_of_origin'], 'string', 'max' => 50],
            [['customer_site_number'], 'unique'],
            [['ar_customer_id', 'customer_site_name'], 'unique', 'targetAttribute' => ['ar_customer_id', 'customer_site_name'], 'message' => 'The combination of Ar Customer ID and Customer Site Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'customer_site_number' => Yii::t('app', 'Customer Site Number'),
            'customer_site_name' => Yii::t('app', 'Customer Site Name'),
            'site_tax_country' => Yii::t('app', 'Site Tax Country'),
            'site_tax_reg_no' => Yii::t('app', 'Site Tax Reg No'),
            'site_tax_payer_id' => Yii::t('app', 'Site Tax Payer ID'),
            'primary_cb' => Yii::t('app', 'Primary Cb'),
            'customer_site_ref' => Yii::t('app', 'Customer Site Ref'),
            'customer_site_type' => Yii::t('app', 'Customer Site Type'),
            'status' => Yii::t('app', 'Status'),
            'profile_id' => Yii::t('app', 'Profile ID'),
            'currency' => Yii::t('app', 'Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'finance_profile_id' => Yii::t('app', 'Finance Profile ID'),
            'payment_method_id' => Yii::t('app', 'Payment Method ID'),
            'order_type_id' => Yii::t('app', 'Order Type ID'),
            'price_list_id' => Yii::t('app', 'Price List ID'),
            'internal_org_id' => Yii::t('app', 'Internal Org ID'),
            'fob' => Yii::t('app', 'Fob'),
            'freight_terms' => Yii::t('app', 'Freight Terms'),
            'transportation' => Yii::t('app', 'Transportation'),
            'country_of_origin' => Yii::t('app', 'Country Of Origin'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'site_contact_id' => Yii::t('app', 'Site Contact ID'),
            'customer_site_attachement_id' => Yii::t('app', 'Customer Site Attachement ID'),
            'ar_sales_region_id' => Yii::t('app', 'Ar Sales Region ID'),
            'bank_id' => Yii::t('app', 'Bank ID'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
