<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_header}}".
 *
 * @property integer $prj_project_header_id
 * @property integer $bu_org_id
 * @property integer $prj_project_type_id
 * @property string $project_number
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property integer $pm_employee_id
 * @property string $description
 * @property integer $manager_user_id
 * @property string $start_date
 * @property string $completion_date
 * @property string $header_amount
 * @property string $project_class
 * @property string $category
 * @property integer $finance_structure_cb
 * @property integer $operation_structure_cb
 * @property string $life_cycle
 * @property string $current_phase
 * @property integer $role_list_id
 * @property integer $prj_work_type
 * @property string $probability
 * @property string $currency
 * @property string $doc_currency
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $opportunity_value
 * @property string $expected_approval_date
 * @property string $billing_method
 * @property string $billing_cycle
 * @property integer $prj_burden_list_header_id
 * @property integer $account_burdened_cost_cb
 * @property string $labor_billing_type
 * @property string $nlr_billing_type
 * @property integer $employee_schedule_id
 * @property integer $job_schedule_id
 * @property integer $l_revenue_burden_id
 * @property integer $l_invoice_burdern_id
 * @property integer $nlr_schedule_id
 * @property integer $nrl_revenue_burden_id
 * @property integer $nlr_invoice_burdern_id
 * @property string $source
 * @property string $name
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $direct_labor_cb
 * @property integer $is_template_cb
 * @property string $project_status
 * @property string $accounting_group
 * @property string $approval_status
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'prj_project_type_id', 'prj_work_type', 'billing_method', 'accounting_group', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'prj_project_type_id', 'ar_customer_id', 'ar_customer_site_id', 'pm_employee_id', 'manager_user_id', 'finance_structure_cb', 'operation_structure_cb', 'role_list_id', 'prj_work_type', 'prj_burden_list_header_id', 'account_burdened_cost_cb', 'employee_schedule_id', 'job_schedule_id', 'l_revenue_burden_id', 'l_invoice_burdern_id', 'nlr_schedule_id', 'nrl_revenue_burden_id', 'nlr_invoice_burdern_id', 'direct_labor_cb', 'is_template_cb', 'rev_enabled_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'completion_date', 'expected_approval_date', 'creation_date', 'last_update_date'], 'safe'],
            [['header_amount', 'probability', 'exchange_rate', 'opportunity_value'], 'number'],
            [['project_number', 'name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['project_class', 'category', 'life_cycle', 'current_phase', 'currency', 'doc_currency', 'exchange_rate_type', 'source', 'reference_type', 'reference_key_name', 'reference_key_value', 'project_status', 'accounting_group', 'approval_status'], 'string', 'max' => 25],
            [['billing_method'], 'string', 'max' => 5],
            [['billing_cycle', 'labor_billing_type', 'nlr_billing_type'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'prj_project_type_id' => Yii::t('app', 'Prj Project Type ID'),
            'project_number' => Yii::t('app', 'Project Number'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'pm_employee_id' => Yii::t('app', 'Pm Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'manager_user_id' => Yii::t('app', 'Manager User ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'project_class' => Yii::t('app', 'Project Class'),
            'category' => Yii::t('app', 'Category'),
            'finance_structure_cb' => Yii::t('app', 'Finance Structure Cb'),
            'operation_structure_cb' => Yii::t('app', 'Operation Structure Cb'),
            'life_cycle' => Yii::t('app', 'Life Cycle'),
            'current_phase' => Yii::t('app', 'Current Phase'),
            'role_list_id' => Yii::t('app', 'Role List ID'),
            'prj_work_type' => Yii::t('app', 'Prj Work Type'),
            'probability' => Yii::t('app', 'Probability'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'opportunity_value' => Yii::t('app', 'Opportunity Value'),
            'expected_approval_date' => Yii::t('app', 'Expected Approval Date'),
            'billing_method' => Yii::t('app', 'Billing Method'),
            'billing_cycle' => Yii::t('app', 'Billing Cycle'),
            'prj_burden_list_header_id' => Yii::t('app', 'Prj Burden List Header ID'),
            'account_burdened_cost_cb' => Yii::t('app', 'Account Burdened Cost Cb'),
            'labor_billing_type' => Yii::t('app', 'Labor Billing Type'),
            'nlr_billing_type' => Yii::t('app', 'Nlr Billing Type'),
            'employee_schedule_id' => Yii::t('app', 'Employee Schedule ID'),
            'job_schedule_id' => Yii::t('app', 'Job Schedule ID'),
            'l_revenue_burden_id' => Yii::t('app', 'L Revenue Burden ID'),
            'l_invoice_burdern_id' => Yii::t('app', 'L Invoice Burdern ID'),
            'nlr_schedule_id' => Yii::t('app', 'Nlr Schedule ID'),
            'nrl_revenue_burden_id' => Yii::t('app', 'Nrl Revenue Burden ID'),
            'nlr_invoice_burdern_id' => Yii::t('app', 'Nlr Invoice Burdern ID'),
            'source' => Yii::t('app', 'Source'),
            'name' => Yii::t('app', 'Name'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'direct_labor_cb' => Yii::t('app', 'Direct Labor Cb'),
            'is_template_cb' => Yii::t('app', 'Is Template Cb'),
            'project_status' => Yii::t('app', 'Project Status'),
            'accounting_group' => Yii::t('app', 'Accounting Group'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
