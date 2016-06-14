<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_move_transaction}}".
 *
 * @property string $wip_move_transaction_id
 * @property integer $wip_wo_header_id
 * @property string $wo_routing_line_id
 * @property string $wo_routing_detail_id
 * @property string $org_id
 * @property string $wo_number
 * @property integer $item_id_m
 * @property string $item_number
 * @property integer $from_routing_sequence
 * @property integer $to_routing_sequence
 * @property string $from_operation_step
 * @property string $to_operation_step
 * @property string $transaction_type
 * @property string $transaction_date
 * @property string $move_quantity
 * @property string $reason
 * @property string $reference
 * @property integer $scrap_account_id
 * @property integer $sales_order_header_id
 * @property integer $sales_order_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipMoveTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_move_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wip_wo_header_id', 'wo_routing_line_id', 'wo_routing_detail_id', 'org_id', 'item_id_m', 'from_routing_sequence', 'to_routing_sequence', 'scrap_account_id', 'sales_order_header_id', 'sales_order_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['wo_routing_line_id', 'wo_routing_detail_id', 'org_id', 'item_id_m', 'from_routing_sequence', 'to_routing_sequence', 'from_operation_step', 'to_operation_step', 'transaction_date', 'move_quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['transaction_date', 'creation_date', 'last_update_date'], 'safe'],
            [['move_quantity'], 'number'],
            [['wo_number', 'item_number', 'from_operation_step', 'to_operation_step', 'transaction_type'], 'string', 'max' => 50],
            [['reason', 'reference'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_move_transaction_id' => Yii::t('app', 'Wip Move Transaction ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'wo_routing_line_id' => Yii::t('app', 'Wo Routing Line ID'),
            'wo_routing_detail_id' => Yii::t('app', 'Wo Routing Detail ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'wo_number' => Yii::t('app', 'Wo Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_number' => Yii::t('app', 'Item Number'),
            'from_routing_sequence' => Yii::t('app', 'From Routing Sequence'),
            'to_routing_sequence' => Yii::t('app', 'To Routing Sequence'),
            'from_operation_step' => Yii::t('app', 'From Operation Step'),
            'to_operation_step' => Yii::t('app', 'To Operation Step'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'transaction_date' => Yii::t('app', 'Transaction Date'),
            'move_quantity' => Yii::t('app', 'Move Quantity'),
            'reason' => Yii::t('app', 'Reason'),
            'reference' => Yii::t('app', 'Reference'),
            'scrap_account_id' => Yii::t('app', 'Scrap Account ID'),
            'sales_order_header_id' => Yii::t('app', 'Sales Order Header ID'),
            'sales_order_line_id' => Yii::t('app', 'Sales Order Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
