<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_expenditure_line_v}}".
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
 * @property integer $debit_ac_id
 * @property integer $credit_ac_id
 * @property string $burden_amount
 * @property integer $gl_journal_header_id
 * @property integer $gl_journal_interface_cb
 * @property string $status
 * @property string $project_number
 * @property integer $bu_org_id
 * @property string $task_number
 */
class PrjExpenditureLineV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_expenditure_line_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_expenditure_line_id', 'prj_expenditure_header_id', 'org_id', 'hr_employee_id', 'job_id', 'prj_project_header_id', 'prj_project_line_id', 'prj_nlr_header_id', 'prj_expenditure_type_header_id', 'uom_id', 'debit_ac_id', 'credit_ac_id', 'gl_journal_header_id', 'gl_journal_interface_cb', 'bu_org_id'], 'integer'],
            [['prj_expenditure_header_id', 'prj_expenditure_type_header_id', 'uom_id', 'quantity', 'bu_org_id', 'task_number'], 'required'],
            [['expenditure_date'], 'safe'],
            [['quantity', 'rate', 'burden_amount'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['status', 'task_number'], 'string', 'max' => 25],
            [['project_number'], 'string', 'max' => 50],
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
            'debit_ac_id' => Yii::t('app', 'Debit Ac ID'),
            'credit_ac_id' => Yii::t('app', 'Credit Ac ID'),
            'burden_amount' => Yii::t('app', 'Burden Amount'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'gl_journal_interface_cb' => Yii::t('app', 'Gl Journal Interface Cb'),
            'status' => Yii::t('app', 'Status'),
            'project_number' => Yii::t('app', 'Project Number'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'task_number' => Yii::t('app', 'Task Number'),
        ];
    }
}
