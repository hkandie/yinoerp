<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_wo_routing_v}}".
 *
 * @property string $item_number
 * @property string $item_description
 * @property integer $uom_id
 * @property integer $item_id_m
 * @property string $wo_number
 * @property integer $org_id
 * @property integer $wip_accounting_group_id
 * @property string $quantity
 * @property string $completed_quantity
 * @property integer $routing_sequence
 * @property integer $department_id
 * @property integer $wip_wo_routing_detail_id
 * @property integer $wip_wo_routing_line_id
 * @property integer $wip_wo_header_id
 * @property integer $resource_sequence
 * @property integer $resource_id
 * @property string $resource_usage
 * @property string $resource_schedule
 * @property string $required_quantity
 * @property string $applied_quantity
 * @property string $charge_type
 */
class WipWoRoutingV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_wo_routing_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uom_id', 'item_id_m', 'org_id', 'wip_accounting_group_id', 'routing_sequence', 'department_id', 'wip_wo_routing_detail_id', 'wip_wo_routing_line_id', 'wip_wo_header_id', 'resource_sequence', 'resource_id'], 'integer'],
            [['quantity', 'completed_quantity', 'required_quantity', 'applied_quantity'], 'number'],
            [['wip_wo_routing_line_id', 'wip_wo_header_id', 'resource_sequence', 'resource_id'], 'required'],
            [['item_number', 'wo_number', 'charge_type'], 'string', 'max' => 50],
            [['item_description'], 'string', 'max' => 256],
            [['resource_usage', 'resource_schedule'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'wo_number' => Yii::t('app', 'Wo Number'),
            'org_id' => Yii::t('app', 'Org ID'),
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'completed_quantity' => Yii::t('app', 'Completed Quantity'),
            'routing_sequence' => Yii::t('app', 'Routing Sequence'),
            'department_id' => Yii::t('app', 'Department ID'),
            'wip_wo_routing_detail_id' => Yii::t('app', 'Wip Wo Routing Detail ID'),
            'wip_wo_routing_line_id' => Yii::t('app', 'Wip Wo Routing Line ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'resource_sequence' => Yii::t('app', 'Resource Sequence'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'resource_usage' => Yii::t('app', 'Resource Usage'),
            'resource_schedule' => Yii::t('app', 'Resource Schedule'),
            'required_quantity' => Yii::t('app', 'Required Quantity'),
            'applied_quantity' => Yii::t('app', 'Applied Quantity'),
            'charge_type' => Yii::t('app', 'Charge Type'),
        ];
    }
}
