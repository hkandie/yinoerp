<?php

namespace common\modules\ec\models;

use Yii;

/**
 * This is the model class for table "{{%ec_paid_order}}".
 *
 * @property string $ec_paid_order_id
 * @property integer $payment_method_id
 * @property string $total_amount
 * @property string $doc_currency
 * @property string $service_provider
 * @property string $sp_transaction_id
 * @property integer $user_id
 * @property string $email
 * @property string $confirm_order_details
 * @property string $sp_return_data
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class EcPaidOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ec_paid_order}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_method_id', 'user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['total_amount'], 'number'],
            [['user_id', 'confirm_order_details', 'created_by', 'last_update_by'], 'required'],
            [['confirm_order_details', 'sp_return_data'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['doc_currency', 'status'], 'string', 'max' => 25],
            [['service_provider'], 'string', 'max' => 50],
            [['sp_transaction_id'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100],
            [['service_provider', 'sp_transaction_id'], 'unique', 'targetAttribute' => ['service_provider', 'sp_transaction_id'], 'message' => 'The combination of Service Provider and Sp Transaction ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ec_paid_order_id' => Yii::t('app', 'Ec Paid Order ID'),
            'payment_method_id' => Yii::t('app', 'Payment Method ID'),
            'total_amount' => Yii::t('app', 'Total Amount'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'service_provider' => Yii::t('app', 'Service Provider'),
            'sp_transaction_id' => Yii::t('app', 'Sp Transaction ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'email' => Yii::t('app', 'Email'),
            'confirm_order_details' => Yii::t('app', 'Confirm Order Details'),
            'sp_return_data' => Yii::t('app', 'Sp Return Data'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
