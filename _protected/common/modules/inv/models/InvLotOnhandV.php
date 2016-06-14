<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_lot_onhand_v}}".
 *
 * @property integer $inv_lot_onhand_id
 * @property integer $onhand_id
 * @property integer $lot_inv_lot_number_id
 * @property string $lot_quantity
 * @property string $lot_number
 * @property integer $inv_lot_number_id
 * @property string $item_number
 * @property string $item_description
 * @property integer $org_id
 * @property integer $item_id_m
 * @property string $subinventory
 * @property string $locator
 * @property integer $uom_id
 * @property double $onhand
 * @property integer $subinventory_id
 * @property integer $locator_id
 */
class InvLotOnhandV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_lot_onhand_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_lot_onhand_id', 'onhand_id', 'lot_inv_lot_number_id', 'inv_lot_number_id', 'org_id', 'item_id_m', 'uom_id', 'subinventory_id', 'locator_id'], 'integer'],
            [['onhand_id', 'lot_inv_lot_number_id', 'lot_quantity'], 'required'],
            [['lot_quantity', 'onhand'], 'number'],
            [['lot_number', 'item_number'], 'string', 'max' => 50],
            [['item_description', 'locator'], 'string', 'max' => 256],
            [['subinventory'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_lot_onhand_id' => Yii::t('app', 'Inv Lot Onhand ID'),
            'onhand_id' => Yii::t('app', 'Onhand ID'),
            'lot_inv_lot_number_id' => Yii::t('app', 'Lot Inv Lot Number ID'),
            'lot_quantity' => Yii::t('app', 'Lot Quantity'),
            'lot_number' => Yii::t('app', 'Lot Number'),
            'inv_lot_number_id' => Yii::t('app', 'Inv Lot Number ID'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'subinventory' => Yii::t('app', 'Subinventory'),
            'locator' => Yii::t('app', 'Locator'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'onhand' => Yii::t('app', 'Onhand'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
        ];
    }
}
