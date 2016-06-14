<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_payroll_process}}".
 *
 * @property string $hr_payroll_process_id
 * @property integer $hr_payroll_id
 * @property integer $hr_payroll_schedule_id
 * @property string $proces_name
 * @property string $status
 * @property integer $gl_journal_header_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPayrollProcess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_payroll_process}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_payroll_id', 'hr_payroll_schedule_id', 'created_by', 'last_update_by'], 'required'],
            [['hr_payroll_id', 'hr_payroll_schedule_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['proces_name'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 256],
            [['hr_payroll_schedule_id', 'proces_name'], 'unique', 'targetAttribute' => ['hr_payroll_schedule_id', 'proces_name'], 'message' => 'The combination of Hr Payroll Schedule ID and Proces Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_payroll_process_id' => Yii::t('app', 'Hr Payroll Process ID'),
            'hr_payroll_id' => Yii::t('app', 'Hr Payroll ID'),
            'hr_payroll_schedule_id' => Yii::t('app', 'Hr Payroll Schedule ID'),
            'proces_name' => Yii::t('app', 'Proces Name'),
            'status' => Yii::t('app', 'Status'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
