<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_contact}}".
 *
 * @property string $extn_contact_id
 * @property string $contact_name
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $mobile_number
 * @property string $office_number
 * @property string $contact_number2
 * @property string $email_id
 * @property string $website
 * @property string $email_id2
 * @property string $fax_no
 * @property string $timezone
 * @property string $time_to_contact
 * @property string $type
 * @property string $status
 * @property string $job_titile
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnContact extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_contact}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_name', 'last_name', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['contact_name', 'last_name', 'type', 'status'], 'string', 'max' => 25],
            [['first_name'], 'string', 'max' => 100],
            [['middle_name', 'website'], 'string', 'max' => 50],
            [['mobile_number', 'office_number', 'contact_number2'], 'string', 'max' => 20],
            [['email_id', 'email_id2', 'time_to_contact'], 'string', 'max' => 40],
            [['fax_no', 'timezone', 'job_titile'], 'string', 'max' => 30],
            [['contact_name'], 'unique'],
            [['contact_name'], 'unique'],
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
            'extn_contact_id' => Yii::t('app', 'Extn Contact ID'),
            'contact_name' => Yii::t('app', 'Contact Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'first_name' => Yii::t('app', 'First Name'),
            'middle_name' => Yii::t('app', 'Middle Name'),
            'mobile_number' => Yii::t('app', 'Mobile Number'),
            'office_number' => Yii::t('app', 'Office Number'),
            'contact_number2' => Yii::t('app', 'Contact Number2'),
            'email_id' => Yii::t('app', 'Email ID'),
            'website' => Yii::t('app', 'Website'),
            'email_id2' => Yii::t('app', 'Email Id2'),
            'fax_no' => Yii::t('app', 'Fax No'),
            'timezone' => Yii::t('app', 'Timezone'),
            'time_to_contact' => Yii::t('app', 'Time To Contact'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'job_titile' => Yii::t('app', 'Job Titile'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
