<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_over_consumption_v}}".
 *
 * @property string $forecast_group
 * @property string $org
 * @property string $so_number
 * @property integer $line_number
 * @property string $item_number
 * @property string $uom_name
 * @property string $item_description
 * @property string $schedule_ship_date
 * @property string $quantity
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property integer $fp_forecast_consumption_id
 * @property integer $sd_so_line_id
 * @property integer $sd_so_header_id
 */
class FpForecastOverConsumptionV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_over_consumption_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['forecast_group', 'org', 'line_number', 'item_number', 'uom_id', 'sd_so_line_id', 'sd_so_header_id'], 'required'],
            [['line_number', 'item_id_m', 'uom_id', 'fp_forecast_consumption_id', 'sd_so_line_id', 'sd_so_header_id'], 'integer'],
            [['schedule_ship_date'], 'safe'],
            [['quantity'], 'number'],
            [['forecast_group', 'uom_name'], 'string', 'max' => 25],
            [['org', 'so_number', 'item_number'], 'string', 'max' => 50],
            [['item_description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'forecast_group' => Yii::t('app', 'Forecast Group'),
            'org' => Yii::t('app', 'Org'),
            'so_number' => Yii::t('app', 'So Number'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_number' => Yii::t('app', 'Item Number'),
            'uom_name' => Yii::t('app', 'Uom Name'),
            'item_description' => Yii::t('app', 'Item Description'),
            'schedule_ship_date' => Yii::t('app', 'Schedule Ship Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'fp_forecast_consumption_id' => Yii::t('app', 'Fp Forecast Consumption ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
        ];
    }
}
