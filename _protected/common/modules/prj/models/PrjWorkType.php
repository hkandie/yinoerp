<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_work_type}}".
 *
 * @property string $prj_work_type_id
 * @property string $work_type
 * @property string $description
 * @property integer $billable_cb
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $capitalizable_cb
 * @property string $tp_amount_type
 * @property integer $training_cb
 * @property integer $shadow_resource_cb
 * @property string $utilization_type
 * @property string $utilization_percentage
 * @property integer $unassigned_cb
 * @property integer $non_worked_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjWorkType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_work_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_type', 'created_by', 'last_update_by'], 'required'],
            [['billable_cb', 'capitalizable_cb', 'training_cb', 'shadow_resource_cb', 'unassigned_cb', 'non_worked_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['utilization_percentage'], 'number'],
            [['work_type', 'tp_amount_type', 'utilization_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['work_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_work_type_id' => Yii::t('app', 'Prj Work Type ID'),
            'work_type' => Yii::t('app', 'Work Type'),
            'description' => Yii::t('app', 'Description'),
            'billable_cb' => Yii::t('app', 'Billable Cb'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'capitalizable_cb' => Yii::t('app', 'Capitalizable Cb'),
            'tp_amount_type' => Yii::t('app', 'Tp Amount Type'),
            'training_cb' => Yii::t('app', 'Training Cb'),
            'shadow_resource_cb' => Yii::t('app', 'Shadow Resource Cb'),
            'utilization_type' => Yii::t('app', 'Utilization Type'),
            'utilization_percentage' => Yii::t('app', 'Utilization Percentage'),
            'unassigned_cb' => Yii::t('app', 'Unassigned Cb'),
            'non_worked_cb' => Yii::t('app', 'Non Worked Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
