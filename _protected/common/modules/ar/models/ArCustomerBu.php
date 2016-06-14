<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_customer_bu}}".
 *
 * @property integer $ar_customer_bu_id
 * @property integer $ar_customer_id
 * @property integer $org_id
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
 * @property integer $site_address_id
 * @property integer $site_contact_id
 * @property integer $customer_site_attachement_id
 * @property integer $ef_id
 * @property integer $bank_id
 * @property integer $bank_account_id
 * @property integer $receivable_ac_id
 * @property integer $revenue_ac_id
 * @property integer $tax_ac_id
 * @property integer $freight_ac_id
 * @property integer $clearing_ac_id
 * @property integer $unbilled_receivable_ac_id
 * @property integer $unearned_revenue_ac_id
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArCustomerBu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_customer_bu}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_customer_id', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['ar_customer_id', 'org_id', 'profile_id', 'payment_term_id', 'finance_profile_id', 'payment_method_id', 'order_type_id', 'price_list_id', 'internal_org_id', 'freight_terms', 'site_address_id', 'site_contact_id', 'customer_site_attachement_id', 'ef_id', 'bank_id', 'bank_account_id', 'receivable_ac_id', 'revenue_ac_id', 'tax_ac_id', 'freight_ac_id', 'clearing_ac_id', 'unbilled_receivable_ac_id', 'unearned_revenue_ac_id', 'rev_enabled_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status', 'currency'], 'string', 'max' => 12],
            [['fob', 'transportation', 'country_of_origin'], 'string', 'max' => 50],
            [['ar_customer_id', 'org_id'], 'unique', 'targetAttribute' => ['ar_customer_id', 'org_id'], 'message' => 'The combination of Ar Customer ID and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_customer_bu_id' => Yii::t('app', 'Ar Customer Bu ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'org_id' => Yii::t('app', 'Org ID'),
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
            'site_address_id' => Yii::t('app', 'Site Address ID'),
            'site_contact_id' => Yii::t('app', 'Site Contact ID'),
            'customer_site_attachement_id' => Yii::t('app', 'Customer Site Attachement ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'bank_id' => Yii::t('app', 'Bank ID'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'receivable_ac_id' => Yii::t('app', 'Receivable Ac ID'),
            'revenue_ac_id' => Yii::t('app', 'Revenue Ac ID'),
            'tax_ac_id' => Yii::t('app', 'Tax Ac ID'),
            'freight_ac_id' => Yii::t('app', 'Freight Ac ID'),
            'clearing_ac_id' => Yii::t('app', 'Clearing Ac ID'),
            'unbilled_receivable_ac_id' => Yii::t('app', 'Unbilled Receivable Ac ID'),
            'unearned_revenue_ac_id' => Yii::t('app', 'Unearned Revenue Ac ID'),
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
