<?php

namespace common\modules\ec\models;

use Yii;

/**
 * This is the model class for table "{{%ec_product}}".
 *
 * @property string $ec_product_id
 * @property integer $item_id_m
 * @property integer $org_id
 * @property string $product_name
 * @property string $product_description
 * @property string $new_date_trom
 * @property string $new_date_to
 * @property string $status
 * @property string $visibility
 * @property integer $tax_code_id
 * @property string $meta_title
 * @property string $meta_keywords
 * @property string $meta_description
 * @property integer $price_list_id
 * @property string $list_price
 * @property integer $no_of_view
 * @property string $sales_price
 * @property string $sp_from_date
 * @property string $sp_to_date
 * @property integer $featured_product_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class EcProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ec_product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'tax_code_id', 'price_list_id', 'no_of_view', 'featured_product_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['product_description'], 'string'],
            [['new_date_trom', 'new_date_to', 'sp_from_date', 'sp_to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['list_price', 'sales_price'], 'number'],
            [['created_by', 'last_update_by'], 'required'],
            [['product_name', 'meta_title', 'meta_keywords', 'meta_description'], 'string', 'max' => 255],
            [['status', 'visibility'], 'string', 'max' => 25],
            [['item_id_m', 'product_name'], 'unique', 'targetAttribute' => ['item_id_m', 'product_name'], 'message' => 'The combination of Item Id M and Product Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ec_product_id' => Yii::t('app', 'Ec Product ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'org_id' => Yii::t('app', 'Org ID'),
            'product_name' => Yii::t('app', 'Product Name'),
            'product_description' => Yii::t('app', 'Product Description'),
            'new_date_trom' => Yii::t('app', 'New Date Trom'),
            'new_date_to' => Yii::t('app', 'New Date To'),
            'status' => Yii::t('app', 'Status'),
            'visibility' => Yii::t('app', 'Visibility'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'meta_title' => Yii::t('app', 'Meta Title'),
            'meta_keywords' => Yii::t('app', 'Meta Keywords'),
            'meta_description' => Yii::t('app', 'Meta Description'),
            'price_list_id' => Yii::t('app', 'Price List ID'),
            'list_price' => Yii::t('app', 'List Price'),
            'no_of_view' => Yii::t('app', 'No Of View'),
            'sales_price' => Yii::t('app', 'Sales Price'),
            'sp_from_date' => Yii::t('app', 'Sp From Date'),
            'sp_to_date' => Yii::t('app', 'Sp To Date'),
            'featured_product_cb' => Yii::t('app', 'Featured Product Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
