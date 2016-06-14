<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_employee}}".
 *
 * @property string $hr_employee_id
 * @property string $identification_id
 * @property string $start_date
 * @property string $identification_type
 * @property string $citizen_number
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $language
 * @property string $title
 * @property string $gender
 * @property string $person_type
 * @property string $date_of_birth
 * @property string $city_of_birth
 * @property string $country_of_birth
 * @property string $nationality
 * @property string $disability_code
 * @property string $marital_status
 * @property string $degree
 * @property string $highest_education
 * @property string $education_details
 * @property integer $no_of_children
 * @property integer $home_address_id
 * @property string $home_address
 * @property string $permanent_address
 * @property integer $permanent_address_id
 * @property string $mobile_number
 * @property string $home_phone_number
 * @property string $other_email
 * @property string $date_first_hired
 * @property integer $org_id
 * @property integer $job_id
 * @property integer $position_id
 * @property integer $payroll_id
 * @property integer $grade_id
 * @property integer $location_id
 * @property string $job_type
 * @property integer $supervisor_employee_id
 * @property string $probation_period_uom
 * @property integer $probation_period
 * @property string $notice_period_uom
 * @property integer $notice_period
 * @property string $revision_enabled
 * @property string $status
 * @property integer $revision_number
 * @property integer $work_policy_id
 * @property integer $expense_ac_id
 * @property integer $salary_ac_id
 * @property integer $performance_id
 * @property string $vehicle_number
 * @property string $asset_numbers
 * @property integer $contract_id
 * @property integer $bank_account_id
 * @property string $tax_reg_number
 * @property string $social_ac_no
 * @property string $social_ac_no2
 * @property string $passport_number
 * @property integer $ledger_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrEmployee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_employee}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'identification_type', 'first_name', 'last_name', 'email', 'person_type', 'salary_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['start_date', 'date_of_birth', 'date_first_hired', 'creation_date', 'last_update_date'], 'safe'],
            [['gender', 'education_details'], 'string'],
            [['no_of_children', 'home_address_id', 'permanent_address_id', 'org_id', 'job_id', 'position_id', 'payroll_id', 'grade_id', 'location_id', 'supervisor_employee_id', 'probation_period', 'notice_period', 'revision_number', 'work_policy_id', 'expense_ac_id', 'salary_ac_id', 'performance_id', 'contract_id', 'bank_account_id', 'ledger_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['identification_id', 'identification_type', 'first_name', 'last_name', 'city_of_birth', 'nationality', 'other_email', 'social_ac_no', 'social_ac_no2'], 'string', 'max' => 50],
            [['citizen_number', 'home_address', 'permanent_address', 'vehicle_number', 'asset_numbers', 'passport_number'], 'string', 'max' => 256],
            [['phone'], 'string', 'max' => 30],
            [['email', 'highest_education'], 'string', 'max' => 100],
            [['language'], 'string', 'max' => 20],
            [['title', 'person_type', 'disability_code', 'marital_status', 'degree', 'mobile_number', 'home_phone_number', 'job_type', 'probation_period_uom', 'notice_period_uom', 'status', 'tax_reg_number'], 'string', 'max' => 25],
            [['country_of_birth'], 'string', 'max' => 10],
            [['revision_enabled'], 'string', 'max' => 1],
            [['email'], 'unique'],
            [['identification_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'identification_id' => Yii::t('app', 'Identification ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'identification_type' => Yii::t('app', 'Identification Type'),
            'citizen_number' => Yii::t('app', 'Citizen Number'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'language' => Yii::t('app', 'Language'),
            'title' => Yii::t('app', 'Title'),
            'gender' => Yii::t('app', 'Gender'),
            'person_type' => Yii::t('app', 'Person Type'),
            'date_of_birth' => Yii::t('app', 'Date Of Birth'),
            'city_of_birth' => Yii::t('app', 'City Of Birth'),
            'country_of_birth' => Yii::t('app', 'Country Of Birth'),
            'nationality' => Yii::t('app', 'Nationality'),
            'disability_code' => Yii::t('app', 'Disability Code'),
            'marital_status' => Yii::t('app', 'Marital Status'),
            'degree' => Yii::t('app', 'Degree'),
            'highest_education' => Yii::t('app', 'Highest Education'),
            'education_details' => Yii::t('app', 'Education Details'),
            'no_of_children' => Yii::t('app', 'No Of Children'),
            'home_address_id' => Yii::t('app', 'Home Address ID'),
            'home_address' => Yii::t('app', 'Home Address'),
            'permanent_address' => Yii::t('app', 'Permanent Address'),
            'permanent_address_id' => Yii::t('app', 'Permanent Address ID'),
            'mobile_number' => Yii::t('app', 'Mobile Number'),
            'home_phone_number' => Yii::t('app', 'Home Phone Number'),
            'other_email' => Yii::t('app', 'Other Email'),
            'date_first_hired' => Yii::t('app', 'Date First Hired'),
            'org_id' => Yii::t('app', 'Org ID'),
            'job_id' => Yii::t('app', 'Job ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'payroll_id' => Yii::t('app', 'Payroll ID'),
            'grade_id' => Yii::t('app', 'Grade ID'),
            'location_id' => Yii::t('app', 'Location ID'),
            'job_type' => Yii::t('app', 'Job Type'),
            'supervisor_employee_id' => Yii::t('app', 'Supervisor Employee ID'),
            'probation_period_uom' => Yii::t('app', 'Probation Period Uom'),
            'probation_period' => Yii::t('app', 'Probation Period'),
            'notice_period_uom' => Yii::t('app', 'Notice Period Uom'),
            'notice_period' => Yii::t('app', 'Notice Period'),
            'revision_enabled' => Yii::t('app', 'Revision Enabled'),
            'status' => Yii::t('app', 'Status'),
            'revision_number' => Yii::t('app', 'Revision Number'),
            'work_policy_id' => Yii::t('app', 'Work Policy ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'salary_ac_id' => Yii::t('app', 'Salary Ac ID'),
            'performance_id' => Yii::t('app', 'Performance ID'),
            'vehicle_number' => Yii::t('app', 'Vehicle Number'),
            'asset_numbers' => Yii::t('app', 'Asset Numbers'),
            'contract_id' => Yii::t('app', 'Contract ID'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'tax_reg_number' => Yii::t('app', 'Tax Reg Number'),
            'social_ac_no' => Yii::t('app', 'Social Ac No'),
            'social_ac_no2' => Yii::t('app', 'Social Ac No2'),
            'passport_number' => Yii::t('app', 'Passport Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
