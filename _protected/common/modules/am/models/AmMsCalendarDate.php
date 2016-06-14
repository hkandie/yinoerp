<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_ms_calendar_date".
 *
 * @property string $am_ms_calendar_date_id
 * @property integer $am_maintenance_schedule_id
 * @property string $date
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmMsCalendarDate extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_ms_calendar_date';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['am_maintenance_schedule_id', 'created_by', 'last_update_by'], 'required'],
            [['am_maintenance_schedule_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['am_maintenance_schedule_id', 'date'], 'unique', 'targetAttribute' => ['am_maintenance_schedule_id', 'date'], 'message' => 'The combination of Am Maintenance Schedule ID and Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_ms_calendar_date_id' => Yii::t('app', 'Am Ms Calendar Date ID'),
            'am_maintenance_schedule_id' => Yii::t('app', 'Am Maintenance Schedule ID'),
            'date' => Yii::t('app', 'Date'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
