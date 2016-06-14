<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_budget_detail}}".
 *
 * @property string $prj_budget_detail_id
 * @property integer $prj_budget_line_id
 * @property integer $prj_budget_header_id
 * @property string $description
 * @property integer $gl_period_id
 * @property string $start_date
 * @property string $end_date
 * @property string $quantity
 * @property string $raw_cost
 * @property string $burdened_cost
 * @property string $revenue_quantity
 * @property string $revenue_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBudgetDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_budget_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_budget_line_id', 'prj_budget_header_id', 'gl_period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity', 'raw_cost', 'burdened_cost', 'revenue_quantity', 'revenue_amount'], 'number'],
            [['created_by', 'last_update_by'], 'required'],
            [['description'], 'string', 'max' => 255],
            [['prj_budget_line_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_budget_detail_id' => Yii::t('app', 'Prj Budget Detail ID'),
            'prj_budget_line_id' => Yii::t('app', 'Prj Budget Line ID'),
            'prj_budget_header_id' => Yii::t('app', 'Prj Budget Header ID'),
            'description' => Yii::t('app', 'Description'),
            'gl_period_id' => Yii::t('app', 'Gl Period ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'raw_cost' => Yii::t('app', 'Raw Cost'),
            'burdened_cost' => Yii::t('app', 'Burdened Cost'),
            'revenue_quantity' => Yii::t('app', 'Revenue Quantity'),
            'revenue_amount' => Yii::t('app', 'Revenue Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
