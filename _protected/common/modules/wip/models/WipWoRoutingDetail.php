<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_wo_routing_detail}}".
 *
 * @property integer $wip_wo_routing_detail_id
 * @property integer $wip_wo_routing_line_id
 * @property integer $wip_wo_header_id
 * @property integer $resource_sequence
 * @property string $charge_basis
 * @property integer $resource_id
 * @property string $resource_usage
 * @property string $resource_schedule
 * @property integer $assigned_units
 * @property string $required_quantity
 * @property string $applied_quantity
 * @property string $charge_type
 * @property integer $standard_rate_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipWoRoutingDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_wo_routing_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wip_wo_routing_line_id', 'wip_wo_header_id', 'resource_sequence', 'resource_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['wip_wo_routing_line_id', 'wip_wo_header_id', 'resource_sequence', 'resource_id', 'assigned_units', 'standard_rate_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['required_quantity', 'applied_quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['charge_basis', 'charge_type'], 'string', 'max' => 50],
            [['resource_usage', 'resource_schedule'], 'string', 'max' => 20],
            [['wip_wo_routing_line_id', 'resource_sequence'], 'unique', 'targetAttribute' => ['wip_wo_routing_line_id', 'resource_sequence'], 'message' => 'The combination of Wip Wo Routing Line ID and Resource Sequence has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_wo_routing_detail_id' => Yii::t('app', 'Wip Wo Routing Detail ID'),
            'wip_wo_routing_line_id' => Yii::t('app', 'Wip Wo Routing Line ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'resource_sequence' => Yii::t('app', 'Resource Sequence'),
            'charge_basis' => Yii::t('app', 'Charge Basis'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'resource_usage' => Yii::t('app', 'Resource Usage'),
            'resource_schedule' => Yii::t('app', 'Resource Schedule'),
            'assigned_units' => Yii::t('app', 'Assigned Units'),
            'required_quantity' => Yii::t('app', 'Required Quantity'),
            'applied_quantity' => Yii::t('app', 'Applied Quantity'),
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
