<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_approval_limit_assignment}}".
 *
 * @property string $hr_approval_limit_assignment_id
 * @property integer $hr_approval_limit_header_id
 * @property integer $bu_org_id
 * @property integer $job_id
 * @property integer $position_id
 * @property string $document_type
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrApprovalLimitAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_approval_limit_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_approval_limit_header_id', 'start_date', 'created_by', 'last_update_by'], 'required'],
            [['hr_approval_limit_header_id', 'bu_org_id', 'job_id', 'position_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['document_type'], 'string', 'max' => 50],
            [['hr_approval_limit_header_id', 'bu_org_id', 'job_id', 'document_type'], 'unique', 'targetAttribute' => ['hr_approval_limit_header_id', 'bu_org_id', 'job_id', 'document_type'], 'message' => 'The combination of Hr Approval Limit Header ID, Bu Org ID, Job ID and Document Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_approval_limit_assignment_id' => Yii::t('app', 'Hr Approval Limit Assignment ID'),
            'hr_approval_limit_header_id' => Yii::t('app', 'Hr Approval Limit Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'job_id' => Yii::t('app', 'Job ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
