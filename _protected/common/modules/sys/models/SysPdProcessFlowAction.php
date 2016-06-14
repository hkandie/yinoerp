<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_pd_process_flow_action}}".
 *
 * @property integer $sys_pd_process_flow_action_id
 * @property integer $sys_pd_header_id
 * @property integer $sys_process_flow_line_id
 * @property integer $action_number
 * @property string $role_code
 * @property integer $user_id
 * @property string $pf_action_type
 * @property string $required_cb
 * @property string $field_value
 * @property string $comment
 * @property integer $action_user_id
 * @property string $action_duration
 * @property string $object_name
 * @property integer $object_primary_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysPdProcessFlowAction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_pd_process_flow_action}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_pd_header_id', 'sys_process_flow_line_id', 'action_number', 'created_by', 'last_update_by'], 'required'],
            [['sys_pd_header_id', 'sys_process_flow_line_id', 'action_number', 'user_id', 'action_user_id', 'object_primary_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['action_duration'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['role_code', 'pf_action_type', 'field_value'], 'string', 'max' => 25],
            [['required_cb'], 'string', 'max' => 5],
            [['comment'], 'string', 'max' => 256],
            [['object_name'], 'string', 'max' => 100],
            [['sys_pd_header_id', 'sys_process_flow_line_id'], 'unique', 'targetAttribute' => ['sys_pd_header_id', 'sys_process_flow_line_id'], 'message' => 'The combination of Sys Pd Header ID and Sys Process Flow Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_pd_process_flow_action_id' => Yii::t('app', 'Sys Pd Process Flow Action ID'),
            'sys_pd_header_id' => Yii::t('app', 'Sys Pd Header ID'),
            'sys_process_flow_line_id' => Yii::t('app', 'Sys Process Flow Line ID'),
            'action_number' => Yii::t('app', 'Action Number'),
            'role_code' => Yii::t('app', 'Role Code'),
            'user_id' => Yii::t('app', 'User ID'),
            'pf_action_type' => Yii::t('app', 'Pf Action Type'),
            'required_cb' => Yii::t('app', 'Required Cb'),
            'field_value' => Yii::t('app', 'Field Value'),
            'comment' => Yii::t('app', 'Comment'),
            'action_user_id' => Yii::t('app', 'Action User ID'),
            'action_duration' => Yii::t('app', 'Action Duration'),
            'object_name' => Yii::t('app', 'Object Name'),
            'object_primary_id' => Yii::t('app', 'Object Primary ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
