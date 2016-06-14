<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_timesheet_line}}".
 *
 * @property string $hr_timesheet_line_id
 * @property integer $hr_timesheet_header_id
 * @property string $work_date
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property integer $prj_work_type_id
 * @property string $day1
 * @property string $day2
 * @property string $day3
 * @property string $day4
 * @property string $day5
 * @property string $day6
 * @property string $day7
 * @property string $status
 * @property string $purpose
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrTimesheetLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_timesheet_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_timesheet_header_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_timesheet_header_id', 'prj_project_header_id', 'prj_project_line_id', 'prj_work_type_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['work_date', 'creation_date', 'last_update_date'], 'safe'],
            [['day1', 'day2', 'day3', 'day4', 'day5', 'day6', 'day7'], 'number'],
            [['status'], 'string', 'max' => 25],
            [['purpose', 'description'], 'string', 'max' => 255],
            [['hr_timesheet_header_id', 'prj_project_line_id'], 'unique', 'targetAttribute' => ['hr_timesheet_header_id', 'prj_project_line_id'], 'message' => 'The combination of Hr Timesheet Header ID and Prj Project Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_timesheet_line_id' => Yii::t('app', 'Hr Timesheet Line ID'),
            'hr_timesheet_header_id' => Yii::t('app', 'Hr Timesheet Header ID'),
            'work_date' => Yii::t('app', 'Work Date'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_work_type_id' => Yii::t('app', 'Prj Work Type ID'),
            'day1' => Yii::t('app', 'Day1'),
            'day2' => Yii::t('app', 'Day2'),
            'day3' => Yii::t('app', 'Day3'),
            'day4' => Yii::t('app', 'Day4'),
            'day5' => Yii::t('app', 'Day5'),
            'day6' => Yii::t('app', 'Day6'),
            'day7' => Yii::t('app', 'Day7'),
            'status' => Yii::t('app', 'Status'),
            'purpose' => Yii::t('app', 'Purpose'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
