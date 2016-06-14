<?php

namespace common\modules\adm\models;

use Yii;

/**
 * This is the model class for table "adm_task_template_line".
 *
 * @property integer $adm_task_template_line_id
 * @property integer $adm_task_template_header_id
 * @property string $status
 * @property integer $task_type_id
 * @property string $priority_code
 * @property string $subject
 * @property string $description
 * @property integer $duration_uom_id
 * @property string $duration
 * @property integer $planned_uom_id
 * @property string $planned_uom
 * @property integer $holiday_cb
 * @property integer $milestone_cb
 * @property integer $confirm_required_cb
 * @property integer $publish_cb
 * @property integer $billable_cb
 * @property integer $private_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AdmTaskTemplateLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_task_template_line';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['adm_task_template_header_id', 'status', 'task_type_id', 'priority_code', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['adm_task_template_header_id', 'task_type_id', 'duration_uom_id', 'planned_uom_id', 'holiday_cb', 'milestone_cb', 'confirm_required_cb', 'publish_cb', 'billable_cb', 'private_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['duration'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status', 'priority_code', 'planned_uom'], 'string', 'max' => 25],
            [['subject', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adm_task_template_line_id' => Yii::t('app', 'Adm Task Template Line ID'),
            'adm_task_template_header_id' => Yii::t('app', 'Adm Task Template Header ID'),
            'status' => Yii::t('app', 'Status'),
            'task_type_id' => Yii::t('app', 'Task Type ID'),
            'priority_code' => Yii::t('app', 'Priority Code'),
            'subject' => Yii::t('app', 'Subject'),
            'description' => Yii::t('app', 'Description'),
            'duration_uom_id' => Yii::t('app', 'Duration Uom ID'),
            'duration' => Yii::t('app', 'Duration'),
            'planned_uom_id' => Yii::t('app', 'Planned Uom ID'),
            'planned_uom' => Yii::t('app', 'Planned Uom'),
            'holiday_cb' => Yii::t('app', 'Holiday Cb'),
            'milestone_cb' => Yii::t('app', 'Milestone Cb'),
            'confirm_required_cb' => Yii::t('app', 'Confirm Required Cb'),
            'publish_cb' => Yii::t('app', 'Publish Cb'),
            'billable_cb' => Yii::t('app', 'Billable Cb'),
            'private_cb' => Yii::t('app', 'Private Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
