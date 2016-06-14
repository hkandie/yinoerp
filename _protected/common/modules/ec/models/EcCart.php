<?php

namespace common\modules\ec\models;

use Yii;

/**
 * This is the model class for table "{{%ec_cart}}".
 *
 * @property string $ec_cart_id
 * @property integer $ec_product_id
 * @property string $quantity
 * @property string $price
 * @property integer $user_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class EcCart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ec_cart}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ec_product_id', 'user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'price'], 'number'],
            [['user_id', 'created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['ec_product_id', 'user_id'], 'unique', 'targetAttribute' => ['ec_product_id', 'user_id'], 'message' => 'The combination of Ec Product ID and User ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ec_cart_id' => Yii::t('app', 'Ec Cart ID'),
            'ec_product_id' => Yii::t('app', 'Ec Product ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'price' => Yii::t('app', 'Price'),
            'user_id' => Yii::t('app', 'User ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
