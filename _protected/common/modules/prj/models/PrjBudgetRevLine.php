<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_budget_rev_line}}".
 *
 * @property string $prj_budget_rev_line_id
 * @property integer $prj_budget_rev_header_id
 * @property integer $prj_budget_header_id
 * @property integer $prj_budget_line_id
 * @property integer $prj_project_header_id
 * @property string $description
 * @property integer $prj_project_line_id
 * @property integer $prj_resource_line_id
 * @property integer $uom_id
 * @property string $quantity
 * @property string $raw_cost
 * @property string $revenue_quantity
 * @property string $revenue_amount
 * @property string $burden_cost
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBudgetRevLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_budget_rev_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_budget_rev_header_id', 'prj_budget_header_id', 'prj_budget_line_id', 'prj_project_header_id', 'prj_project_line_id', 'prj_resource_line_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['prj_budget_header_id', 'prj_budget_line_id', 'prj_project_header_id', 'created_by', 'last_update_by'], 'required'],
            [['quantity', 'raw_cost', 'revenue_quantity', 'revenue_amount', 'burden_cost'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['prj_budget_rev_header_id', 'prj_project_line_id'], 'unique', 'targetAttribute' => ['prj_budget_rev_header_id', 'prj_project_line_id'], 'message' => 'The combination of Prj Budget Rev Header ID and Prj Project Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_budget_rev_line_id' => Yii::t('app', 'Prj Budget Rev Line ID'),
            'prj_budget_rev_header_id' => Yii::t('app', 'Prj Budget Rev Header ID'),
            'prj_budget_header_id' => Yii::t('app', 'Prj Budget Header ID'),
            'prj_budget_line_id' => Yii::t('app', 'Prj Budget Line ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'description' => Yii::t('app', 'Description'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_resource_line_id' => Yii::t('app', 'Prj Resource Line ID'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'raw_cost' => Yii::t('app', 'Raw Cost'),
            'revenue_quantity' => Yii::t('app', 'Revenue Quantity'),
            'revenue_amount' => Yii::t('app', 'Revenue Amount'),
            'burden_cost' => Yii::t('app', 'Burden Cost'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
