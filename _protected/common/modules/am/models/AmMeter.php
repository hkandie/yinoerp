<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_meter".
 *
 * @property string $am_meter_id
 * @property integer $org_id
 * @property string $name
 * @property string $type
 * @property integer $uom_id
 * @property string $from_date
 * @property string $to_date
 * @property string $description
 * @property string $value_change
 * @property string $initial_reading
 * @property string $initial_reading_date
 * @property string $rate_per_day
 * @property string $no_of_past_readings
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmMeter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_meter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'name', 'value_change', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['from_date', 'to_date', 'initial_reading_date', 'rate_per_day', 'creation_date', 'last_update_date'], 'safe'],
            [['initial_reading', 'no_of_past_readings'], 'number'],
            [['name'], 'string', 'max' => 50],
            [['type', 'value_change'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['type', 'from_date'], 'unique', 'targetAttribute' => ['type', 'from_date'], 'message' => 'The combination of Type and From Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_meter_id' => Yii::t('app', 'Am Meter ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'name' => Yii::t('app', 'Name'),
            'type' => Yii::t('app', 'Type'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'description' => Yii::t('app', 'Description'),
            'value_change' => Yii::t('app', 'Value Change'),
            'initial_reading' => Yii::t('app', 'Initial Reading'),
            'initial_reading_date' => Yii::t('app', 'Initial Reading Date'),
            'rate_per_day' => Yii::t('app', 'Rate Per Day'),
            'no_of_past_readings' => Yii::t('app', 'No Of Past Readings'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
