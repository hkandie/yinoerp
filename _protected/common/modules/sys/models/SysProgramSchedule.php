<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_program_schedule}}".
 *
 * @property integer $sys_program_schedule_id
 * @property string $frequency_uom
 * @property integer $frequency_value
 * @property integer $one_time_cb
 * @property integer $increase_date_parameter_cb
 * @property string $program_name
 * @property string $request_type
 * @property string $description
 * @property string $parameter
 * @property string $module_name
 * @property string $program_class_name
 * @property string $report_query
 * @property string $status
 * @property string $start_date_time
 * @property string $output_path
 * @property string $op_email_address
 * @property string $op_email_format
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysProgramSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_program_schedule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['frequency_value', 'one_time_cb', 'increase_date_parameter_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['request_type', 'created_by', 'last_update_by'], 'required'],
            [['parameter', 'report_query', 'op_email_address'], 'string'],
            [['start_date_time', 'creation_date', 'last_update_date'], 'safe'],
            [['frequency_uom', 'request_type', 'op_email_format'], 'string', 'max' => 25],
            [['program_name', 'program_class_name'], 'string', 'max' => 255],
            [['description', 'output_path'], 'string', 'max' => 256],
            [['module_name', 'status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_program_schedule_id' => Yii::t('app', 'Sys Program Schedule ID'),
            'frequency_uom' => Yii::t('app', 'Frequency Uom'),
            'frequency_value' => Yii::t('app', 'Frequency Value'),
            'one_time_cb' => Yii::t('app', 'One Time Cb'),
            'increase_date_parameter_cb' => Yii::t('app', 'Increase Date Parameter Cb'),
            'program_name' => Yii::t('app', 'Program Name'),
            'request_type' => Yii::t('app', 'Request Type'),
            'description' => Yii::t('app', 'Description'),
            'parameter' => Yii::t('app', 'Parameter'),
            'module_name' => Yii::t('app', 'Module Name'),
            'program_class_name' => Yii::t('app', 'Program Class Name'),
            'report_query' => Yii::t('app', 'Report Query'),
            'status' => Yii::t('app', 'Status'),
            'start_date_time' => Yii::t('app', 'Start Date Time'),
            'output_path' => Yii::t('app', 'Output Path'),
            'op_email_address' => Yii::t('app', 'Op Email Address'),
            'op_email_format' => Yii::t('app', 'Op Email Format'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
