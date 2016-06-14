<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_lead}}".
 *
 * @property string $sd_lead_id
 * @property string $lead_number
 * @property integer $primary_contact_id
 * @property string $subject
 * @property string $lead_type
 * @property string $description
 * @property string $details
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
 * @property string $sales_team
 * @property integer $priority
 * @property integer $campaign_id
 * @property string $campaign_os
 * @property string $referral_source
 * @property string $sales_channel
 * @property string $close_reason
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdLead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_lead}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lead_number', 'subject', 'created_by', 'last_update_by'], 'required'],
            [['primary_contact_id', 'address_id', 'ar_customer_id', 'ar_customer_site_id', 'hr_employee_id', 'priority', 'campaign_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['details'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['lead_number', 'lead_type', 'last_name', 'first_name', 'sales_team', 'referral_source', 'sales_channel', 'close_reason', 'status'], 'string', 'max' => 25],
            [['subject', 'description', 'contact_address', 'campaign_os'], 'string', 'max' => 256],
            [['mobile_number', 'office_number'], 'string', 'max' => 20],
            [['email_id', 'time_to_contact'], 'string', 'max' => 40],
            [['contact_website'], 'string', 'max' => 50],
            [['fax_no', 'timezone'], 'string', 'max' => 30],
            [['lead_number'], 'unique'],
            [['lead_number'], 'unique'],
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
            'sd_lead_id' => Yii::t('app', 'Sd Lead ID'),
            'lead_number' => Yii::t('app', 'Lead Number'),
            'primary_contact_id' => Yii::t('app', 'Primary Contact ID'),
            'subject' => Yii::t('app', 'Subject'),
            'lead_type' => Yii::t('app', 'Lead Type'),
            'description' => Yii::t('app', 'Description'),
            'details' => Yii::t('app', 'Details'),
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
            'sales_team' => Yii::t('app', 'Sales Team'),
            'priority' => Yii::t('app', 'Priority'),
            'campaign_id' => Yii::t('app', 'Campaign ID'),
            'campaign_os' => Yii::t('app', 'Campaign Os'),
            'referral_source' => Yii::t('app', 'Referral Source'),
            'sales_channel' => Yii::t('app', 'Sales Channel'),
            'close_reason' => Yii::t('app', 'Close Reason'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
