<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_request}}".
 *
 * @property string $hd_service_request_id
 * @property string $service_request_number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $inv_serial_number_id
 * @property integer $item_id_m
 * @property string $urgency
 * @property integer $priority
 * @property string $reason
 * @property string $escalation
 * @property string $problem_summary
 * @property string $status
 * @property string $request_type
 * @property string $request_category
 * @property string $assignment_group
 * @property integer $assigned_to_user_id
 * @property string $problem_details
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
class HdServiceRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_request}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_customer_id', 'problem_summary', 'request_type', 'problem_details', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['ar_customer_id', 'ar_customer_site_id', 'inv_serial_number_id', 'item_id_m', 'priority', 'assigned_to_user_id', 'hd_change_request_id', 'closed_by_user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['problem_details', 'resolution_details'], 'string'],
            [['closed_date', 'creation_date', 'last_update_date'], 'safe'],
            [['service_request_number', 'urgency', 'reason', 'escalation', 'status', 'request_type', 'request_category', 'assignment_group', 'close_code'], 'string', 'max' => 25],
            [['problem_summary'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_request_id' => Yii::t('app', 'Hd Service Request ID'),
            'service_request_number' => Yii::t('app', 'Service Request Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'urgency' => Yii::t('app', 'Urgency'),
            'priority' => Yii::t('app', 'Priority'),
            'reason' => Yii::t('app', 'Reason'),
            'escalation' => Yii::t('app', 'Escalation'),
            'problem_summary' => Yii::t('app', 'Problem Summary'),
            'status' => Yii::t('app', 'Status'),
            'request_type' => Yii::t('app', 'Request Type'),
            'request_category' => Yii::t('app', 'Request Category'),
            'assignment_group' => Yii::t('app', 'Assignment Group'),
            'assigned_to_user_id' => Yii::t('app', 'Assigned To User ID'),
            'problem_details' => Yii::t('app', 'Problem Details'),
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
