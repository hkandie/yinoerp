<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_event_line}}".
 *
 * @property integer $hr_event_line_id
 * @property integer $hr_event_header_id
 * @property integer $user_id
 * @property integer $resource_id
 * @property string $expected_status
 * @property string $actual_status
 * @property integer $required_cb
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrEventLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_event_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_event_header_id', 'user_id', 'resource_id', 'required_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['expected_status', 'actual_status'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 255],
            [['user_id', 'resource_id'], 'unique', 'targetAttribute' => ['user_id', 'resource_id'], 'message' => 'The combination of User ID and Resource ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_event_line_id' => Yii::t('app', 'Hr Event Line ID'),
            'hr_event_header_id' => Yii::t('app', 'Hr Event Header ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'expected_status' => Yii::t('app', 'Expected Status'),
            'actual_status' => Yii::t('app', 'Actual Status'),
            'required_cb' => Yii::t('app', 'Required Cb'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
