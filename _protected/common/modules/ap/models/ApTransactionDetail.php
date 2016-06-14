<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_transaction_detail".
 *
 * @property integer $ap_transaction_detail_id
 * @property integer $ap_transaction_line_id
 * @property integer $ap_transaction_header_id
 * @property integer $detail_number
 * @property string $account_type
 * @property string $amount
 * @property string $gl_amount
 * @property integer $detail_ac_id
 * @property integer $journal_created_cb
 * @property string $status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property string $description
 * @property integer $po_header_id
 * @property integer $po_line_id
 * @property integer $po_detail_id
 * @property integer $period_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ApTransactionDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_transaction_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ap_transaction_line_id', 'ap_transaction_header_id', 'detail_number', 'account_type', 'gl_amount', 'created_by', 'last_update_by'], 'required'],
            [['ap_transaction_line_id', 'ap_transaction_header_id', 'detail_number', 'detail_ac_id', 'journal_created_cb', 'po_header_id', 'po_line_id', 'po_detail_id', 'period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount', 'gl_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['account_type', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_transaction_detail_id' => Yii::t('app', 'Ap Transaction Detail ID'),
            'ap_transaction_line_id' => Yii::t('app', 'Ap Transaction Line ID'),
            'ap_transaction_header_id' => Yii::t('app', 'Ap Transaction Header ID'),
            'detail_number' => Yii::t('app', 'Detail Number'),
            'account_type' => Yii::t('app', 'Account Type'),
            'amount' => Yii::t('app', 'Amount'),
            'gl_amount' => Yii::t('app', 'Gl Amount'),
            'detail_ac_id' => Yii::t('app', 'Detail Ac ID'),
            'journal_created_cb' => Yii::t('app', 'Journal Created Cb'),
            'status' => Yii::t('app', 'Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'description' => Yii::t('app', 'Description'),
            'po_header_id' => Yii::t('app', 'Po Header ID'),
            'po_line_id' => Yii::t('app', 'Po Line ID'),
            'po_detail_id' => Yii::t('app', 'Po Detail ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
