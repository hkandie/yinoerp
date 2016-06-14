<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_receipt_header}}".
 *
 * @property integer $inv_receipt_header_id
 * @property string $receipt_number
 * @property string $comment
 * @property integer $org_id
 * @property integer $transaction_type_id
 * @property string $receipt_date
 * @property string $status
 * @property integer $transfer_to_gl
 * @property string $received_by
 * @property string $carrier
 * @property string $vechile_number
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvReceiptHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_receipt_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['org_id', 'transaction_type_id', 'transfer_to_gl', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['receipt_date', 'creation_date', 'last_update_date'], 'safe'],
            [['receipt_number'], 'string', 'max' => 50],
            [['comment', 'received_by', 'carrier', 'vechile_number'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_receipt_header_id' => Yii::t('app', 'Inv Receipt Header ID'),
            'receipt_number' => Yii::t('app', 'Receipt Number'),
            'comment' => Yii::t('app', 'Comment'),
            'org_id' => Yii::t('app', 'Org ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'receipt_date' => Yii::t('app', 'Receipt Date'),
            'status' => Yii::t('app', 'Status'),
            'transfer_to_gl' => Yii::t('app', 'Transfer To Gl'),
            'received_by' => Yii::t('app', 'Received By'),
            'carrier' => Yii::t('app', 'Carrier'),
            'vechile_number' => Yii::t('app', 'Vechile Number'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
