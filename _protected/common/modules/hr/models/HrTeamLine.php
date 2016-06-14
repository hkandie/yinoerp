<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_team_line}}".
 *
 * @property string $hr_team_line_id
 * @property integer $hr_team_header_id
 * @property integer $member_employee_id
 * @property string $role
 * @property integer $responsibility
 * @property string $region
 * @property string $start_date
 * @property string $end_date
 * @property string $objective
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrTeamLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_team_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_team_header_id', 'member_employee_id', 'responsibility', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_team_header_id', 'member_employee_id', 'responsibility', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['role'], 'string', 'max' => 25],
            [['region'], 'string', 'max' => 50],
            [['objective'], 'string', 'max' => 256],
            [['hr_team_header_id', 'member_employee_id'], 'unique', 'targetAttribute' => ['hr_team_header_id', 'member_employee_id'], 'message' => 'The combination of Hr Team Header ID and Member Employee ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_team_line_id' => Yii::t('app', 'Hr Team Line ID'),
            'hr_team_header_id' => Yii::t('app', 'Hr Team Header ID'),
            'member_employee_id' => Yii::t('app', 'Member Employee ID'),
            'role' => Yii::t('app', 'Role'),
            'responsibility' => Yii::t('app', 'Responsibility'),
            'region' => Yii::t('app', 'Region'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'objective' => Yii::t('app', 'Objective'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
