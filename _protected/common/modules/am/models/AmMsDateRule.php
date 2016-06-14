<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_ms_date_rule".
 *
 * @property string $am_ms_date_rule_id
 * @property integer $am_maintenance_schedule_id
 * @property string $base_interval_days
 * @property string $cycle_interval_days
 * @property string $from_date
 * @property string $to_date
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmMsDateRule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_ms_date_rule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['am_maintenance_schedule_id', 'created_by', 'last_update_by'], 'required'],
            [['am_maintenance_schedule_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['base_interval_days', 'cycle_interval_days'], 'number'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['base_interval_days', 'from_date'], 'unique', 'targetAttribute' => ['base_interval_days', 'from_date'], 'message' => 'The combination of Base Interval Days and From Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_ms_date_rule_id' => Yii::t('app', 'Am Ms Date Rule ID'),
            'am_maintenance_schedule_id' => Yii::t('app', 'Am Maintenance Schedule ID'),
            'base_interval_days' => Yii::t('app', 'Base Interval Days'),
            'cycle_interval_days' => Yii::t('app', 'Cycle Interval Days'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
