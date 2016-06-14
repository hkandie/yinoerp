<?php

namespace common\modules\cc\models;

use Yii;

/**
 * This is the model class for table "{{%cc_co_process_flow_action}}".
 *
 * @property integer $cc_co_process_flow_action_id
 * @property integer $cc_co_header_id
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
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class CcCoProcessFlowAction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cc_co_process_flow_action}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cc_co_header_id', 'sys_process_flow_line_id', 'action_number', 'created_by', 'last_update_by'], 'required'],
            [['cc_co_header_id', 'sys_process_flow_line_id', 'action_number', 'user_id', 'action_user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['action_duration'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['role_code', 'pf_action_type', 'field_value'], 'string', 'max' => 25],
            [['required_cb'], 'string', 'max' => 5],
            [['comment'], 'string', 'max' => 256],
            [['cc_co_header_id', 'role_code'], 'unique', 'targetAttribute' => ['cc_co_header_id', 'role_code'], 'message' => 'The combination of Cc Co Header ID and Role Code has already been taken.'],
            [['cc_co_header_id', 'role_code'], 'unique', 'targetAttribute' => ['cc_co_header_id', 'role_code'], 'message' => 'The combination of Cc Co Header ID and Role Code has already been taken.'],
            [['cc_co_header_id', 'user_id'], 'unique', 'targetAttribute' => ['cc_co_header_id', 'user_id'], 'message' => 'The combination of Cc Co Header ID and User ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cc_co_process_flow_action_id' => Yii::t('app', 'Cc Co Process Flow Action ID'),
            'cc_co_header_id' => Yii::t('app', 'Cc Co Header ID'),
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
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
