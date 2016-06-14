<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_control}}".
 *
 * @property string $hr_control_id
 * @property integer $bu_org_id
 * @property integer $default_job_id
 * @property integer $default_grade_id
 * @property integer $salary_cash_ac_id
 * @property string $expense_claim_approval
 * @property integer $expense_claim_ac_id
 * @property integer $salary_exp_ac_id
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'supplier_id', 'supplier_site_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'default_job_id', 'default_grade_id', 'salary_cash_ac_id', 'expense_claim_ac_id', 'salary_exp_ac_id', 'supplier_id', 'supplier_site_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['expense_claim_approval'], 'string', 'max' => 25],
            [['bu_org_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_control_id' => Yii::t('app', 'Hr Control ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'default_job_id' => Yii::t('app', 'Default Job ID'),
            'default_grade_id' => Yii::t('app', 'Default Grade ID'),
            'salary_cash_ac_id' => Yii::t('app', 'Salary Cash Ac ID'),
            'expense_claim_approval' => Yii::t('app', 'Expense Claim Approval'),
            'expense_claim_ac_id' => Yii::t('app', 'Expense Claim Ac ID'),
            'salary_exp_ac_id' => Yii::t('app', 'Salary Exp Ac ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
