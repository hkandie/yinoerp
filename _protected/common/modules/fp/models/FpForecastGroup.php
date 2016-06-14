<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_forecast_group}}".
 *
 * @property integer $fp_forecast_group_id
 * @property integer $org_id
 * @property string $forecast_group
 * @property string $description
 * @property string $status
 * @property string $bucket_type
 * @property string $level
 * @property integer $consume_cb
 * @property integer $backward_days
 * @property integer $forward_days
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class FpForecastGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_forecast_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'forecast_group', 'description', 'bucket_type', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'consume_cb', 'backward_days', 'forward_days', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['forecast_group', 'bucket_type', 'level'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_forecast_group_id' => Yii::t('app', 'Fp Forecast Group ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'forecast_group' => Yii::t('app', 'Forecast Group'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'bucket_type' => Yii::t('app', 'Bucket Type'),
            'level' => Yii::t('app', 'Level'),
            'consume_cb' => Yii::t('app', 'Consume Cb'),
            'backward_days' => Yii::t('app', 'Backward Days'),
            'forward_days' => Yii::t('app', 'Forward Days'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
