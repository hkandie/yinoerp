<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_subscription_line}}".
 *
 * @property integer $hd_subscription_line_id
 * @property integer $hd_subscription_header_id
 * @property integer $line_number
 * @property integer $shipping_org_id
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $line_quantity
 * @property string $invoiced_quantity
 * @property integer $price_list_header_id
 * @property string $price_date
 * @property string $unit_price
 * @property string $line_price
 * @property string $tax_amount
 * @property string $gl_line_price
 * @property string $gl_tax_amount
 * @property integer $tax_code_id
 * @property string $line_status
 * @property string $line_type
 * @property integer $uom_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSubscriptionLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_subscription_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_subscription_header_id', 'line_number', 'item_description', 'line_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_subscription_header_id', 'line_number', 'shipping_org_id', 'item_id_m', 'price_list_header_id', 'tax_code_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['line_quantity', 'invoiced_quantity', 'unit_price', 'line_price', 'tax_amount', 'gl_line_price', 'gl_tax_amount'], 'number'],
            [['price_date', 'creation_date', 'last_update_date'], 'safe'],
            [['item_description'], 'string', 'max' => 256],
            [['line_status', 'line_type'], 'string', 'max' => 25],
            [['hd_subscription_header_id', 'item_id_m', 'line_type'], 'unique', 'targetAttribute' => ['hd_subscription_header_id', 'item_id_m', 'line_type'], 'message' => 'The combination of Hd Subscription Header ID, Item Id M and Line Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_subscription_line_id' => Yii::t('app', 'Hd Subscription Line ID'),
            'hd_subscription_header_id' => Yii::t('app', 'Hd Subscription Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'shipping_org_id' => Yii::t('app', 'Shipping Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'line_quantity' => Yii::t('app', 'Line Quantity'),
            'invoiced_quantity' => Yii::t('app', 'Invoiced Quantity'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'gl_line_price' => Yii::t('app', 'Gl Line Price'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'line_status' => Yii::t('app', 'Line Status'),
            'line_type' => Yii::t('app', 'Line Type'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
