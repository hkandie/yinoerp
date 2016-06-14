<?php

namespace common\modules\ec\models;

use Yii;

/**
 * This is the model class for table "{{%ec_control}}".
 *
 * @property string $default_home_page
 * @property string $site_name
 * @property integer $price_round
 * @property integer $tax_code_id
 * @property integer $shipping_org_id
 * @property integer $bu_org_id
 * @property integer $sales_document_type
 * @property string $line_type
 * @property string $order_source_type
 * @property integer $payment_term_id
 * @property string $exchange_rate_type
 * @property string $email_template
 * @property integer $send_email_cb
 * @property string $email_cc
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class EcControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ec_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['default_home_page', 'site_name', 'shipping_org_id', 'bu_org_id', 'sales_document_type', 'last_update_by'], 'required'],
            [['price_round', 'tax_code_id', 'shipping_org_id', 'bu_org_id', 'sales_document_type', 'payment_term_id', 'send_email_cb', 'last_update_by', 'company_id'], 'integer'],
            [['email_template'], 'string'],
            [['last_update_date'], 'safe'],
            [['default_home_page'], 'string', 'max' => 50],
            [['site_name'], 'string', 'max' => 256],
            [['line_type', 'order_source_type', 'exchange_rate_type'], 'string', 'max' => 25],
            [['email_cc'], 'string', 'max' => 255],
            [['site_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'default_home_page' => Yii::t('app', 'Default Home Page'),
            'site_name' => Yii::t('app', 'Site Name'),
            'price_round' => Yii::t('app', 'Price Round'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'sales_document_type' => Yii::t('app', 'Sales Document Type'),
            'line_type' => Yii::t('app', 'Line Type'),
            'order_source_type' => Yii::t('app', 'Order Source Type'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'email_template' => Yii::t('app', 'Email Template'),
            'send_email_cb' => Yii::t('app', 'Send Email Cb'),
            'email_cc' => Yii::t('app', 'Email Cc'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
