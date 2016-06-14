<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_process_flow_header}}".
 *
 * @property integer $sys_process_flow_header_id
 * @property string $process_flow
 * @property string $module_name
 * @property string $type
 * @property string $status
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class SysProcessFlowHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_process_flow_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['process_flow', 'module_name', 'type', 'created_by', 'last_update_by'], 'required'],
            [['status'], 'string'],
            [['created_by', 'last_update_by'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['process_flow', 'module_name', 'type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['process_flow', 'module_name'], 'unique', 'targetAttribute' => ['process_flow', 'module_name'], 'message' => 'The combination of Process Flow and Module Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_process_flow_header_id' => Yii::t('app', 'Sys Process Flow Header ID'),
            'process_flow' => Yii::t('app', 'Process Flow'),
            'module_name' => Yii::t('app', 'Module Name'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
