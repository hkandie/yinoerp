<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_resource_list_line}}".
 *
 * @property string $prj_resource_list_line_id
 * @property integer $prj_resource_list_header_id
 * @property string $resource_type
 * @property string $effective_from
 * @property string $description
 * @property string $effective_to
 * @property integer $hr_employee_id
 * @property string $hr_job_id
 * @property string $org_id
 * @property integer $prj_expenditure_type_id
 * @property string $revenue_category
 * @property string $expenditure_category
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjResourceListLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_resource_list_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_resource_list_header_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_resource_list_header_id', 'hr_employee_id', 'prj_expenditure_type_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['org_id'], 'number'],
            [['resource_type', 'hr_job_id', 'revenue_category', 'expenditure_category'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['prj_resource_list_header_id', 'resource_type'], 'unique', 'targetAttribute' => ['prj_resource_list_header_id', 'resource_type'], 'message' => 'The combination of Prj Resource List Header ID and Resource Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_resource_list_line_id' => Yii::t('app', 'Prj Resource List Line ID'),
            'prj_resource_list_header_id' => Yii::t('app', 'Prj Resource List Header ID'),
            'resource_type' => Yii::t('app', 'Resource Type'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'description' => Yii::t('app', 'Description'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'hr_job_id' => Yii::t('app', 'Hr Job ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'prj_expenditure_type_id' => Yii::t('app', 'Prj Expenditure Type ID'),
            'revenue_category' => Yii::t('app', 'Revenue Category'),
            'expenditure_category' => Yii::t('app', 'Expenditure Category'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
