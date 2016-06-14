<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_message_format}}".
 *
 * @property string $sys_message_format_id
 * @property string $format_name
 * @property string $description
 * @property string $message_subject
 * @property string $message_body
 * @property string $content_type
 * @property string $cc_email
 * @property string $from_name
 * @property string $from_email
 * @property string $reply_to
 * @property integer $use_smtp_cb
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysMessageFormat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_message_format}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message_body'], 'string'],
            [['use_smtp_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['format_name', 'from_name', 'from_email'], 'string', 'max' => 50],
            [['description', 'message_subject', 'cc_email'], 'string', 'max' => 255],
            [['content_type'], 'string', 'max' => 10],
            [['reply_to'], 'string', 'max' => 40],
            [['status'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_message_format_id' => Yii::t('app', 'Sys Message Format ID'),
            'format_name' => Yii::t('app', 'Format Name'),
            'description' => Yii::t('app', 'Description'),
            'message_subject' => Yii::t('app', 'Message Subject'),
            'message_body' => Yii::t('app', 'Message Body'),
            'content_type' => Yii::t('app', 'Content Type'),
            'cc_email' => Yii::t('app', 'Cc Email'),
            'from_name' => Yii::t('app', 'From Name'),
            'from_email' => Yii::t('app', 'From Email'),
            'reply_to' => Yii::t('app', 'Reply To'),
            'use_smtp_cb' => Yii::t('app', 'Use Smtp Cb'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
