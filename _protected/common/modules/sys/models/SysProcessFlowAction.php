<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_process_flow_action}}".
 *
 * @property integer $sys_process_flow_action_id
 * @property integer $sys_process_flow_line_id
 * @property integer $action_number
 * @property string $role_code
 * @property integer $user_id
 * @property string $pf_action_type
 * @property string $object_name
 * @property integer $object_primary_id
 * @property string $required_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysProcessFlowAction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_process_flow_action}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_process_flow_line_id', 'action_number', 'created_by', 'last_update_by'], 'required'],
            [['sys_process_flow_line_id', 'action_number', 'user_id', 'object_primary_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['role_code', 'pf_action_type'], 'string', 'max' => 25],
            [['object_name'], 'string', 'max' => 100],
            [['required_cb'], 'string', 'max' => 5],
            [['sys_process_flow_line_id', 'role_code'], 'unique', 'targetAttribute' => ['sys_process_flow_line_id', 'role_code'], 'message' => 'The combination of Sys Process Flow Line ID and Role Code has already been taken.'],
            [['sys_process_flow_line_id', 'role_code'], 'unique', 'targetAttribute' => ['sys_process_flow_line_id', 'role_code'], 'message' => 'The combination of Sys Process Flow Line ID and Role Code has already been taken.'],
            [['sys_process_flow_line_id', 'user_id'], 'unique', 'targetAttribute' => ['sys_process_flow_line_id', 'user_id'], 'message' => 'The combination of Sys Process Flow Line ID and User ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_process_flow_action_id' => Yii::t('app', 'Sys Process Flow Action ID'),
            'sys_process_flow_line_id' => Yii::t('app', 'Sys Process Flow Line ID'),
            'action_number' => Yii::t('app', 'Action Number'),
            'role_code' => Yii::t('app', 'Role Code'),
            'user_id' => Yii::t('app', 'User ID'),
            'pf_action_type' => Yii::t('app', 'Pf Action Type'),
            'object_name' => Yii::t('app', 'Object Name'),
            'object_primary_id' => Yii::t('app', 'Object Primary ID'),
            'required_cb' => Yii::t('app', 'Required Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
