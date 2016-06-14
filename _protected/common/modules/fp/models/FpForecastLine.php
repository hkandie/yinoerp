<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_line}}".
 *
 * @property integer $fp_forecast_line_id
 * @property integer $fp_forecast_header_id
 * @property integer $item_id_m
 * @property string $bucket_type
 * @property string $start_date
 * @property string $end_date
 * @property integer $no_of_bucket
 * @property string $original
 * @property string $total_original
 * @property integer $fp_consumption_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpForecastLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_forecast_header_id', 'item_id_m', 'bucket_type', 'start_date', 'original', 'created_by', 'last_update_by'], 'required'],
            [['fp_forecast_header_id', 'item_id_m', 'no_of_bucket', 'fp_consumption_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['original', 'total_original'], 'number'],
            [['bucket_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_forecast_line_id' => Yii::t('app', 'Fp Forecast Line ID'),
            'fp_forecast_header_id' => Yii::t('app', 'Fp Forecast Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'bucket_type' => Yii::t('app', 'Bucket Type'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'no_of_bucket' => Yii::t('app', 'No Of Bucket'),
            'original' => Yii::t('app', 'Original'),
            'total_original' => Yii::t('app', 'Total Original'),
            'fp_consumption_id' => Yii::t('app', 'Fp Consumption ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
