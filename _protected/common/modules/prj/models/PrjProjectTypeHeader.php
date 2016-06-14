<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_type_header}}".
 *
 * @property string $prj_project_type_header_id
 * @property integer $bu_org_id
 * @property string $project_class
 * @property string $project_type
 * @property string $description
 * @property string $effective_from
 * @property string $effective_to
 * @property string $service_type
 * @property integer $role_list_id
 * @property integer $prj_work_type_id
 * @property integer $sponsored_cb
 * @property integer $organization_planning_cb
 * @property integer $intercompany_billing_cb
 * @property integer $prj_burden_list_header_id
 * @property integer $cost_burdened_cb
 * @property integer $account_burdened_cost_cb
 * @property string $cost_budget_method
 * @property string $revenue_budget_method
 * @property integer $resource_list_id
 * @property string $project_status
 * @property string $cip_cost_type
 * @property string $asset_cost_allocation_method
 * @property string $event_processing_method
 * @property string $grouping_method
 * @property string $labor_billing_type
 * @property string $nlr_billing_type
 * @property integer $employee_schedule_id
 * @property integer $job_schedule_id
 * @property integer $l_revenue_burden_id
 * @property integer $l_invoice_burdern_id
 * @property integer $nrl_revenue_burden_id
 * @property integer $nlr_invoice_burdern_id
 * @property integer $nlr_schedule_id
 * @property integer $billing_cycle_id
 * @property integer $cost_cost_cb
 * @property integer $cost_event_cb
 * @property integer $cost_work_cb
 * @property integer $event_event_cb
 * @property integer $event_work_cb
 * @property integer $work_event_cb
 * @property integer $work_work_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectTypeHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_type_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'project_class', 'project_type', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'role_list_id', 'prj_work_type_id', 'sponsored_cb', 'organization_planning_cb', 'intercompany_billing_cb', 'prj_burden_list_header_id', 'cost_burdened_cb', 'account_burdened_cost_cb', 'resource_list_id', 'employee_schedule_id', 'job_schedule_id', 'l_revenue_burden_id', 'l_invoice_burdern_id', 'nrl_revenue_burden_id', 'nlr_invoice_burdern_id', 'nlr_schedule_id', 'billing_cycle_id', 'cost_cost_cb', 'cost_event_cb', 'cost_work_cb', 'event_event_cb', 'event_work_cb', 'work_event_cb', 'work_work_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['project_class', 'labor_billing_type', 'nlr_billing_type'], 'string', 'max' => 15],
            [['project_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['service_type', 'project_status', 'cip_cost_type', 'asset_cost_allocation_method', 'event_processing_method', 'grouping_method'], 'string', 'max' => 25],
            [['cost_budget_method', 'revenue_budget_method'], 'string', 'max' => 12],
            [['project_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_type_header_id' => Yii::t('app', 'Prj Project Type Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'project_class' => Yii::t('app', 'Project Class'),
            'project_type' => Yii::t('app', 'Project Type'),
            'description' => Yii::t('app', 'Description'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'service_type' => Yii::t('app', 'Service Type'),
            'role_list_id' => Yii::t('app', 'Role List ID'),
            'prj_work_type_id' => Yii::t('app', 'Prj Work Type ID'),
            'sponsored_cb' => Yii::t('app', 'Sponsored Cb'),
            'organization_planning_cb' => Yii::t('app', 'Organization Planning Cb'),
            'intercompany_billing_cb' => Yii::t('app', 'Intercompany Billing Cb'),
            'prj_burden_list_header_id' => Yii::t('app', 'Prj Burden List Header ID'),
            'cost_burdened_cb' => Yii::t('app', 'Cost Burdened Cb'),
            'account_burdened_cost_cb' => Yii::t('app', 'Account Burdened Cost Cb'),
            'cost_budget_method' => Yii::t('app', 'Cost Budget Method'),
            'revenue_budget_method' => Yii::t('app', 'Revenue Budget Method'),
            'resource_list_id' => Yii::t('app', 'Resource List ID'),
            'project_status' => Yii::t('app', 'Project Status'),
            'cip_cost_type' => Yii::t('app', 'Cip Cost Type'),
            'asset_cost_allocation_method' => Yii::t('app', 'Asset Cost Allocation Method'),
            'event_processing_method' => Yii::t('app', 'Event Processing Method'),
            'grouping_method' => Yii::t('app', 'Grouping Method'),
            'labor_billing_type' => Yii::t('app', 'Labor Billing Type'),
            'nlr_billing_type' => Yii::t('app', 'Nlr Billing Type'),
            'employee_schedule_id' => Yii::t('app', 'Employee Schedule ID'),
            'job_schedule_id' => Yii::t('app', 'Job Schedule ID'),
            'l_revenue_burden_id' => Yii::t('app', 'L Revenue Burden ID'),
            'l_invoice_burdern_id' => Yii::t('app', 'L Invoice Burdern ID'),
            'nrl_revenue_burden_id' => Yii::t('app', 'Nrl Revenue Burden ID'),
            'nlr_invoice_burdern_id' => Yii::t('app', 'Nlr Invoice Burdern ID'),
            'nlr_schedule_id' => Yii::t('app', 'Nlr Schedule ID'),
            'billing_cycle_id' => Yii::t('app', 'Billing Cycle ID'),
            'cost_cost_cb' => Yii::t('app', 'Cost Cost Cb'),
            'cost_event_cb' => Yii::t('app', 'Cost Event Cb'),
            'cost_work_cb' => Yii::t('app', 'Cost Work Cb'),
            'event_event_cb' => Yii::t('app', 'Event Event Cb'),
            'event_work_cb' => Yii::t('app', 'Event Work Cb'),
            'work_event_cb' => Yii::t('app', 'Work Event Cb'),
            'work_work_cb' => Yii::t('app', 'Work Work Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
