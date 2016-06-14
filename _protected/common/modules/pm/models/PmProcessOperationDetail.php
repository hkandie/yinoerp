<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_process_operation_detail}}".
 *
 * @property string $pm_process_operation_detail_id
 * @property integer $pm_process_operation_header_id
 * @property integer $pm_process_operation_line_id
 * @property integer $resource_sequence
 * @property string $description
 * @property integer $bom_resource_id
 * @property string $process_quantity
 * @property string $resource_usage
 * @property integer $uom_id
 * @property integer $process_uom_id
 * @property string $component_class
 * @property string $cost_analysis_code
 * @property string $plan_type
 * @property integer $resource_count
 * @property string $offset_interval
 * @property string $scale_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmProcessOperationDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_process_operation_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_process_operation_header_id', 'pm_process_operation_line_id', 'created_by', 'last_update_by'], 'required'],
            [['pm_process_operation_header_id', 'pm_process_operation_line_id', 'resource_sequence', 'bom_resource_id', 'uom_id', 'process_uom_id', 'resource_count', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['process_quantity', 'resource_usage', 'offset_interval'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['component_class', 'cost_analysis_code', 'plan_type', 'scale_type'], 'string', 'max' => 25],
            [['pm_process_operation_header_id', 'pm_process_operation_line_id'], 'unique', 'targetAttribute' => ['pm_process_operation_header_id', 'pm_process_operation_line_id'], 'message' => 'The combination of Pm Process Operation Header ID and Pm Process Operation Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_process_operation_detail_id' => Yii::t('app', 'Pm Process Operation Detail ID'),
            'pm_process_operation_header_id' => Yii::t('app', 'Pm Process Operation Header ID'),
            'pm_process_operation_line_id' => Yii::t('app', 'Pm Process Operation Line ID'),
            'resource_sequence' => Yii::t('app', 'Resource Sequence'),
            'description' => Yii::t('app', 'Description'),
            'bom_resource_id' => Yii::t('app', 'Bom Resource ID'),
            'process_quantity' => Yii::t('app', 'Process Quantity'),
            'resource_usage' => Yii::t('app', 'Resource Usage'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'process_uom_id' => Yii::t('app', 'Process Uom ID'),
            'component_class' => Yii::t('app', 'Component Class'),
            'cost_analysis_code' => Yii::t('app', 'Cost Analysis Code'),
            'plan_type' => Yii::t('app', 'Plan Type'),
            'resource_count' => Yii::t('app', 'Resource Count'),
            'offset_interval' => Yii::t('app', 'Offset Interval'),
            'scale_type' => Yii::t('app', 'Scale Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
