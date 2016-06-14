<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_all_lowesttask_v}}".
 *
 * @property string $org
 * @property string $project_number
 * @property string $description
 * @property string $task_number
 * @property string $task_name
 * @property string $task_description
 * @property string $project_status
 * @property string $approval_status
 * @property integer $prj_project_line_id
 * @property integer $prj_project_header_id
 * @property integer $task_level_weight
 * @property string $parent_prj_task_num
 * @property string $task_start_date
 * @property string $task_end_date
 * @property integer $task_manager_user_id
 * @property integer $org_id
 * @property string $service_type
 * @property string $work_type
 * @property integer $allow_charges_cb
 * @property integer $capitalizable_cb
 * @property integer $bu_org_id
 * @property integer $prj_project_type_id
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $pm_employee_id
 * @property integer $manager_user_id
 * @property string $start_date
 * @property string $completion_date
 * @property string $header_amount
 */
class PrjProjectAllLowesttaskV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_all_lowesttask_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org', 'task_number', 'task_name', 'prj_project_header_id', 'task_level_weight', 'bu_org_id', 'prj_project_type_id'], 'required'],
            [['prj_project_line_id', 'prj_project_header_id', 'task_level_weight', 'task_manager_user_id', 'org_id', 'allow_charges_cb', 'capitalizable_cb', 'bu_org_id', 'prj_project_type_id', 'ar_customer_id', 'ar_customer_site_id', 'pm_employee_id', 'manager_user_id'], 'integer'],
            [['task_start_date', 'task_end_date', 'start_date', 'completion_date'], 'safe'],
            [['header_amount'], 'number'],
            [['org', 'project_number', 'task_name'], 'string', 'max' => 50],
            [['description', 'task_description'], 'string', 'max' => 256],
            [['task_number', 'project_status', 'approval_status', 'parent_prj_task_num', 'service_type', 'work_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'org' => Yii::t('app', 'Org'),
            'project_number' => Yii::t('app', 'Project Number'),
            'description' => Yii::t('app', 'Description'),
            'task_number' => Yii::t('app', 'Task Number'),
            'task_name' => Yii::t('app', 'Task Name'),
            'task_description' => Yii::t('app', 'Task Description'),
            'project_status' => Yii::t('app', 'Project Status'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'task_level_weight' => Yii::t('app', 'Task Level Weight'),
            'parent_prj_task_num' => Yii::t('app', 'Parent Prj Task Num'),
            'task_start_date' => Yii::t('app', 'Task Start Date'),
            'task_end_date' => Yii::t('app', 'Task End Date'),
            'task_manager_user_id' => Yii::t('app', 'Task Manager User ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'service_type' => Yii::t('app', 'Service Type'),
            'work_type' => Yii::t('app', 'Work Type'),
            'allow_charges_cb' => Yii::t('app', 'Allow Charges Cb'),
            'capitalizable_cb' => Yii::t('app', 'Capitalizable Cb'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'prj_project_type_id' => Yii::t('app', 'Prj Project Type ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'pm_employee_id' => Yii::t('app', 'Pm Employee ID'),
            'manager_user_id' => Yii::t('app', 'Manager User ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'header_amount' => Yii::t('app', 'Header Amount'),
        ];
    }
}
