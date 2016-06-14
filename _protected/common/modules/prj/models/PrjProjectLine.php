<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_line}}".
 *
 * @property integer $prj_project_line_id
 * @property integer $prj_project_header_id
 * @property string $task_number
 * @property integer $task_level_weight
 * @property string $task_name
 * @property string $parent_prj_task_num
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property integer $manager_user_id
 * @property integer $org_id
 * @property string $service_type
 * @property string $work_type
 * @property integer $allow_charges_cb
 * @property integer $capitalizable_cb
 * @property integer $milestone_cb
 * @property string $currency
 * @property string $rate_type
 * @property integer $cip_asset_id
 * @property string $line_description
 * @property string $task_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_header_id', 'task_number', 'task_level_weight', 'task_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['prj_project_header_id', 'task_level_weight', 'manager_user_id', 'org_id', 'allow_charges_cb', 'capitalizable_cb', 'milestone_cb', 'cip_asset_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['task_number', 'parent_prj_task_num', 'service_type', 'work_type', 'rate_type', 'task_status'], 'string', 'max' => 25],
            [['task_name'], 'string', 'max' => 50],
            [['description', 'line_description'], 'string', 'max' => 256],
            [['currency'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'task_number' => Yii::t('app', 'Task Number'),
            'task_level_weight' => Yii::t('app', 'Task Level Weight'),
            'task_name' => Yii::t('app', 'Task Name'),
            'parent_prj_task_num' => Yii::t('app', 'Parent Prj Task Num'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'manager_user_id' => Yii::t('app', 'Manager User ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'service_type' => Yii::t('app', 'Service Type'),
            'work_type' => Yii::t('app', 'Work Type'),
            'allow_charges_cb' => Yii::t('app', 'Allow Charges Cb'),
            'capitalizable_cb' => Yii::t('app', 'Capitalizable Cb'),
            'milestone_cb' => Yii::t('app', 'Milestone Cb'),
            'currency' => Yii::t('app', 'Currency'),
            'rate_type' => Yii::t('app', 'Rate Type'),
            'cip_asset_id' => Yii::t('app', 'Cip Asset ID'),
            'line_description' => Yii::t('app', 'Line Description'),
            'task_status' => Yii::t('app', 'Task Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
