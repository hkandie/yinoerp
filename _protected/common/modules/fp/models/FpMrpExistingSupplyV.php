<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_existing_supply_v}}".
 *
 * @property integer $item_id_m
 * @property string $document_type
 * @property double $quantity
 * @property string $supply_date
 * @property integer $document_id
 */
class FpMrpExistingSupplyV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_existing_supply_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'document_id'], 'integer'],
            [['quantity'], 'number'],
            [['supply_date'], 'safe'],
            [['document_type'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'document_type' => Yii::t('app', 'Document Type'),
            'quantity' => Yii::t('app', 'Quantity'),
            'supply_date' => Yii::t('app', 'Supply Date'),
            'document_id' => Yii::t('app', 'Document ID'),
        ];
    }
}
