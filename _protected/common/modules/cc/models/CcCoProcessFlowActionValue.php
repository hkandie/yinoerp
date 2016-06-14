<?php

namespace common\modules\cc\models;

use Yii;

/**
 * This is the model class for table "{{%cc_co_process_flow_action_value}}".
 *
 * @property integer $sys_process_flow_action_value_id
 * @property integer $sys_process_flow_action_id
 * @property string $value
 * @property string $comment
 * @property integer $action_user_id
 * @property string $action_duration
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class CcCoProcessFlowActionValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cc_co_process_flow_action_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_process_flow_action_id', 'value', 'action_user_id', 'created_by', 'last_update_by'], 'required'],
            [['sys_process_flow_action_id', 'action_user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['action_duration'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['value', 'comment'], 'string', 'max' => 256],
            [['sys_process_flow_action_id', 'comment'], 'unique', 'targetAttribute' => ['sys_process_flow_action_id', 'comment'], 'message' => 'The combination of Sys Process Flow Action ID and Comment has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_process_flow_action_value_id' => Yii::t('app', 'Sys Process Flow Action Value ID'),
            'sys_process_flow_action_id' => Yii::t('app', 'Sys Process Flow Action ID'),
            'value' => Yii::t('app', 'Value'),
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
