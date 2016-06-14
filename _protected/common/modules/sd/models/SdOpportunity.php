<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_opportunity}}".
 *
 * @property string $sd_opportunity_id
 * @property integer $sd_lead_id
 * @property integer $bu_org_id
 * @property string $opportunity_number
 * @property integer $primary_contact_id
 * @property string $opportunity_subject
 * @property string $type
 * @property string $description
 * @property string $status
 * @property integer $win_probability
 * @property string $currency
 * @property string $forecast_amount
 * @property string $expected_close_date
 * @property string $last_name
 * @property string $first_name
 * @property string $mobile_number
 * @property string $office_number
 * @property string $email_id
 * @property string $contact_website
 * @property integer $address_id
 * @property string $contact_address
 * @property string $fax_no
 * @property string $timezone
 * @property string $time_to_contact
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $hr_employee_id
 * @property integer $campaign_id
 * @property string $campaign_os
 * @property string $sales_team
 * @property string $referral_source
 * @property string $sales_channel
 * @property string $reference_type
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $close_reason
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdOpportunity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_opportunity}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_lead_id', 'bu_org_id', 'primary_contact_id', 'win_probability', 'address_id', 'ar_customer_id', 'ar_customer_site_id', 'hr_employee_id', 'campaign_id', 'reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['opportunity_subject', 'created_by', 'last_update_by'], 'required'],
            [['forecast_amount'], 'number'],
            [['expected_close_date', 'creation_date', 'last_update_date'], 'safe'],
            [['opportunity_number', 'type', 'status', 'currency', 'last_name', 'first_name', 'sales_team', 'referral_source', 'sales_channel', 'reference_type', 'reference_key_name', 'close_reason'], 'string', 'max' => 25],
            [['opportunity_subject', 'description', 'contact_address', 'campaign_os'], 'string', 'max' => 256],
            [['mobile_number', 'office_number'], 'string', 'max' => 20],
            [['email_id', 'time_to_contact'], 'string', 'max' => 40],
            [['contact_website'], 'string', 'max' => 50],
            [['fax_no', 'timezone'], 'string', 'max' => 30],
            [['opportunity_number'], 'unique'],
            [['opportunity_number'], 'unique'],
            [['last_name'], 'unique'],
            [['last_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_opportunity_id' => Yii::t('app', 'Sd Opportunity ID'),
            'sd_lead_id' => Yii::t('app', 'Sd Lead ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'opportunity_number' => Yii::t('app', 'Opportunity Number'),
            'primary_contact_id' => Yii::t('app', 'Primary Contact ID'),
            'opportunity_subject' => Yii::t('app', 'Opportunity Subject'),
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'win_probability' => Yii::t('app', 'Win Probability'),
            'currency' => Yii::t('app', 'Currency'),
            'forecast_amount' => Yii::t('app', 'Forecast Amount'),
            'expected_close_date' => Yii::t('app', 'Expected Close Date'),
            'last_name' => Yii::t('app', 'Last Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'mobile_number' => Yii::t('app', 'Mobile Number'),
            'office_number' => Yii::t('app', 'Office Number'),
            'email_id' => Yii::t('app', 'Email ID'),
            'contact_website' => Yii::t('app', 'Contact Website'),
            'address_id' => Yii::t('app', 'Address ID'),
            'contact_address' => Yii::t('app', 'Contact Address'),
            'fax_no' => Yii::t('app', 'Fax No'),
            'timezone' => Yii::t('app', 'Timezone'),
            'time_to_contact' => Yii::t('app', 'Time To Contact'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'campaign_id' => Yii::t('app', 'Campaign ID'),
            'campaign_os' => Yii::t('app', 'Campaign Os'),
            'sales_team' => Yii::t('app', 'Sales Team'),
            'referral_source' => Yii::t('app', 'Referral Source'),
            'sales_channel' => Yii::t('app', 'Sales Channel'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'close_reason' => Yii::t('app', 'Close Reason'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
