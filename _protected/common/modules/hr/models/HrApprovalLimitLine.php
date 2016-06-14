<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_approval_limit_line}}".
 *
 * @property string $hr_approval_limit_line_id
 * @property integer $hr_approval_limit_header_id
 * @property string $limit_object
 * @property string $limit_type
 * @property string $limit_range_low
 * @property string $limit_range_high
 * @property string $amount_limit
 * @property string $inactive_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrApprovalLimitLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_approval_limit_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_approval_limit_header_id', 'limit_object', 'amount_limit', 'created_by', 'last_update_by'], 'required'],
            [['hr_approval_limit_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount_limit'], 'number'],
            [['inactive_date', 'creation_date', 'last_update_date'], 'safe'],
            [['limit_object', 'limit_type'], 'string', 'max' => 25],
            [['limit_range_low', 'limit_range_high'], 'string', 'max' => 256],
            [['hr_approval_limit_header_id', 'limit_object'], 'unique', 'targetAttribute' => ['hr_approval_limit_header_id', 'limit_object'], 'message' => 'The combination of Hr Approval Limit Header ID and Limit Object has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_approval_limit_line_id' => Yii::t('app', 'Hr Approval Limit Line ID'),
            'hr_approval_limit_header_id' => Yii::t('app', 'Hr Approval Limit Header ID'),
            'limit_object' => Yii::t('app', 'Limit Object'),
            'limit_type' => Yii::t('app', 'Limit Type'),
            'limit_range_low' => Yii::t('app', 'Limit Range Low'),
            'limit_range_high' => Yii::t('app', 'Limit Range High'),
            'amount_limit' => Yii::t('app', 'Amount Limit'),
            'inactive_date' => Yii::t('app', 'Inactive Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
