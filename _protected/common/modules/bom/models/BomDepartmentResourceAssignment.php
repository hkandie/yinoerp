<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_department_resource_assignment}}".
 *
 * @property integer $bom_department_resource_assignment_id
 * @property integer $bom_department_id
 * @property integer $cost_type_id
 * @property integer $resource_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $no_of_units
 * @property integer $efficiency
 * @property integer $utilization
 * @property integer $company_id
 */
class BomDepartmentResourceAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_department_resource_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_department_id', 'cost_type_id', 'resource_id', 'created_by', 'last_update_by'], 'required'],
            [['bom_department_id', 'cost_type_id', 'resource_id', 'created_by', 'last_update_by', 'no_of_units', 'efficiency', 'utilization', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_department_resource_assignment_id' => Yii::t('app', 'Bom Department Resource Assignment ID'),
            'bom_department_id' => Yii::t('app', 'Bom Department ID'),
            'cost_type_id' => Yii::t('app', 'Cost Type ID'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'no_of_units' => Yii::t('app', 'No Of Units'),
            'efficiency' => Yii::t('app', 'Efficiency'),
            'utilization' => Yii::t('app', 'Utilization'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
