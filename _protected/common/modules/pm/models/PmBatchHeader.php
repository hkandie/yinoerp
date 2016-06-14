<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_batch_header}}".
 *
 * @property string $pm_batch_header_id
 * @property string $batch_name
 * @property integer $org_id
 * @property integer $pm_recipe_header_id
 * @property integer $wip_accounting_group_id
 * @property string $recipe_version
 * @property string $comment
 * @property string $status
 * @property string $description
 * @property string $terminate_reason
 * @property string $planned_start_date
 * @property string $planned_completion_date
 * @property string $required_completion_date
 * @property string $actual_completion_date
 * @property integer $actual_start_date
 * @property integer $update_invnetory_cb
 * @property integer $batch_exploded_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmBatchHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_batch_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['batch_name', 'org_id', 'pm_recipe_header_id', 'required_completion_date', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'pm_recipe_header_id', 'wip_accounting_group_id', 'actual_start_date', 'update_invnetory_cb', 'batch_exploded_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['planned_start_date', 'planned_completion_date', 'required_completion_date', 'actual_completion_date', 'creation_date', 'last_update_date'], 'safe'],
            [['batch_name'], 'string', 'max' => 25],
            [['recipe_version'], 'string', 'max' => 5],
            [['comment', 'terminate_reason'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 256],
            [['batch_name', 'org_id'], 'unique', 'targetAttribute' => ['batch_name', 'org_id'], 'message' => 'The combination of Batch Name and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_batch_header_id' => Yii::t('app', 'Pm Batch Header ID'),
            'batch_name' => Yii::t('app', 'Batch Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'pm_recipe_header_id' => Yii::t('app', 'Pm Recipe Header ID'),
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'recipe_version' => Yii::t('app', 'Recipe Version'),
            'comment' => Yii::t('app', 'Comment'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'terminate_reason' => Yii::t('app', 'Terminate Reason'),
            'planned_start_date' => Yii::t('app', 'Planned Start Date'),
            'planned_completion_date' => Yii::t('app', 'Planned Completion Date'),
            'required_completion_date' => Yii::t('app', 'Required Completion Date'),
            'actual_completion_date' => Yii::t('app', 'Actual Completion Date'),
            'actual_start_date' => Yii::t('app', 'Actual Start Date'),
            'update_invnetory_cb' => Yii::t('app', 'Update Invnetory Cb'),
            'batch_exploded_cb' => Yii::t('app', 'Batch Exploded Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
