<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_role}}".
 *
 * @property string $prj_role_id
 * @property string $role_name
 * @property string $description
 * @property string $user_role
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $labor_cost_cb
 * @property integer $contract_member_cb
 * @property integer $project_member_cb
 * @property integer $task_member_cb
 * @property integer $scheduling_cb
 * @property integer $min_job_level
 * @property integer $max_job_level
 * @property integer $hr_job_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjRole extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_role}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_name', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['labor_cost_cb', 'contract_member_cb', 'project_member_cb', 'task_member_cb', 'scheduling_cb', 'min_job_level', 'max_job_level', 'hr_job_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['role_name', 'user_role'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['role_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_role_id' => Yii::t('app', 'Prj Role ID'),
            'role_name' => Yii::t('app', 'Role Name'),
            'description' => Yii::t('app', 'Description'),
            'user_role' => Yii::t('app', 'User Role'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'labor_cost_cb' => Yii::t('app', 'Labor Cost Cb'),
            'contract_member_cb' => Yii::t('app', 'Contract Member Cb'),
            'project_member_cb' => Yii::t('app', 'Project Member Cb'),
            'task_member_cb' => Yii::t('app', 'Task Member Cb'),
            'scheduling_cb' => Yii::t('app', 'Scheduling Cb'),
            'min_job_level' => Yii::t('app', 'Min Job Level'),
            'max_job_level' => Yii::t('app', 'Max Job Level'),
            'hr_job_id' => Yii::t('app', 'Hr Job ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
