<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_leave_entitlement_line}}".
 *
 * @property string $hr_leave_entitlement_line_id
 * @property integer $hr_leave_entitlement_header_id
 * @property string $leave_type
 * @property string $leave_per_period
 * @property string $period
 * @property string $default_no_of_period
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrLeaveEntitlementLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_leave_entitlement_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_leave_entitlement_header_id', 'leave_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_leave_entitlement_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['leave_per_period', 'default_no_of_period'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['leave_type', 'period'], 'string', 'max' => 50],
            [['leave_type', 'default_no_of_period'], 'unique', 'targetAttribute' => ['leave_type', 'default_no_of_period'], 'message' => 'The combination of Leave Type and Default No Of Period has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_leave_entitlement_line_id' => Yii::t('app', 'Hr Leave Entitlement Line ID'),
            'hr_leave_entitlement_header_id' => Yii::t('app', 'Hr Leave Entitlement Header ID'),
            'leave_type' => Yii::t('app', 'Leave Type'),
            'leave_per_period' => Yii::t('app', 'Leave Per Period'),
            'period' => Yii::t('app', 'Period'),
            'default_no_of_period' => Yii::t('app', 'Default No Of Period'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
