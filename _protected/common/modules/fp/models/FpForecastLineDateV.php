<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_line_date_v}}".
 *
 * @property integer $fp_forecast_line_date_id
 * @property integer $fp_forecast_line_id
 * @property string $forecast
 * @property string $forecast_group
 * @property string $org
 * @property string $item_number
 * @property string $uom_name
 * @property string $item_description
 * @property string $forecast_date
 * @property string $bucket_type
 * @property string $original_quantity
 * @property string $current_quantity
 * @property string $source
 * @property integer $item_id_m
 * @property integer $uom_id
 */
class FpForecastLineDateV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_line_date_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_forecast_line_date_id', 'fp_forecast_line_id', 'item_id_m', 'uom_id'], 'integer'],
            [['fp_forecast_line_id', 'forecast', 'org', 'item_number', 'forecast_date', 'bucket_type', 'original_quantity', 'current_quantity', 'item_id_m', 'uom_id'], 'required'],
            [['forecast_date'], 'safe'],
            [['original_quantity', 'current_quantity'], 'number'],
            [['forecast', 'forecast_group', 'uom_name', 'bucket_type', 'source'], 'string', 'max' => 25],
            [['org', 'item_number'], 'string', 'max' => 50],
            [['item_description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_forecast_line_date_id' => Yii::t('app', 'Fp Forecast Line Date ID'),
            'fp_forecast_line_id' => Yii::t('app', 'Fp Forecast Line ID'),
            'forecast' => Yii::t('app', 'Forecast'),
            'forecast_group' => Yii::t('app', 'Forecast Group'),
            'org' => Yii::t('app', 'Org'),
            'item_number' => Yii::t('app', 'Item Number'),
            'uom_name' => Yii::t('app', 'Uom Name'),
            'item_description' => Yii::t('app', 'Item Description'),
            'forecast_date' => Yii::t('app', 'Forecast Date'),
            'bucket_type' => Yii::t('app', 'Bucket Type'),
            'original_quantity' => Yii::t('app', 'Original Quantity'),
            'current_quantity' => Yii::t('app', 'Current Quantity'),
            'source' => Yii::t('app', 'Source'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
        ];
    }
}
