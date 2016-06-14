<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_routing_detail}}".
 *
 * @property integer $bom_routing_detail_id
 * @property integer $bom_routing_line_id
 * @property integer $bom_routing_header_id
 * @property integer $bom_standard_operation_id
 * @property integer $resource_sequence
 * @property string $charge_basis
 * @property integer $resource_id
 * @property string $resource_usage
 * @property string $resource_schedule
 * @property integer $assigned_units
 * @property integer $twenty_four_hr_cb
 * @property string $charge_type
 * @property integer $standard_rate_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomRoutingDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_routing_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_routing_line_id', 'bom_routing_header_id', 'bom_standard_operation_id', 'resource_sequence', 'resource_id', 'assigned_units', 'twenty_four_hr_cb', 'standard_rate_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['resource_usage'], 'number'],
            [['created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['charge_basis', 'resource_schedule', 'charge_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_routing_detail_id' => Yii::t('app', 'Bom Routing Detail ID'),
            'bom_routing_line_id' => Yii::t('app', 'Bom Routing Line ID'),
            'bom_routing_header_id' => Yii::t('app', 'Bom Routing Header ID'),
            'bom_standard_operation_id' => Yii::t('app', 'Bom Standard Operation ID'),
            'resource_sequence' => Yii::t('app', 'Resource Sequence'),
            'charge_basis' => Yii::t('app', 'Charge Basis'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'resource_usage' => Yii::t('app', 'Resource Usage'),
            'resource_schedule' => Yii::t('app', 'Resource Schedule'),
            'assigned_units' => Yii::t('app', 'Assigned Units'),
            'twenty_four_hr_cb' => Yii::t('app', 'Twenty Four Hr Cb'),
            'charge_type' => Yii::t('app', 'Charge Type'),
            'standard_rate_cb' => Yii::t('app', 'Standard Rate Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
