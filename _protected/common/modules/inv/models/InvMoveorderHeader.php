<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_moveorder_header}}".
 *
 * @property integer $inv_moveorder_header_id
 * @property string $order_number
 * @property string $comment
 * @property integer $org_id
 * @property integer $transaction_type_id
 * @property string $status
 * @property integer $transfer_to_gl
 * @property string $transaction_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvMoveorderHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_moveorder_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['org_id', 'transaction_type_id', 'transfer_to_gl', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['transaction_date', 'creation_date', 'last_update_date'], 'safe'],
            [['order_number', 'status'], 'string', 'max' => 25],
            [['comment'], 'string', 'max' => 256],
            [['order_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_moveorder_header_id' => Yii::t('app', 'Inv Moveorder Header ID'),
            'order_number' => Yii::t('app', 'Order Number'),
            'comment' => Yii::t('app', 'Comment'),
            'org_id' => Yii::t('app', 'Org ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'status' => Yii::t('app', 'Status'),
            'transfer_to_gl' => Yii::t('app', 'Transfer To Gl'),
            'transaction_date' => Yii::t('app', 'Transaction Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
