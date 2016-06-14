<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_change_request}}".
 *
 * @property string $hd_change_request_id
 * @property string $request_number
 * @property integer $requester_user_id
 * @property string $requester_username
 * @property string $requester_email
 * @property string $requester_phone
 * @property string $impact
 * @property string $urgency
 * @property integer $priority
 * @property string $reason
 * @property string $requested_by_date
 * @property string $subject
 * @property string $status
 * @property string $request_type
 * @property string $request_category
 * @property string $assignment_group
 * @property integer $assigned_to_user_id
 * @property string $description
 * @property string $chane_details
 * @property integer $hd_support_request_id
 * @property string $planned_start_date
 * @property string $planned_end_date
 * @property string $work_start_date
 * @property string $work_end_date
 * @property integer $technical_approver
 * @property integer $functional_approver
 * @property integer $dba_approver
 * @property string $work_completed_by
 * @property string $change_plan
 * @property string $rollback_plan
 * @property string $communication_plan
 * @property string $test_paln
 * @property string $test_results
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdChangeRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_change_request}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['requester_user_id', 'priority', 'assigned_to_user_id', 'hd_support_request_id', 'technical_approver', 'functional_approver', 'dba_approver', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['requested_by_date', 'planned_start_date', 'planned_end_date', 'work_start_date', 'work_end_date', 'work_completed_by', 'creation_date', 'last_update_date'], 'safe'],
            [['subject', 'description', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['description', 'chane_details', 'change_plan', 'rollback_plan', 'communication_plan', 'test_paln', 'test_results'], 'string'],
            [['request_number', 'requester_username', 'requester_email', 'impact', 'urgency', 'reason', 'status', 'request_type', 'request_category', 'assignment_group'], 'string', 'max' => 25],
            [['requester_phone', 'subject'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_change_request_id' => Yii::t('app', 'Hd Change Request ID'),
            'request_number' => Yii::t('app', 'Request Number'),
            'requester_user_id' => Yii::t('app', 'Requester User ID'),
            'requester_username' => Yii::t('app', 'Requester Username'),
            'requester_email' => Yii::t('app', 'Requester Email'),
            'requester_phone' => Yii::t('app', 'Requester Phone'),
            'impact' => Yii::t('app', 'Impact'),
            'urgency' => Yii::t('app', 'Urgency'),
            'priority' => Yii::t('app', 'Priority'),
            'reason' => Yii::t('app', 'Reason'),
            'requested_by_date' => Yii::t('app', 'Requested By Date'),
            'subject' => Yii::t('app', 'Subject'),
            'status' => Yii::t('app', 'Status'),
            'request_type' => Yii::t('app', 'Request Type'),
            'request_category' => Yii::t('app', 'Request Category'),
            'assignment_group' => Yii::t('app', 'Assignment Group'),
            'assigned_to_user_id' => Yii::t('app', 'Assigned To User ID'),
            'description' => Yii::t('app', 'Description'),
            'chane_details' => Yii::t('app', 'Chane Details'),
            'hd_support_request_id' => Yii::t('app', 'Hd Support Request ID'),
            'planned_start_date' => Yii::t('app', 'Planned Start Date'),
            'planned_end_date' => Yii::t('app', 'Planned End Date'),
            'work_start_date' => Yii::t('app', 'Work Start Date'),
            'work_end_date' => Yii::t('app', 'Work End Date'),
            'technical_approver' => Yii::t('app', 'Technical Approver'),
            'functional_approver' => Yii::t('app', 'Functional Approver'),
            'dba_approver' => Yii::t('app', 'Dba Approver'),
            'work_completed_by' => Yii::t('app', 'Work Completed By'),
            'change_plan' => Yii::t('app', 'Change Plan'),
            'rollback_plan' => Yii::t('app', 'Rollback Plan'),
            'communication_plan' => Yii::t('app', 'Communication Plan'),
            'test_paln' => Yii::t('app', 'Test Paln'),
            'test_results' => Yii::t('app', 'Test Results'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
