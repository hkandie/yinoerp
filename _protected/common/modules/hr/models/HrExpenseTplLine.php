<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_expense_tpl_line}}".
 *
 * @property string $hr_expense_tpl_line_id
 * @property integer $hr_expense_tpl_header_id
 * @property string $expense_item
 * @property string $expense_category
 * @property integer $tax_code_id
 * @property integer $expense_ac_id
 * @property string $inactive_date
 * @property integer $prj_expenditure_type_header_id
 * @property integer $policy_schedule_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrExpenseTplLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_expense_tpl_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_expense_tpl_header_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_expense_tpl_header_id', 'tax_code_id', 'expense_ac_id', 'prj_expenditure_type_header_id', 'policy_schedule_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['inactive_date', 'creation_date', 'last_update_date'], 'safe'],
            [['expense_item'], 'string', 'max' => 50],
            [['expense_category'], 'string', 'max' => 25],
            [['hr_expense_tpl_header_id', 'expense_item'], 'unique', 'targetAttribute' => ['hr_expense_tpl_header_id', 'expense_item'], 'message' => 'The combination of Hr Expense Tpl Header ID and Expense Item has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_expense_tpl_line_id' => Yii::t('app', 'Hr Expense Tpl Line ID'),
            'hr_expense_tpl_header_id' => Yii::t('app', 'Hr Expense Tpl Header ID'),
            'expense_item' => Yii::t('app', 'Expense Item'),
            'expense_category' => Yii::t('app', 'Expense Category'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'inactive_date' => Yii::t('app', 'Inactive Date'),
            'prj_expenditure_type_header_id' => Yii::t('app', 'Prj Expenditure Type Header ID'),
            'policy_schedule_id' => Yii::t('app', 'Policy Schedule ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
