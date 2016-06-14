<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_process_flow_line}}".
 *
 * @property integer $sys_process_flow_line_id
 * @property string $sys_process_flow_header_id
 * @property integer $line_number
 * @property string $line_name
 * @property string $line_type
 * @property string $description
 * @property string $class_name
 * @property string $method_name
 * @property integer $next_line_seq_pass
 * @property integer $next_line_seq_fail
 * @property integer $next_line_seq_onhold
 * @property string $activity_path
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysProcessFlowLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_process_flow_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_process_flow_header_id', 'line_number', 'line_name', 'line_type', 'created_by', 'last_update_by'], 'required'],
            [['line_number', 'next_line_seq_pass', 'next_line_seq_fail', 'next_line_seq_onhold', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['sys_process_flow_header_id', 'line_name', 'line_type'], 'string', 'max' => 25],
            [['description', 'class_name', 'method_name'], 'string', 'max' => 256],
            [['activity_path'], 'string', 'max' => 255],
            [['sys_process_flow_header_id', 'line_name'], 'unique', 'targetAttribute' => ['sys_process_flow_header_id', 'line_name'], 'message' => 'The combination of Sys Process Flow Header ID and Line Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_process_flow_line_id' => Yii::t('app', 'Sys Process Flow Line ID'),
            'sys_process_flow_header_id' => Yii::t('app', 'Sys Process Flow Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'line_name' => Yii::t('app', 'Line Name'),
            'line_type' => Yii::t('app', 'Line Type'),
            'description' => Yii::t('app', 'Description'),
            'class_name' => Yii::t('app', 'Class Name'),
            'method_name' => Yii::t('app', 'Method Name'),
            'next_line_seq_pass' => Yii::t('app', 'Next Line Seq Pass'),
            'next_line_seq_fail' => Yii::t('app', 'Next Line Seq Fail'),
            'next_line_seq_onhold' => Yii::t('app', 'Next Line Seq Onhold'),
            'activity_path' => Yii::t('app', 'Activity Path'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
