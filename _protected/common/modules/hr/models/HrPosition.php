<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_position}}".
 *
 * @property string $hr_position_id
 * @property string $position_name
 * @property integer $job_id
 * @property integer $org_id
 * @property integer $location_id
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property integer $headcount
 * @property integer $grade_id
 * @property integer $payroll_id
 * @property string $salary_basis
 * @property string $working_hours
 * @property string $wh_frequency
 * @property string $position_details
 * @property string $position_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_position}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_id', 'org_id', 'location_id', 'headcount', 'grade_id', 'payroll_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['working_hours'], 'number'],
            [['position_details'], 'string'],
            [['created_by', 'last_update_by'], 'required'],
            [['position_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 256],
            [['salary_basis', 'wh_frequency', 'position_status'], 'string', 'max' => 25],
            [['position_name', 'org_id'], 'unique', 'targetAttribute' => ['position_name', 'org_id'], 'message' => 'The combination of Position Name and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_position_id' => Yii::t('app', 'Hr Position ID'),
            'position_name' => Yii::t('app', 'Position Name'),
            'job_id' => Yii::t('app', 'Job ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'location_id' => Yii::t('app', 'Location ID'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'headcount' => Yii::t('app', 'Headcount'),
            'grade_id' => Yii::t('app', 'Grade ID'),
            'payroll_id' => Yii::t('app', 'Payroll ID'),
            'salary_basis' => Yii::t('app', 'Salary Basis'),
            'working_hours' => Yii::t('app', 'Working Hours'),
            'wh_frequency' => Yii::t('app', 'Wh Frequency'),
            'position_details' => Yii::t('app', 'Position Details'),
            'position_status' => Yii::t('app', 'Position Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
