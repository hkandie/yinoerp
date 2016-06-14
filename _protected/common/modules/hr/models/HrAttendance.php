<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_attendance}}".
 *
 * @property integer $hr_attendance_id
 * @property integer $hr_employee_id
 * @property string $date
 * @property string $punch_in
 * @property string $punch_in_note
 * @property string $punch_out
 * @property string $punch_out_note
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrAttendance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_attendance}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['date', 'punch_in', 'punch_out', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by'], 'required'],
            [['punch_in_note', 'punch_out_note', 'description'], 'string', 'max' => 255],
            [['hr_employee_id', 'date'], 'unique', 'targetAttribute' => ['hr_employee_id', 'date'], 'message' => 'The combination of Hr Employee ID and Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_attendance_id' => Yii::t('app', 'Hr Attendance ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'date' => Yii::t('app', 'Date'),
            'punch_in' => Yii::t('app', 'Punch In'),
            'punch_in_note' => Yii::t('app', 'Punch In Note'),
            'punch_out' => Yii::t('app', 'Punch Out'),
            'punch_out_note' => Yii::t('app', 'Punch Out Note'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
