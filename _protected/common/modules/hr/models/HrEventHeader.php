<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_event_header}}".
 *
 * @property integer $hr_event_header_id
 * @property integer $user_id
 * @property string $start_date
 * @property string $start_time
 * @property string $end_time
 * @property string $end_date
 * @property string $title
 * @property string $location
 * @property string $url
 * @property string $event_details
 * @property string $privacy
 * @property string $event_color
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrEventHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_event_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'start_time', 'end_time', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['start_time', 'end_time', 'created_by', 'last_update_by'], 'required'],
            [['event_details'], 'string'],
            [['privacy'], 'number'],
            [['title', 'description'], 'string', 'max' => 255],
            [['location', 'url'], 'string', 'max' => 100],
            [['event_color'], 'string', 'max' => 15],
            [['start_date', 'start_time', 'title'], 'unique', 'targetAttribute' => ['start_date', 'start_time', 'title'], 'message' => 'The combination of Start Date, Start Time and Title has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_event_header_id' => Yii::t('app', 'Hr Event Header ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'start_date' => Yii::t('app', 'Start Date'),
            'start_time' => Yii::t('app', 'Start Time'),
            'end_time' => Yii::t('app', 'End Time'),
            'end_date' => Yii::t('app', 'End Date'),
            'title' => Yii::t('app', 'Title'),
            'location' => Yii::t('app', 'Location'),
            'url' => Yii::t('app', 'Url'),
            'event_details' => Yii::t('app', 'Event Details'),
            'privacy' => Yii::t('app', 'Privacy'),
            'event_color' => Yii::t('app', 'Event Color'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
