<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_employee_education}}".
 *
 * @property string $hr_employee_education_id
 * @property integer $employee_id
 * @property string $degree_name
 * @property string $university
 * @property string $university_address
 * @property string $specialization
 * @property string $edu_start_date
 * @property string $edu_end_date
 * @property string $mode_of_education
 * @property string $grade
 * @property string $marks_percentage
 * @property string $comments
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrEmployeeEducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_employee_education}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'degree_name', 'university', 'edu_end_date', 'created_by', 'last_update_by'], 'required'],
            [['employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['edu_start_date', 'edu_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['marks_percentage'], 'number'],
            [['comments'], 'string'],
            [['degree_name', 'university', 'university_address', 'specialization'], 'string', 'max' => 256],
            [['mode_of_education'], 'string', 'max' => 50],
            [['grade'], 'string', 'max' => 10],
            [['employee_id', 'degree_name'], 'unique', 'targetAttribute' => ['employee_id', 'degree_name'], 'message' => 'The combination of Employee ID and Degree Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_employee_education_id' => Yii::t('app', 'Hr Employee Education ID'),
            'employee_id' => Yii::t('app', 'Employee ID'),
            'degree_name' => Yii::t('app', 'Degree Name'),
            'university' => Yii::t('app', 'University'),
            'university_address' => Yii::t('app', 'University Address'),
            'specialization' => Yii::t('app', 'Specialization'),
            'edu_start_date' => Yii::t('app', 'Edu Start Date'),
            'edu_end_date' => Yii::t('app', 'Edu End Date'),
            'mode_of_education' => Yii::t('app', 'Mode Of Education'),
            'grade' => Yii::t('app', 'Grade'),
            'marks_percentage' => Yii::t('app', 'Marks Percentage'),
            'comments' => Yii::t('app', 'Comments'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
