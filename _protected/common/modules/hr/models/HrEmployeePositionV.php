<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_employee_position_v}}".
 *
 * @property string $user_id
 * @property string $username
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $hr_employee_id
 * @property integer $status
 * @property string $identification_id
 * @property string $emp_start_date
 * @property string $citizen_number
 * @property string $emp_first_name
 * @property string $emp_last_name
 * @property string $phone
 * @property string $emp_email
 * @property string $gender
 * @property string $person_type
 * @property integer $org_id
 * @property integer $job_id
 * @property integer $position_id
 * @property integer $expense_ac_id
 * @property integer $supervisor_employee_id
 * @property string $position_name
 * @property integer $emp_org_id
 * @property integer $hr_approval_limit_header_id
 * @property string $document_type
 * @property string $limit_start_date
 * @property string $limit_type
 * @property string $limit_range_low
 * @property string $limit_range_high
 * @property string $amount_limit
 * @property string $limit_object
 * @property integer $bu_org_id
 * @property string $currency_code
 */
class HrEmployeePositionV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_employee_position_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'hr_employee_id', 'status', 'org_id', 'job_id', 'position_id', 'expense_ac_id', 'supervisor_employee_id', 'emp_org_id', 'hr_approval_limit_header_id', 'bu_org_id'], 'integer'],
            [['email'], 'required'],
            [['emp_start_date', 'limit_start_date'], 'safe'],
            [['gender'], 'string'],
            [['amount_limit'], 'number'],
            [['username', 'citizen_number', 'limit_range_low', 'limit_range_high'], 'string', 'max' => 256],
            [['first_name', 'email', 'emp_email', 'position_name'], 'string', 'max' => 100],
            [['last_name'], 'string', 'max' => 60],
            [['identification_id', 'emp_first_name', 'emp_last_name', 'document_type'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
            [['person_type', 'limit_type', 'limit_object'], 'string', 'max' => 25],
            [['currency_code'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => Yii::t('app', 'User ID'),
            'username' => Yii::t('app', 'Username'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'email' => Yii::t('app', 'Email'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'status' => Yii::t('app', 'Status'),
            'identification_id' => Yii::t('app', 'Identification ID'),
            'emp_start_date' => Yii::t('app', 'Emp Start Date'),
            'citizen_number' => Yii::t('app', 'Citizen Number'),
            'emp_first_name' => Yii::t('app', 'Emp First Name'),
            'emp_last_name' => Yii::t('app', 'Emp Last Name'),
            'phone' => Yii::t('app', 'Phone'),
            'emp_email' => Yii::t('app', 'Emp Email'),
            'gender' => Yii::t('app', 'Gender'),
            'person_type' => Yii::t('app', 'Person Type'),
            'org_id' => Yii::t('app', 'Org ID'),
            'job_id' => Yii::t('app', 'Job ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'supervisor_employee_id' => Yii::t('app', 'Supervisor Employee ID'),
            'position_name' => Yii::t('app', 'Position Name'),
            'emp_org_id' => Yii::t('app', 'Emp Org ID'),
            'hr_approval_limit_header_id' => Yii::t('app', 'Hr Approval Limit Header ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'limit_start_date' => Yii::t('app', 'Limit Start Date'),
            'limit_type' => Yii::t('app', 'Limit Type'),
            'limit_range_low' => Yii::t('app', 'Limit Range Low'),
            'limit_range_high' => Yii::t('app', 'Limit Range High'),
            'amount_limit' => Yii::t('app', 'Amount Limit'),
            'limit_object' => Yii::t('app', 'Limit Object'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'currency_code' => Yii::t('app', 'Currency Code'),
        ];
    }
}
