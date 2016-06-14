<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_job}}".
 *
 * @property string $hr_job_id
 * @property string $job_code
 * @property string $job_name
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property string $min_education
 * @property string $min_experience
 * @property string $technology
 * @property string $skillset
 * @property string $position_type
 * @property string $job_usage
 * @property integer $group_hr_job_id
 * @property string $functional_area
 * @property string $location
 * @property integer $job_level
 * @property string $status
 * @property string $job_details
 * @property string $primary_responsibility
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrJob extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_job}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['start_date', 'creation_date', 'last_update_date'], 'safe'],
            [['end_date'], 'number'],
            [['group_hr_job_id', 'job_level', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['job_details', 'primary_responsibility'], 'string'],
            [['created_by', 'last_update_by'], 'required'],
            [['job_code', 'position_type', 'job_usage'], 'string', 'max' => 25],
            [['job_name', 'functional_area', 'location'], 'string', 'max' => 50],
            [['description', 'min_education', 'min_experience', 'technology', 'skillset'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 20],
            [['job_code'], 'unique'],
            [['job_name'], 'unique'],
            [['job_code'], 'unique'],
            [['job_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_job_id' => Yii::t('app', 'Hr Job ID'),
            'job_code' => Yii::t('app', 'Job Code'),
            'job_name' => Yii::t('app', 'Job Name'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'description' => Yii::t('app', 'Description'),
            'min_education' => Yii::t('app', 'Min Education'),
            'min_experience' => Yii::t('app', 'Min Experience'),
            'technology' => Yii::t('app', 'Technology'),
            'skillset' => Yii::t('app', 'Skillset'),
            'position_type' => Yii::t('app', 'Position Type'),
            'job_usage' => Yii::t('app', 'Job Usage'),
            'group_hr_job_id' => Yii::t('app', 'Group Hr Job ID'),
            'functional_area' => Yii::t('app', 'Functional Area'),
            'location' => Yii::t('app', 'Location'),
            'job_level' => Yii::t('app', 'Job Level'),
            'status' => Yii::t('app', 'Status'),
            'job_details' => Yii::t('app', 'Job Details'),
            'primary_responsibility' => Yii::t('app', 'Primary Responsibility'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
