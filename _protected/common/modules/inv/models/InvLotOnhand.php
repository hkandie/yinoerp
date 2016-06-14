<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_lot_onhand}}".
 *
 * @property integer $inv_lot_onhand_id
 * @property integer $onhand_id
 * @property integer $inv_lot_number_id
 * @property string $lot_quantity
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvLotOnhand extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_lot_onhand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['onhand_id', 'inv_lot_number_id', 'lot_quantity', 'created_by', 'last_update_by'], 'required'],
            [['onhand_id', 'inv_lot_number_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['lot_quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['onhand_id', 'inv_lot_number_id'], 'unique', 'targetAttribute' => ['onhand_id', 'inv_lot_number_id'], 'message' => 'The combination of Onhand ID and Inv Lot Number ID has already been taken.'],
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
            'inv_lot_number_id' => Yii::t('app', 'Inv Lot Number ID'),
            'lot_quantity' => Yii::t('app', 'Lot Quantity'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
