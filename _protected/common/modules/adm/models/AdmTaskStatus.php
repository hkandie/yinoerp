<?php

namespace common\modules\adm\models;

use Yii;

/**
 * This is the model class for table "adm_task_status".
 *
 * @property integer $adm_task_status_id
 * @property string $status
 * @property string $access_level
 * @property string $start_by
 * @property integer $due_date
 * @property string $description
 * @property string $from_date
 * @property string $to_date
 * @property string $usage
 * @property string $primary_task_type
 * @property integer $send_notification_cb
 * @property integer $schedule_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AdmTaskStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'adm_task_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'start_by', 'created_by', 'last_update_by'], 'required'],
            [['due_date', 'send_notification_cb', 'schedule_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['status', 'access_level', 'usage', 'primary_task_type'], 'string', 'max' => 25],
            [['start_by'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'adm_task_status_id' => Yii::t('app', 'Adm Task Status ID'),
            'status' => Yii::t('app', 'Status'),
            'access_level' => Yii::t('app', 'Access Level'),
            'start_by' => Yii::t('app', 'Start By'),
            'due_date' => Yii::t('app', 'Due Date'),
            'description' => Yii::t('app', 'Description'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'usage' => Yii::t('app', 'Usage'),
            'primary_task_type' => Yii::t('app', 'Primary Task Type'),
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
