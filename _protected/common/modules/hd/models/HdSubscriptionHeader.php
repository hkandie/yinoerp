<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_subscription_header}}".
 *
 * @property integer $hd_subscription_header_id
 * @property integer $org_id
 * @property integer $document_type
 * @property string $subscription_type
 * @property string $number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $hr_employee_id
 * @property string $description
 * @property integer $ship_to_address_id
 * @property integer $bill_to_address_id
 * @property string $first_name
 * @property string $last_name
 * @property string $full_name
 * @property string $passport_number
 * @property string $dob
 * @property string $gender
 * @property string $marital_status
 * @property string $occupation
 * @property string $nationality
 * @property string $address_line1
 * @property string $address_line2
 * @property string $postal_code
 * @property string $state
 * @property string $house_phone
 * @property string $office_phone
 * @property string $mobile_phone1
 * @property string $mobile_phone2
 * @property string $fax_no
 * @property string $email
 * @property string $reference_type
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $header_amount
 * @property string $tax_amount
 * @property integer $company_id
 */
class HdSubscriptionHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_subscription_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'document_type', 'ar_customer_id', 'ar_customer_site_id', 'hr_employee_id', 'ship_to_address_id', 'bill_to_address_id', 'reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['document_type', 'subscription_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['dob', 'creation_date', 'last_update_date'], 'safe'],
            [['header_amount', 'tax_amount'], 'number'],
            [['subscription_type', 'first_name', 'last_name', 'full_name', 'gender', 'marital_status', 'fax_no', 'reference_type', 'reference_key_name', 'status'], 'string', 'max' => 25],
            [['number', 'passport_number', 'nationality', 'state', 'email'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['occupation', 'address_line1', 'address_line2'], 'string', 'max' => 255],
            [['postal_code', 'house_phone', 'office_phone', 'mobile_phone1', 'mobile_phone2'], 'string', 'max' => 20],
            [['mobile_phone2', 'fax_no'], 'unique', 'targetAttribute' => ['mobile_phone2', 'fax_no'], 'message' => 'The combination of Mobile Phone2 and Fax No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_subscription_header_id' => Yii::t('app', 'Hd Subscription Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'subscription_type' => Yii::t('app', 'Subscription Type'),
            'number' => Yii::t('app', 'Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_address_id' => Yii::t('app', 'Ship To Address ID'),
            'bill_to_address_id' => Yii::t('app', 'Bill To Address ID'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'full_name' => Yii::t('app', 'Full Name'),
            'passport_number' => Yii::t('app', 'Passport Number'),
            'dob' => Yii::t('app', 'Dob'),
            'gender' => Yii::t('app', 'Gender'),
            'marital_status' => Yii::t('app', 'Marital Status'),
            'occupation' => Yii::t('app', 'Occupation'),
            'nationality' => Yii::t('app', 'Nationality'),
            'address_line1' => Yii::t('app', 'Address Line1'),
            'address_line2' => Yii::t('app', 'Address Line2'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'state' => Yii::t('app', 'State'),
            'house_phone' => Yii::t('app', 'House Phone'),
            'office_phone' => Yii::t('app', 'Office Phone'),
            'mobile_phone1' => Yii::t('app', 'Mobile Phone1'),
            'mobile_phone2' => Yii::t('app', 'Mobile Phone2'),
            'fax_no' => Yii::t('app', 'Fax No'),
            'email' => Yii::t('app', 'Email'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
