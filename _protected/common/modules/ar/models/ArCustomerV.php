<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_customer_v}}".
 *
 * @property integer $ar_customer_id
 * @property string $customer_number
 * @property string $customer_name
 * @property integer $ar_customer_site_id
 * @property integer $customer_site_number
 * @property string $customer_site_name
 * @property string $status
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $site_tax_country
 * @property string $site_tax_reg_no
 * @property string $site_status
 * @property string $currency
 * @property integer $payment_term_id
 */
class ArCustomerV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_customer_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_customer_id', 'ar_customer_site_id', 'customer_site_number', 'last_update_by', 'payment_term_id'], 'integer'],
            [['customer_number', 'customer_name', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['customer_number'], 'string', 'max' => 25],
            [['customer_name', 'customer_site_name'], 'string', 'max' => 60],
            [['status'], 'string', 'max' => 50],
            [['site_tax_country'], 'string', 'max' => 256],
            [['site_tax_reg_no'], 'string', 'max' => 100],
            [['site_status', 'currency'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'customer_number' => Yii::t('app', 'Customer Number'),
            'customer_name' => Yii::t('app', 'Customer Name'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'customer_site_number' => Yii::t('app', 'Customer Site Number'),
            'customer_site_name' => Yii::t('app', 'Customer Site Name'),
            'status' => Yii::t('app', 'Status'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'site_tax_country' => Yii::t('app', 'Site Tax Country'),
            'site_tax_reg_no' => Yii::t('app', 'Site Tax Reg No'),
            'site_status' => Yii::t('app', 'Site Status'),
            'currency' => Yii::t('app', 'Currency'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
        ];
    }
}
