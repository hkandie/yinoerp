<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_support_request}}".
 *
 * @property string $hd_support_request_id
 * @property string $support_number
 * @property integer $requester_user_id
 * @property string $requester_username
 * @property string $requester_email
 * @property string $requester_phone
 * @property string $impact
 * @property string $urgency
 * @property integer $priority
 * @property string $reason
 * @property string $escalation
 * @property string $subject
 * @property string $status
 * @property string $request_type
 * @property string $request_category
 * @property string $assignment_group
 * @property integer $assigned_to_user_id
 * @property string $description
 * @property string $resolution_details
 * @property integer $hd_change_request_id
 * @property string $close_code
 * @property integer $closed_by_user_id
 * @property string $closed_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSupportRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_support_request}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requester_user_id', 'priority', 'assigned_to_user_id', 'hd_change_request_id', 'closed_by_user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['subject', 'description', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['description', 'resolution_details'], 'string'],
            [['closed_date', 'creation_date', 'last_update_date'], 'safe'],
            [['support_number', 'requester_username', 'requester_email', 'impact', 'urgency', 'reason', 'escalation', 'status', 'request_type', 'request_category', 'assignment_group', 'close_code'], 'string', 'max' => 25],
            [['requester_phone', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_support_request_id' => Yii::t('app', 'Hd Support Request ID'),
            'support_number' => Yii::t('app', 'Support Number'),
            'requester_user_id' => Yii::t('app', 'Requester User ID'),
            'requester_username' => Yii::t('app', 'Requester Username'),
            'requester_email' => Yii::t('app', 'Requester Email'),
            'requester_phone' => Yii::t('app', 'Requester Phone'),
            'impact' => Yii::t('app', 'Impact'),
            'urgency' => Yii::t('app', 'Urgency'),
            'priority' => Yii::t('app', 'Priority'),
            'reason' => Yii::t('app', 'Reason'),
            'escalation' => Yii::t('app', 'Escalation'),
            'subject' => Yii::t('app', 'Subject'),
            'status' => Yii::t('app', 'Status'),
            'request_type' => Yii::t('app', 'Request Type'),
            'request_category' => Yii::t('app', 'Request Category'),
            'assignment_group' => Yii::t('app', 'Assignment Group'),
            'assigned_to_user_id' => Yii::t('app', 'Assigned To User ID'),
            'description' => Yii::t('app', 'Description'),
            'resolution_details' => Yii::t('app', 'Resolution Details'),
            'hd_change_request_id' => Yii::t('app', 'Hd Change Request ID'),
            'close_code' => Yii::t('app', 'Close Code'),
            'closed_by_user_id' => Yii::t('app', 'Closed By User ID'),
            'closed_date' => Yii::t('app', 'Closed Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
