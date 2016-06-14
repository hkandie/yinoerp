<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_team_header}}".
 *
 * @property string $hr_team_header_id
 * @property string $team_name
 * @property integer $team_lead_employee_id
 * @property string $type
 * @property string $region
 * @property string $objective
 * @property string $email
 * @property string $status
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrTeamHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_team_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_name', 'team_lead_employee_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['team_lead_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['objective'], 'string'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['team_name'], 'string', 'max' => 256],
            [['type', 'status'], 'string', 'max' => 25],
            [['region'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 100],
            [['team_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_team_header_id' => Yii::t('app', 'Hr Team Header ID'),
            'team_name' => Yii::t('app', 'Team Name'),
            'team_lead_employee_id' => Yii::t('app', 'Team Lead Employee ID'),
            'type' => Yii::t('app', 'Type'),
            'region' => Yii::t('app', 'Region'),
            'objective' => Yii::t('app', 'Objective'),
            'email' => Yii::t('app', 'Email'),
            'status' => Yii::t('app', 'Status'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
