<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_transaction}}".
 *
 * @property integer $inv_transaction_id
 * @property integer $transaction_type_id
 * @property integer $org_id
 * @property string $status
 * @property integer $receipt_line_id
 * @property string $item_number
 * @property string $revision_name
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property integer $lot_number_id
 * @property integer $logical_transaction_cb
 * @property string $document_type
 * @property string $document_number
 * @property integer $document_id
 * @property integer $wip_wo_bom_id
 * @property integer $am_wo_bom_id
 * @property integer $po_header_id
 * @property integer $po_line_id
 * @property integer $po_detail_id
 * @property integer $sd_so_line_id
 * @property string $reason
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $description
 * @property integer $from_org_id
 * @property integer $from_subinventory_id
 * @property integer $from_locator_id
 * @property double $quantity
 * @property integer $from_account_id
 * @property integer $to_org_id
 * @property integer $to_subinventory_id
 * @property integer $to_locator_id
 * @property integer $to_account_id
 * @property integer $unit_cost
 * @property double $costed_amount
 * @property integer $gl_journal_header_id
 * @property integer $bom_config_header_id
 * @property integer $transaction_rev_enabled_cb
 * @property string $rev_start_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transaction_type_id', 'org_id', 'item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['transaction_type_id', 'org_id', 'receipt_line_id', 'item_id_m', 'uom_id', 'lot_number_id', 'logical_transaction_cb', 'document_id', 'wip_wo_bom_id', 'am_wo_bom_id', 'po_header_id', 'po_line_id', 'po_detail_id', 'sd_so_line_id', 'from_org_id', 'from_subinventory_id', 'from_locator_id', 'from_account_id', 'to_org_id', 'to_subinventory_id', 'to_locator_id', 'to_account_id', 'unit_cost', 'gl_journal_header_id', 'bom_config_header_id', 'transaction_rev_enabled_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'costed_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status', 'document_type', 'document_number', 'reason', 'rev_start_number'], 'string', 'max' => 25],
            [['item_number', 'description'], 'string', 'max' => 256],
            [['revision_name'], 'string', 'max' => 10],
            [['reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_transaction_id' => Yii::t('app', 'Inv Transaction ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'receipt_line_id' => Yii::t('app', 'Receipt Line ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'lot_number_id' => Yii::t('app', 'Lot Number ID'),
            'logical_transaction_cb' => Yii::t('app', 'Logical Transaction Cb'),
            'document_type' => Yii::t('app', 'Document Type'),
            'document_number' => Yii::t('app', 'Document Number'),
            'document_id' => Yii::t('app', 'Document ID'),
            'wip_wo_bom_id' => Yii::t('app', 'Wip Wo Bom ID'),
            'am_wo_bom_id' => Yii::t('app', 'Am Wo Bom ID'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'reason' => Yii::t('app', 'Reason'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'description' => Yii::t('app', 'Description'),
            'from_org_id' => Yii::t('app', 'From Org ID'),
            'from_subinventory_id' => Yii::t('app', 'From Subinventory ID'),
            'from_locator_id' => Yii::t('app', 'From Locator ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'from_account_id' => Yii::t('app', 'From Account ID'),
            'to_org_id' => Yii::t('app', 'To Org ID'),
            'to_subinventory_id' => Yii::t('app', 'To Subinventory ID'),
            'to_locator_id' => Yii::t('app', 'To Locator ID'),
            'to_account_id' => Yii::t('app', 'To Account ID'),
            'unit_cost' => Yii::t('app', 'Unit Cost'),
            'costed_amount' => Yii::t('app', 'Costed Amount'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'bom_config_header_id' => Yii::t('app', 'Bom Config Header ID'),
            'transaction_rev_enabled_cb' => Yii::t('app', 'Transaction Rev Enabled Cb'),
            'rev_start_number' => Yii::t('app', 'Rev Start Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
