<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_moveorder_line}}".
 *
 * @property integer $inv_moveorder_line_id
 * @property integer $inv_moveorder_header_id
 * @property integer $transaction_type_id
 * @property integer $line_number
 * @property integer $from_subinventory_id
 * @property integer $from_locator_id
 * @property integer $item_id_m
 * @property string $revision_name
 * @property string $item_description
 * @property string $status
 * @property integer $uom_id
 * @property integer $to_subinventory_id
 * @property integer $to_locator_id
 * @property integer $transaction_quantity
 * @property string $received_quantity
 * @property string $description
 * @property string $reason
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $inv_lot_number_id
 * @property integer $inv_serial_number_id
 * @property integer $account_id
 * @property integer $location_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvMoveorderLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_moveorder_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_moveorder_header_id', 'transaction_type_id', 'from_subinventory_id', 'transaction_quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['inv_moveorder_header_id', 'transaction_type_id', 'line_number', 'from_subinventory_id', 'from_locator_id', 'item_id_m', 'uom_id', 'to_subinventory_id', 'to_locator_id', 'transaction_quantity', 'inv_lot_number_id', 'inv_serial_number_id', 'account_id', 'location_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['received_quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['revision_name'], 'string', 'max' => 10],
            [['item_description'], 'string', 'max' => 256],
            [['status', 'reference_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['reason', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_moveorder_line_id' => Yii::t('app', 'Inv Moveorder Line ID'),
            'inv_moveorder_header_id' => Yii::t('app', 'Inv Moveorder Header ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'from_subinventory_id' => Yii::t('app', 'From Subinventory ID'),
            'from_locator_id' => Yii::t('app', 'From Locator ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_description' => Yii::t('app', 'Item Description'),
            'status' => Yii::t('app', 'Status'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'to_subinventory_id' => Yii::t('app', 'To Subinventory ID'),
            'to_locator_id' => Yii::t('app', 'To Locator ID'),
            'transaction_quantity' => Yii::t('app', 'Transaction Quantity'),
            'received_quantity' => Yii::t('app', 'Received Quantity'),
            'description' => Yii::t('app', 'Description'),
            'reason' => Yii::t('app', 'Reason'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'inv_lot_number_id' => Yii::t('app', 'Inv Lot Number ID'),
            'inv_serial_number_id' => Yii::t('app', 'Inv Serial Number ID'),
            'account_id' => Yii::t('app', 'Account ID'),
            'location_id' => Yii::t('app', 'Location ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
