<?php

namespace common\modules\adm\models;

use Yii;

/**
 * This is the model class for table "adm_task_type".
 *
 * @property integer $adm_task_type_id
 * @property string $access_level
 * @property string $task_type
 * @property integer $process_flow_header_id
 * @property string $description
 * @property string $from_date
 * @property string $to_date
 * @property integer $effort_uom_id
 * @property string $effort_value
 * @property integer $send_notification_cb
 * @property integer $schedule_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AdmTaskType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_task_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['access_level', 'task_type', 'created_by', 'last_update_by'], 'required'],
            [['process_flow_header_id', 'effort_uom_id', 'send_notification_cb', 'schedule_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['effort_value'], 'number'],
            [['access_level'], 'string', 'max' => 25],
            [['task_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adm_task_type_id' => Yii::t('app', 'Adm Task Type ID'),
            'access_level' => Yii::t('app', 'Access Level'),
            'task_type' => Yii::t('app', 'Task Type'),
            'process_flow_header_id' => Yii::t('app', 'Process Flow Header ID'),
            'description' => Yii::t('app', 'Description'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'effort_uom_id' => Yii::t('app', 'Effort Uom ID'),
            'effort_value' => Yii::t('app', 'Effort Value'),
            'send_notification_cb' => Yii::t('app', 'Send Notification Cb'),
            'schedule_cb' => Yii::t('app', 'Schedule Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
