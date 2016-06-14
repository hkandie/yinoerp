<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_employee_experience}}".
 *
 * @property string $hr_employee_experience_id
 * @property integer $employee_id
 * @property string $organization_name
 * @property string $designation
 * @property string $employee_number
 * @property string $department
 * @property string $work_start_date
 * @property string $work_end_date
 * @property string $last_manager
 * @property string $last_drawn_salary
 * @property string $communication_details
 * @property string $project_details
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrEmployeeExperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_employee_experience}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'organization_name', 'designation', 'work_start_date', 'created_by', 'last_update_by'], 'required'],
            [['employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['work_start_date', 'work_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['last_drawn_salary'], 'number'],
            [['communication_details', 'project_details'], 'string'],
            [['organization_name', 'department'], 'string', 'max' => 256],
            [['designation', 'employee_number'], 'string', 'max' => 100],
            [['last_manager'], 'string', 'max' => 50],
            [['employee_id', 'organization_name', 'designation', 'employee_number'], 'unique', 'targetAttribute' => ['employee_id', 'organization_name', 'designation', 'employee_number'], 'message' => 'The combination of Employee ID, Organization Name, Designation and Employee Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_employee_experience_id' => Yii::t('app', 'Hr Employee Experience ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'organization_name' => Yii::t('app', 'Organization Name'),
            'designation' => Yii::t('app', 'Designation'),
            'employee_number' => Yii::t('app', 'Employee Number'),
            'department' => Yii::t('app', 'Department'),
            'work_start_date' => Yii::t('app', 'Work Start Date'),
            'work_end_date' => Yii::t('app', 'Work End Date'),
            'last_manager' => Yii::t('app', 'Last Manager'),
            'last_drawn_salary' => Yii::t('app', 'Last Drawn Salary'),
            'communication_details' => Yii::t('app', 'Communication Details'),
            'project_details' => Yii::t('app', 'Project Details'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
