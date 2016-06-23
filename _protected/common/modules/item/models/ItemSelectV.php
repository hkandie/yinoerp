<?php

namespace common\modules\item\models;

use Yii;

/**
 * This is the model class for table "item_select_v".
 *
 * @property string $item_number
 * @property string $item_description
 * @property string $product_line
 * @property integer $item_id_m
 */
class ItemSelectV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_select_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_number'], 'required'],
            [['item_id_m'], 'integer'],
            [['item_number'], 'string', 'max' => 50],
            [['item_description'], 'string', 'max' => 256],
            [['product_line'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'product_line' => Yii::t('app', 'Product Line'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
        ];
    }
}
