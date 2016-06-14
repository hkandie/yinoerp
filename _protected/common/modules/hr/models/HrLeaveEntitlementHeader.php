<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_leave_entitlement_header}}".
 *
 * @property string $hr_leave_entitlement_header_id
 * @property string $entitlement_name
 * @property string $description
 * @property string $status
 * @property integer $job_id
 * @property integer $position_id
 * @property integer $employee_id
 * @property string $leave_group
 * @property integer $grade_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrLeaveEntitlementHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_leave_entitlement_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['entitlement_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['job_id', 'position_id', 'employee_id', 'grade_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['entitlement_name', 'description'], 'string', 'max' => 256],
            [['status', 'leave_group'], 'string', 'max' => 25],
            [['job_id', 'grade_id'], 'unique', 'targetAttribute' => ['job_id', 'grade_id'], 'message' => 'The combination of Job ID and Grade ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_leave_entitlement_header_id' => Yii::t('app', 'Hr Leave Entitlement Header ID'),
            'entitlement_name' => Yii::t('app', 'Entitlement Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'job_id' => Yii::t('app', 'Job ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'leave_group' => Yii::t('app', 'Leave Group'),
            'grade_id' => Yii::t('app', 'Grade ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
