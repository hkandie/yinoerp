<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_employee_v}}".
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
 * @property string $employee_name
 * @property string $emp_email
 * @property string $gender
 * @property string $person_type
 * @property integer $org_id
 * @property integer $job_id
 * @property integer $position_id
 * @property integer $expense_ac_id
 * @property integer $supervisor_employee_id
 * @property string $currency_code
 * @property string $org
 */
class HrEmployeeV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_employee_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'hr_employee_id', 'status', 'org_id', 'job_id', 'position_id', 'expense_ac_id', 'supervisor_employee_id'], 'integer'],
            [['emp_start_date', 'emp_first_name', 'emp_last_name', 'emp_email', 'person_type'], 'required'],
            [['emp_start_date'], 'safe'],
            [['gender'], 'string'],
            [['username', 'citizen_number'], 'string', 'max' => 256],
            [['first_name', 'email', 'emp_email'], 'string', 'max' => 100],
            [['last_name'], 'string', 'max' => 60],
            [['identification_id', 'emp_first_name', 'emp_last_name', 'org'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 30],
            [['employee_name'], 'string', 'max' => 102],
            [['person_type'], 'string', 'max' => 25],
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
            'employee_name' => Yii::t('app', 'Employee Name'),
            'emp_email' => Yii::t('app', 'Emp Email'),
            'gender' => Yii::t('app', 'Gender'),
            'person_type' => Yii::t('app', 'Person Type'),
            'org_id' => Yii::t('app', 'Org ID'),
            'job_id' => Yii::t('app', 'Job ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'supervisor_employee_id' => Yii::t('app', 'Supervisor Employee ID'),
            'currency_code' => Yii::t('app', 'Currency Code'),
            'org' => Yii::t('app', 'Org'),
        ];
    }
}
