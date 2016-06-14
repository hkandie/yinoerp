<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_requisition_header}}".
 *
 * @property integer $po_requisition_header_id
 * @property integer $bu_org_id
 * @property string $po_requisition_type
 * @property string $po_requisition_number
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $buyer
 * @property string $description
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property string $header_amount
 * @property string $currency
 * @property integer $payment_term_id
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $released_amount
 * @property integer $ef_id
 * @property string $requisition_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $company_id
 */
class PoRequisitionHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_requisition_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'po_requisition_type', 'requisition_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'supplier_id', 'supplier_site_id', 'ship_to_id', 'bill_to_id', 'payment_term_id', 'ef_id', 'created_by', 'last_update_by', 'rev_enabled_cb', 'rev_number', 'company_id'], 'integer'],
            [['header_amount', 'exchange_rate', 'released_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['po_requisition_type', 'po_requisition_number', 'exchange_rate_type', 'requisition_status'], 'string', 'max' => 50],
            [['buyer', 'description', 'currency'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_requisition_header_id' => Yii::t('app', 'Po Requisition Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'po_requisition_type' => Yii::t('app', 'Po Requisition Type'),
            'po_requisition_number' => Yii::t('app', 'Po Requisition Number'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'buyer' => Yii::t('app', 'Buyer'),
            'description' => Yii::t('app', 'Description'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'released_amount' => Yii::t('app', 'Released Amount'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'requisition_status' => Yii::t('app', 'Requisition Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
