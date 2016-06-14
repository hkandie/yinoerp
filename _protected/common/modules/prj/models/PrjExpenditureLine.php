<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_expenditure_line}}".
 *
 * @property string $prj_expenditure_line_id
 * @property integer $prj_expenditure_header_id
 * @property integer $org_id
 * @property integer $hr_employee_id
 * @property string $description
 * @property integer $job_id
 * @property string $expenditure_date
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property integer $prj_nlr_header_id
 * @property integer $prj_expenditure_type_header_id
 * @property integer $uom_id
 * @property string $quantity
 * @property string $rate
 * @property string $status
 * @property integer $debit_ac_id
 * @property integer $credit_ac_id
 * @property integer $gl_journal_header_id
 * @property integer $gl_journal_interface_cb
 * @property integer $invoiced_cb
 * @property integer $revene_calculated_cb
 * @property string $line_amount
 * @property string $burden_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjExpenditureLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_expenditure_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_expenditure_header_id', 'prj_expenditure_type_header_id', 'uom_id', 'quantity', 'created_by', 'last_update_by'], 'required'],
            [['prj_expenditure_header_id', 'org_id', 'hr_employee_id', 'job_id', 'prj_project_header_id', 'prj_project_line_id', 'prj_nlr_header_id', 'prj_expenditure_type_header_id', 'uom_id', 'debit_ac_id', 'credit_ac_id', 'gl_journal_header_id', 'gl_journal_interface_cb', 'invoiced_cb', 'revene_calculated_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['expenditure_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity', 'rate', 'line_amount', 'burden_amount'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 25],
            [['prj_expenditure_header_id', 'org_id'], 'unique', 'targetAttribute' => ['prj_expenditure_header_id', 'org_id'], 'message' => 'The combination of Prj Expenditure Header ID and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_expenditure_line_id' => Yii::t('app', 'Prj Expenditure Line ID'),
            'prj_expenditure_header_id' => Yii::t('app', 'Prj Expenditure Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'description' => Yii::t('app', 'Description'),
            'job_id' => Yii::t('app', 'Job ID'),
            'expenditure_date' => Yii::t('app', 'Expenditure Date'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_nlr_header_id' => Yii::t('app', 'Prj Nlr Header ID'),
            'prj_expenditure_type_header_id' => Yii::t('app', 'Prj Expenditure Type Header ID'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'rate' => Yii::t('app', 'Rate'),
            'status' => Yii::t('app', 'Status'),
            'debit_ac_id' => Yii::t('app', 'Debit Ac ID'),
            'credit_ac_id' => Yii::t('app', 'Credit Ac ID'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'gl_journal_interface_cb' => Yii::t('app', 'Gl Journal Interface Cb'),
            'invoiced_cb' => Yii::t('app', 'Invoiced Cb'),
            'revene_calculated_cb' => Yii::t('app', 'Revene Calculated Cb'),
            'line_amount' => Yii::t('app', 'Line Amount'),
            'burden_amount' => Yii::t('app', 'Burden Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
