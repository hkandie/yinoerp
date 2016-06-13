<?php

/**
 * @package EduSec.modules.dashboard.models
 */

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "events".
 *
 * @property integer $event_id
 * @property string $event_title
 * @property string $event_detail
 * @property string $event_start_date
 * @property string $event_end_date
 * @property integer $event_type
 * @property string $event_url
 * @property integer $event_all_day
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 * @property integer $is_status
 */
class Events extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'events';
    }
  
    public static function find()
    {
	return parent::find()->andWhere(['<>', 'is_status', 2]);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_title', 'event_detail', 'event_start_date', 'event_end_date', 'event_type', 'created_at', 'created_by'], 'required', 'message' => ''],
            [['event_start_date', 'event_end_date', 'created_at', 'updated_at'], 'safe'],
            [['event_type', 'event_all_day', 'created_by', 'updated_by', 'is_status'], 'integer'],
            [['event_title'], 'string', 'max' => 80],
            [['event_detail', 'event_url'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'event_id' => 'Event ID',
            'event_title' => 'Title',
            'event_detail' => 'Detail',
            'event_start_date' => 'Start Time',
            'event_end_date' => 'End Time',
            'event_type' => 'Event Type',
            'event_url' => 'Url',
            'event_all_day' => 'All Day',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'is_status' => 'Is Status',
        ];
    }
}
