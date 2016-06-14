<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_program}}".
 *
 * @property integer $sys_program_id
 * @property string $program_name
 * @property string $description
 * @property string $message
 * @property string $module_name
 * @property string $class
 * @property string $program_source
 * @property string $report_query
 * @property string $request_type
 * @property string $status
 * @property string $parameters
 * @property string $output_path
 * @property string $op_email_address
 * @property string $op_email_format
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysProgram extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_program}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message', 'report_query', 'parameters', 'op_email_address'], 'string'],
            [['created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['program_name'], 'string', 'max' => 100],
            [['description', 'output_path'], 'string', 'max' => 256],
            [['module_name', 'class', 'status'], 'string', 'max' => 50],
            [['program_source', 'op_email_format'], 'string', 'max' => 25],
            [['request_type'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_program_id' => Yii::t('app', 'Sys Program ID'),
            'program_name' => Yii::t('app', 'Program Name'),
            'description' => Yii::t('app', 'Description'),
            'message' => Yii::t('app', 'Message'),
            'module_name' => Yii::t('app', 'Module Name'),
            'class' => Yii::t('app', 'Class'),
            'program_source' => Yii::t('app', 'Program Source'),
            'report_query' => Yii::t('app', 'Report Query'),
            'request_type' => Yii::t('app', 'Request Type'),
            'status' => Yii::t('app', 'Status'),
            'parameters' => Yii::t('app', 'Parameters'),
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
