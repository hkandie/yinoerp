<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_line_date}}".
 *
 * @property integer $fp_forecast_line_date_id
 * @property integer $fp_forecast_line_id
 * @property string $forecast_date
 * @property string $original_quantity
 * @property string $current_quantity
 * @property string $source
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpForecastLineDate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_line_date}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_forecast_line_id', 'forecast_date', 'original_quantity', 'current_quantity', 'created_by', 'last_update_by'], 'required'],
            [['fp_forecast_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['forecast_date', 'creation_date', 'last_update_date'], 'safe'],
            [['original_quantity', 'current_quantity'], 'number'],
            [['source'], 'string', 'max' => 25],
            [['fp_forecast_line_id', 'forecast_date'], 'unique', 'targetAttribute' => ['fp_forecast_line_id', 'forecast_date'], 'message' => 'The combination of Fp Forecast Line ID and Forecast Date has already been taken.'],
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
            'forecast_date' => Yii::t('app', 'Forecast Date'),
            'original_quantity' => Yii::t('app', 'Original Quantity'),
            'current_quantity' => Yii::t('app', 'Current Quantity'),
            'source' => Yii::t('app', 'Source'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
