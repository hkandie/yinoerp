<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_notification_group}}".
 *
 * @property string $sys_notification_group_id
 * @property integer $start_sys_notification_id
 * @property string $notification_name
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $reference_key_table
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysNotificationGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_notification_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_sys_notification_id', 'notification_name', 'created_by', 'last_update_by'], 'required'],
            [['start_sys_notification_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['notification_name'], 'string', 'max' => 256],
            [['reference_key_name', 'reference_key_value', 'reference_key_table'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 25],
            [['notification_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_notification_group_id' => Yii::t('app', 'Sys Notification Group ID'),
            'start_sys_notification_id' => Yii::t('app', 'Start Sys Notification ID'),
            'notification_name' => Yii::t('app', 'Notification Name'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'reference_key_table' => Yii::t('app', 'Reference Key Table'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
