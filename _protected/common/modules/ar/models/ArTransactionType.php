<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_transaction_type}}".
 *
 * @property integer $ar_transaction_type_id
 * @property string $ar_transaction_type
 * @property string $transaction_class
 * @property integer $bu_org_id
 * @property integer $legal_org_id
 * @property integer $invoice_type_id
 * @property string $description
 * @property integer $cm_type_id
 * @property integer $payment_term_id
 * @property string $status
 * @property integer $receivable_ac_id
 * @property integer $revenue_ac_id
 * @property integer $freight_ac_id
 * @property integer $tax_ac_id
 * @property integer $clearing_ac_id
 * @property integer $unbilled_receivable_ac_id
 * @property integer $unearned_revenue_ac_id
 * @property integer $br_receivable_ac_id
 * @property integer $br_offset_ac_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class ArTransactionType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_transaction_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_transaction_type', 'bu_org_id', 'legal_org_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'legal_org_id', 'invoice_type_id', 'cm_type_id', 'payment_term_id', 'receivable_ac_id', 'revenue_ac_id', 'freight_ac_id', 'tax_ac_id', 'clearing_ac_id', 'unbilled_receivable_ac_id', 'unearned_revenue_ac_id', 'br_receivable_ac_id', 'br_offset_ac_id', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['ar_transaction_type'], 'string', 'max' => 50],
            [['transaction_class'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['ar_transaction_type', 'transaction_class'], 'unique', 'targetAttribute' => ['ar_transaction_type', 'transaction_class'], 'message' => 'The combination of Ar Transaction Type and Transaction Class has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_transaction_type_id' => Yii::t('app', 'Ar Transaction Type ID'),
            'ar_transaction_type' => Yii::t('app', 'Ar Transaction Type'),
            'transaction_class' => Yii::t('app', 'Transaction Class'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'legal_org_id' => Yii::t('app', 'Legal Org ID'),
            'invoice_type_id' => Yii::t('app', 'Invoice Type ID'),
            'description' => Yii::t('app', 'Description'),
            'cm_type_id' => Yii::t('app', 'Cm Type ID'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'status' => Yii::t('app', 'Status'),
            'receivable_ac_id' => Yii::t('app', 'Receivable Ac ID'),
            'revenue_ac_id' => Yii::t('app', 'Revenue Ac ID'),
            'freight_ac_id' => Yii::t('app', 'Freight Ac ID'),
            'tax_ac_id' => Yii::t('app', 'Tax Ac ID'),
            'clearing_ac_id' => Yii::t('app', 'Clearing Ac ID'),
            'unbilled_receivable_ac_id' => Yii::t('app', 'Unbilled Receivable Ac ID'),
            'unearned_revenue_ac_id' => Yii::t('app', 'Unearned Revenue Ac ID'),
            'br_receivable_ac_id' => Yii::t('app', 'Br Receivable Ac ID'),
            'br_offset_ac_id' => Yii::t('app', 'Br Offset Ac ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
