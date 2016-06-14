<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_transaction_all_v".
 *
 * @property integer $ap_transaction_header_id
 * @property integer $bu_org_id
 * @property string $transaction_type
 * @property string $transaction_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $hr_employee_id
 * @property string $currency
 * @property string $header_amount
 * @property string $transaction_status
 * @property integer $payment_term_id
 * @property string $paid_amount
 * @property string $payment_status
 * @property string $supplier_name
 * @property integer $supplier_number
 * @property string $supplier_site_name
 * @property integer $supplier_site_number
 * @property string $po_number
 * @property string $po_type
 * @property string $buyer
 * @property string $payment_term
 * @property string $payment_term_description
 * @property integer $ap_transaction_line_id
 * @property string $line_type
 * @property integer $line_number
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $line_description
 * @property string $inv_line_quantity
 * @property string $inv_unit_price
 * @property string $inv_line_price
 * @property integer $po_header_id
 * @property integer $po_line_id
 * @property integer $po_detail_id
 * @property integer $ref_transaction_header_id
 * @property integer $ref_transaction_line_id
 * @property string $item_number
 * @property integer $uom_id
 * @property string $item_status
 * @property integer $ap_transaction_detail_id
 * @property string $account_type
 * @property string $detail_description
 * @property string $amount
 * @property integer $detail_ac_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class ApTransactionAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_transaction_all_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ap_transaction_header_id', 'bu_org_id', 'supplier_id', 'supplier_site_id', 'payment_term_id', 'supplier_number', 'supplier_site_number', 'ap_transaction_line_id', 'line_number', 'item_id_m', 'po_header_id', 'po_line_id', 'po_detail_id', 'ref_transaction_header_id', 'ref_transaction_line_id', 'uom_id', 'ap_transaction_detail_id', 'detail_ac_id', 'created_by', 'last_update_by'], 'integer'],
            [['bu_org_id', 'transaction_type', 'supplier_id', 'supplier_site_id', 'currency', 'payment_term_id', 'created_by', 'last_update_by'], 'required'],
            [['header_amount', 'paid_amount', 'inv_line_quantity', 'inv_unit_price', 'inv_line_price', 'amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['transaction_type', 'transaction_number', 'buyer', 'payment_term', 'line_type', 'item_number'], 'string', 'max' => 50],
            [['hr_employee_id'], 'string', 'max' => 12],
            [['currency', 'payment_term_description', 'item_description', 'line_description', 'detail_description'], 'string', 'max' => 256],
            [['transaction_status', 'payment_status', 'account_type'], 'string', 'max' => 25],
            [['supplier_name', 'supplier_site_name'], 'string', 'max' => 60],
            [['po_number', 'po_type'], 'string', 'max' => 20],
            [['item_status'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_transaction_header_id' => Yii::t('app', 'Ap Transaction Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'transaction_number' => Yii::t('app', 'Transaction Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'currency' => Yii::t('app', 'Currency'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'transaction_status' => Yii::t('app', 'Transaction Status'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'paid_amount' => Yii::t('app', 'Paid Amount'),
            'payment_status' => Yii::t('app', 'Payment Status'),
            'supplier_name' => Yii::t('app', 'Supplier Name'),
            'supplier_number' => Yii::t('app', 'Supplier Number'),
            'supplier_site_name' => Yii::t('app', 'Supplier Site Name'),
            'supplier_site_number' => Yii::t('app', 'Supplier Site Number'),
            'po_number' => Yii::t('app', 'Po Number'),
            'po_type' => Yii::t('app', 'Po Type'),
            'buyer' => Yii::t('app', 'Buyer'),
            'payment_term' => Yii::t('app', 'Payment Term'),
            'payment_term_description' => Yii::t('app', 'Payment Term Description'),
            'ap_transaction_line_id' => Yii::t('app', 'Ap Transaction Line ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_description' => Yii::t('app', 'Line Description'),
            'inv_line_quantity' => Yii::t('app', 'Inv Line Quantity'),
            'inv_unit_price' => Yii::t('app', 'Inv Unit Price'),
            'inv_line_price' => Yii::t('app', 'Inv Line Price'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'ref_transaction_header_id' => Yii::t('app', 'Ref Transaction Header ID'),
            'ref_transaction_line_id' => Yii::t('app', 'Ref Transaction Line ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'item_status' => Yii::t('app', 'Item Status'),
            'ap_transaction_detail_id' => Yii::t('app', 'Ap Transaction Detail ID'),
            'account_type' => Yii::t('app', 'Account Type'),
            'detail_description' => Yii::t('app', 'Detail Description'),
            'amount' => Yii::t('app', 'Amount'),
            'detail_ac_id' => Yii::t('app', 'Detail Ac ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
