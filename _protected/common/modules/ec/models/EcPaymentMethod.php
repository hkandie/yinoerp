<?php

namespace common\modules\ec\models;

use Yii;

/**
 * This is the model class for table "{{%ec_payment_method}}".
 *
 * @property string $ec_payment_method_id
 * @property string $type
 * @property string $payment_method_name
 * @property string $mode
 * @property string $display_name
 * @property string $user_message
 * @property string $username
 * @property string $submit_button_name
 * @property string $password
 * @property string $signature
 * @property string $doc_currency
 * @property string $return_url
 * @property string $cancel_url
 * @property string $confirm_url
 * @property integer $image_file_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class EcPaymentMethod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ec_payment_method}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_message'], 'string'],
            [['image_file_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['type', 'payment_method_name', 'display_name', 'submit_button_name', 'doc_currency', 'status'], 'string', 'max' => 25],
            [['mode', 'username', 'password', 'signature', 'return_url', 'cancel_url', 'confirm_url'], 'string', 'max' => 255],
            [['type', 'username'], 'unique', 'targetAttribute' => ['type', 'username'], 'message' => 'The combination of Type and Username has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ec_payment_method_id' => Yii::t('app', 'Ec Payment Method ID'),
            'type' => Yii::t('app', 'Type'),
            'payment_method_name' => Yii::t('app', 'Payment Method Name'),
            'mode' => Yii::t('app', 'Mode'),
            'display_name' => Yii::t('app', 'Display Name'),
            'user_message' => Yii::t('app', 'User Message'),
            'username' => Yii::t('app', 'Username'),
            'submit_button_name' => Yii::t('app', 'Submit Button Name'),
            'password' => Yii::t('app', 'Password'),
            'signature' => Yii::t('app', 'Signature'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'return_url' => Yii::t('app', 'Return Url'),
            'cancel_url' => Yii::t('app', 'Cancel Url'),
            'confirm_url' => Yii::t('app', 'Confirm Url'),
            'image_file_id' => Yii::t('app', 'Image File ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
