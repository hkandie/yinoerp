<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_abc_valuation_result}}".
 *
 * @property integer $inv_abc_valuation_result_id
 * @property integer $inv_abc_valuation_id
 * @property integer $seq_number
 * @property integer $item_id_m
 * @property integer $quantity
 * @property string $value
 * @property integer $cum_quantity
 * @property string $cum_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvAbcValuationResult extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_abc_valuation_result}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_abc_valuation_id', 'seq_number', 'item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['inv_abc_valuation_id', 'seq_number', 'item_id_m', 'quantity', 'cum_quantity', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['value'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['cum_value'], 'string', 'max' => 50],
            [['inv_abc_valuation_id', 'seq_number'], 'unique', 'targetAttribute' => ['inv_abc_valuation_id', 'seq_number'], 'message' => 'The combination of Inv Abc Valuation ID and Seq Number has already been taken.'],
            [['inv_abc_valuation_id', 'item_id_m'], 'unique', 'targetAttribute' => ['inv_abc_valuation_id', 'item_id_m'], 'message' => 'The combination of Inv Abc Valuation ID and Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_abc_valuation_result_id' => Yii::t('app', 'Inv Abc Valuation Result ID'),
            'inv_abc_valuation_id' => Yii::t('app', 'Inv Abc Valuation ID'),
            'seq_number' => Yii::t('app', 'Seq Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'quantity' => Yii::t('app', 'Quantity'),
            'value' => Yii::t('app', 'Value'),
            'cum_quantity' => Yii::t('app', 'Cum Quantity'),
            'cum_value' => Yii::t('app', 'Cum Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
