<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_interorg_receipt_header}}".
 *
 * @property integer $inv_receipt_header_id
 * @property string $receipt_number
 * @property integer $org_id
 * @property integer $transaction_type_id
 * @property string $receipt_date
 * @property string $received_by
 * @property string $carrier
 * @property string $vechile_number
 * @property string $comment
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class InvInterorgReceiptHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_interorg_receipt_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_receipt_header_id', 'org_id', 'transaction_type_id', 'ef_id', 'created_by', 'last_update_by'], 'integer'],
            [['org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['receipt_date', 'creation_date', 'last_update_date'], 'safe'],
            [['receipt_number'], 'string', 'max' => 50],
            [['received_by', 'carrier', 'vechile_number', 'comment'], 'string', 'max' => 256],
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
            'org_id' => Yii::t('app', 'Org ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'receipt_date' => Yii::t('app', 'Receipt Date'),
            'received_by' => Yii::t('app', 'Received By'),
            'carrier' => Yii::t('app', 'Carrier'),
            'vechile_number' => Yii::t('app', 'Vechile Number'),
            'comment' => Yii::t('app', 'Comment'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
