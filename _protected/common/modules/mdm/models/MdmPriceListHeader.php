<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_price_list_header}}".
 *
 * @property integer $mdm_price_list_header_id
 * @property string $price_list
 * @property string $module_name
 * @property string $currency_code
 * @property string $description
 * @property string $status
 * @property integer $allow_mutli_currency_cb
 * @property string $currency_conversion_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class MdmPriceListHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_price_list_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price_list', 'module_name', 'currency_code', 'created_by', 'last_update_by'], 'required'],
            [['module_name', 'status'], 'string'],
            [['allow_mutli_currency_cb', 'created_by', 'last_update_by'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['price_list', 'currency_code', 'currency_conversion_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['price_list'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_price_list_header_id' => Yii::t('app', 'Mdm Price List Header ID'),
            'price_list' => Yii::t('app', 'Price List'),
            'module_name' => Yii::t('app', 'Module Name'),
            'currency_code' => Yii::t('app', 'Currency Code'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'allow_mutli_currency_cb' => Yii::t('app', 'Allow Mutli Currency Cb'),
            'currency_conversion_type' => Yii::t('app', 'Currency Conversion Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
