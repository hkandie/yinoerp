<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_budget_header}}".
 *
 * @property string $prj_budget_header_id
 * @property string $budget_type
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property integer $version_number
 * @property string $version_name
 * @property string $description
 * @property string $status
 * @property string $raw_cost
 * @property string $burdened_cost
 * @property string $labor_effort
 * @property string $nlr_effort
 * @property string $revenue
 * @property integer $current_cb
 * @property integer $original_cb
 * @property string $baselined_by
 * @property integer $baselined_cb
 * @property string $baselined_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBudgetHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_budget_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_header_id', 'version_number', 'version_name', 'created_by', 'last_update_by'], 'required'],
            [['prj_project_header_id', 'prj_project_line_id', 'version_number', 'current_cb', 'original_cb', 'baselined_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['raw_cost', 'burdened_cost', 'labor_effort', 'nlr_effort', 'revenue'], 'number'],
            [['baselined_date', 'creation_date', 'last_update_date'], 'safe'],
            [['budget_type', 'version_name', 'status', 'baselined_by'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['budget_type', 'prj_project_header_id', 'version_number'], 'unique', 'targetAttribute' => ['budget_type', 'prj_project_header_id', 'version_number'], 'message' => 'The combination of Budget Type, Prj Project Header ID and Version Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_budget_header_id' => Yii::t('app', 'Prj Budget Header ID'),
            'budget_type' => Yii::t('app', 'Budget Type'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'version_number' => Yii::t('app', 'Version Number'),
            'version_name' => Yii::t('app', 'Version Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'raw_cost' => Yii::t('app', 'Raw Cost'),
            'burdened_cost' => Yii::t('app', 'Burdened Cost'),
            'labor_effort' => Yii::t('app', 'Labor Effort'),
            'nlr_effort' => Yii::t('app', 'Nlr Effort'),
            'revenue' => Yii::t('app', 'Revenue'),
            'current_cb' => Yii::t('app', 'Current Cb'),
            'original_cb' => Yii::t('app', 'Original Cb'),
            'baselined_by' => Yii::t('app', 'Baselined By'),
            'baselined_cb' => Yii::t('app', 'Baselined Cb'),
            'baselined_date' => Yii::t('app', 'Baselined Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
