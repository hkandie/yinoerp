<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_leave_transaction}}".
 *
 * @property string $hr_leave_transaction_id
 * @property integer $employee_id
 * @property string $requsted_date
 * @property string $approved_date
 * @property string $approved_by
 * @property integer $approved_by_employee_id
 * @property string $leave_status
 * @property string $leave_type
 * @property string $transaction_type
 * @property string $leave_quantity
 * @property string $from_date
 * @property string $to_date
 * @property string $reason
 * @property string $contact_details
 * @property integer $sys_notification_id
 * @property integer $sys_notification_group_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrLeaveTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_leave_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'leave_status', 'leave_type', 'leave_quantity', 'from_date', 'to_date', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['employee_id', 'approved_by_employee_id', 'sys_notification_id', 'sys_notification_group_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['requsted_date', 'approved_date', 'from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['leave_quantity'], 'number'],
            [['approved_by'], 'string', 'max' => 100],
            [['leave_status', 'transaction_type'], 'string', 'max' => 25],
            [['leave_type'], 'string', 'max' => 50],
            [['reason', 'contact_details'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_leave_transaction_id' => Yii::t('app', 'Hr Leave Transaction ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'requsted_date' => Yii::t('app', 'Requsted Date'),
            'approved_date' => Yii::t('app', 'Approved Date'),
            'approved_by' => Yii::t('app', 'Approved By'),
            'approved_by_employee_id' => Yii::t('app', 'Approved By Employee ID'),
            'leave_status' => Yii::t('app', 'Leave Status'),
            'leave_type' => Yii::t('app', 'Leave Type'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'leave_quantity' => Yii::t('app', 'Leave Quantity'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'reason' => Yii::t('app', 'Reason'),
            'contact_details' => Yii::t('app', 'Contact Details'),
            'sys_notification_id' => Yii::t('app', 'Sys Notification ID'),
            'sys_notification_group_id' => Yii::t('app', 'Sys Notification Group ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
