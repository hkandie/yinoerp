<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_notification}}".
 *
 * @property string $sys_notification_id
 * @property string $notification_type
 * @property string $notification_name
 * @property integer $from_user_id
 * @property integer $to_user_id
 * @property string $from_user
 * @property string $to_user
 * @property string $to_user_id_all
 * @property string $to_email
 * @property string $cc_email
 * @property string $notification_subject
 * @property string $to_role
 * @property string $access_key
 * @property string $mail_status
 * @property string $start_date
 * @property string $end_date
 * @property string $due_date
 * @property string $responder
 * @property string $responder_comment
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $user_key_name
 * @property string $user_key_value
 * @property string $text_field1
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $notification_group_id
 * @property integer $notification_group_seq
 * @property integer $company_id
 */
class SysNotification extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_notification}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notification_type', 'notification_name', 'from_user_id', 'to_email', 'start_date', 'created_by', 'last_update_by'], 'required'],
            [['from_user_id', 'to_user_id', 'created_by', 'last_update_by', 'notification_group_id', 'notification_group_seq', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'due_date', 'creation_date', 'last_update_date'], 'safe'],
            [['text_field1'], 'string'],
            [['notification_type'], 'string', 'max' => 12],
            [['notification_name', 'to_user_id_all', 'cc_email', 'notification_subject', 'access_key', 'responder_comment'], 'string', 'max' => 256],
            [['from_user', 'to_user', 'responder', 'reference_key_name', 'reference_key_value', 'user_key_name', 'user_key_value'], 'string', 'max' => 100],
            [['to_email'], 'string', 'max' => 50],
            [['to_role', 'mail_status', 'status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_notification_id' => Yii::t('app', 'Sys Notification ID'),
            'notification_type' => Yii::t('app', 'Notification Type'),
            'notification_name' => Yii::t('app', 'Notification Name'),
            'from_user_id' => Yii::t('app', 'From User ID'),
            'to_user_id' => Yii::t('app', 'To User ID'),
            'from_user' => Yii::t('app', 'From User'),
            'to_user' => Yii::t('app', 'To User'),
            'to_user_id_all' => Yii::t('app', 'To User Id All'),
            'to_email' => Yii::t('app', 'To Email'),
            'cc_email' => Yii::t('app', 'Cc Email'),
            'notification_subject' => Yii::t('app', 'Notification Subject'),
            'to_role' => Yii::t('app', 'To Role'),
            'access_key' => Yii::t('app', 'Access Key'),
            'mail_status' => Yii::t('app', 'Mail Status'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'due_date' => Yii::t('app', 'Due Date'),
            'responder' => Yii::t('app', 'Responder'),
            'responder_comment' => Yii::t('app', 'Responder Comment'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'user_key_name' => Yii::t('app', 'User Key Name'),
            'user_key_value' => Yii::t('app', 'User Key Value'),
            'text_field1' => Yii::t('app', 'Text Field1'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'notification_group_id' => Yii::t('app', 'Notification Group ID'),
            'notification_group_seq' => Yii::t('app', 'Notification Group Seq'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
