<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_standard_operation_resource_assignment}}".
 *
 * @property integer $bom_standard_operation_resource_assignment_id
 * @property integer $resource_sequence
 * @property integer $bom_standard_operation_id
 * @property integer $charge_basis
 * @property integer $resource_id
 * @property string $resource_usage
 * @property string $resource_schedule
 * @property integer $assigned_units
 * @property integer $twenty_four_hr_cb
 * @property integer $standard_rate_cb
 * @property string $charge_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomStandardOperationResourceAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_standard_operation_resource_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource_sequence', 'bom_standard_operation_id', 'charge_basis', 'resource_id', 'assigned_units', 'twenty_four_hr_cb', 'standard_rate_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['charge_basis', 'resource_id', 'created_by', 'last_update_by'], 'required'],
            [['resource_usage'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['resource_schedule'], 'string', 'max' => 25],
            [['charge_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_standard_operation_resource_assignment_id' => Yii::t('app', 'Bom Standard Operation Resource Assignment ID'),
            'resource_sequence' => Yii::t('app', 'Resource Sequence'),
            'bom_standard_operation_id' => Yii::t('app', 'Bom Standard Operation ID'),
            'charge_basis' => Yii::t('app', 'Charge Basis'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'resource_usage' => Yii::t('app', 'Resource Usage'),
            'resource_schedule' => Yii::t('app', 'Resource Schedule'),
            'assigned_units' => Yii::t('app', 'Assigned Units'),
            'twenty_four_hr_cb' => Yii::t('app', 'Twenty Four Hr Cb'),
            'standard_rate_cb' => Yii::t('app', 'Standard Rate Cb'),
            'charge_type' => Yii::t('app', 'Charge Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
