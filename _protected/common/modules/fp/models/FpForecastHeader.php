<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_header}}".
 *
 * @property integer $fp_forecast_header_id
 * @property integer $org_id
 * @property string $forecast
 * @property string $description
 * @property integer $forecast_group_id
 * @property string $status
 * @property string $demand_class
 * @property integer $ar_customer_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class FpForecastHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'forecast', 'description', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'forecast_group_id', 'ar_customer_id', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['forecast', 'demand_class'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'forecast'], 'unique', 'targetAttribute' => ['org_id', 'forecast'], 'message' => 'The combination of Org ID and Forecast has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_forecast_header_id' => Yii::t('app', 'Fp Forecast Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'forecast' => Yii::t('app', 'Forecast'),
            'description' => Yii::t('app', 'Description'),
            'forecast_group_id' => Yii::t('app', 'Forecast Group ID'),
            'status' => Yii::t('app', 'Status'),
            'demand_class' => Yii::t('app', 'Demand Class'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
