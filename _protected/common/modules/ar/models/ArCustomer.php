<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_customer}}".
 *
 * @property integer $ar_customer_id
 * @property string $customer_number
 * @property string $customer_name
 * @property string $customer_relationship
 * @property string $alt_name
 * @property integer $supplier_id
 * @property string $customer_type
 * @property string $customer_category
 * @property string $tax_country
 * @property string $tax_reg_no
 * @property string $tax_payer_id
 * @property integer $ship_to_id
 * @property integer $bill_to_id
 * @property integer $customer_contact_id
 * @property integer $customer_credit_class
 * @property string $profile_name
 * @property string $status
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_customer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['customer_number', 'customer_name', 'created_by', 'last_update_by'], 'required'],
            [['supplier_id', 'ship_to_id', 'bill_to_id', 'customer_contact_id', 'customer_credit_class', 'rev_enabled_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['customer_number', 'customer_relationship', 'customer_category', 'profile_name'], 'string', 'max' => 25],
            [['customer_name'], 'string', 'max' => 60],
            [['alt_name', 'customer_type', 'status'], 'string', 'max' => 50],
            [['tax_country', 'tax_reg_no', 'tax_payer_id'], 'string', 'max' => 40],
            [['customer_number'], 'unique'],
            [['customer_name'], 'unique'],
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
            'customer_relationship' => Yii::t('app', 'Customer Relationship'),
            'alt_name' => Yii::t('app', 'Alt Name'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'customer_type' => Yii::t('app', 'Customer Type'),
            'customer_category' => Yii::t('app', 'Customer Category'),
            'tax_country' => Yii::t('app', 'Tax Country'),
            'tax_reg_no' => Yii::t('app', 'Tax Reg No'),
            'tax_payer_id' => Yii::t('app', 'Tax Payer ID'),
            'ship_to_id' => Yii::t('app', 'Ship To ID'),
            'bill_to_id' => Yii::t('app', 'Bill To ID'),
            'customer_contact_id' => Yii::t('app', 'Customer Contact ID'),
            'customer_credit_class' => Yii::t('app', 'Customer Credit Class'),
            'profile_name' => Yii::t('app', 'Profile Name'),
            'status' => Yii::t('app', 'Status'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
