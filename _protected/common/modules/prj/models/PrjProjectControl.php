<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_control}}".
 *
 * @property integer $prj_project_control_id
 * @property integer $prj_project_header_id
 * @property integer $prj_expenditure_type_id
 * @property string $prj_expenditure_category_code
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property integer $prj_nlr_header_id
 * @property integer $hr_employee_id
 * @property integer $hr_job_id
 * @property integer $billable_cb
 * @property integer $chargeable_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_header_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['prj_project_header_id', 'prj_expenditure_type_id', 'prj_nlr_header_id', 'hr_employee_id', 'hr_job_id', 'billable_cb', 'chargeable_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['prj_expenditure_category_code'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_control_id' => Yii::t('app', 'Prj Project Control ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_expenditure_type_id' => Yii::t('app', 'Prj Expenditure Type ID'),
            'prj_expenditure_category_code' => Yii::t('app', 'Prj Expenditure Category Code'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'prj_nlr_header_id' => Yii::t('app', 'Prj Nlr Header ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'hr_job_id' => Yii::t('app', 'Hr Job ID'),
            'billable_cb' => Yii::t('app', 'Billable Cb'),
            'chargeable_cb' => Yii::t('app', 'Chargeable Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
