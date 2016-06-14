<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_consumption}}".
 *
 * @property integer $fp_forecast_consumption_id
 * @property integer $fp_forecast_line_date_id
 * @property integer $fp_forecast_line_id
 * @property integer $fp_forecast_group_id
 * @property integer $sd_so_line_id
 * @property string $quantity
 * @property string $reason
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpForecastConsumption extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_consumption}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_forecast_line_date_id', 'fp_forecast_line_id', 'fp_forecast_group_id', 'sd_so_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['sd_so_line_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reason'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_forecast_consumption_id' => Yii::t('app', 'Fp Forecast Consumption ID'),
            'fp_forecast_line_date_id' => Yii::t('app', 'Fp Forecast Line Date ID'),
            'fp_forecast_line_id' => Yii::t('app', 'Fp Forecast Line ID'),
            'fp_forecast_group_id' => Yii::t('app', 'Fp Forecast Group ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'reason' => Yii::t('app', 'Reason'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
