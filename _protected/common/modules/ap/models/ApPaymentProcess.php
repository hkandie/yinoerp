<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_payment_process".
 *
 * @property integer $ap_payment_process_id
 * @property string $payment_process
 * @property string $payment_type
 * @property integer $cash_ac_id
 * @property integer $bu_org_id
 * @property string $description
 * @property string $format_class_name
 * @property string $format_method_name
 * @property integer $bank_account_id
 * @property integer $sync_payment_number_cb
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ApPaymentProcess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_payment_process';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['payment_process', 'payment_type', 'cash_ac_id', 'bu_org_id', 'created_by', 'last_update_by'], 'required'],
            [['cash_ac_id', 'bu_org_id', 'bank_account_id', 'sync_payment_number_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['payment_process'], 'string', 'max' => 50],
            [['payment_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['format_class_name', 'format_method_name'], 'string', 'max' => 100],
            [['status'], 'string', 'max' => 20],
            [['payment_process', 'cash_ac_id'], 'unique', 'targetAttribute' => ['payment_process', 'cash_ac_id'], 'message' => 'The combination of Payment Process and Cash Ac ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ap_payment_process_id' => Yii::t('app', 'Ap Payment Process ID'),
            'payment_process' => Yii::t('app', 'Payment Process'),
            'payment_type' => Yii::t('app', 'Payment Type'),
            'cash_ac_id' => Yii::t('app', 'Cash Ac ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'description' => Yii::t('app', 'Description'),
            'format_class_name' => Yii::t('app', 'Format Class Name'),
            'format_method_name' => Yii::t('app', 'Format Method Name'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'sync_payment_number_cb' => Yii::t('app', 'Sync Payment Number Cb'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
