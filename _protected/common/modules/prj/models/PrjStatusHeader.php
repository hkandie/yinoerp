<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_status_header}}".
 *
 * @property integer $prj_status_header_id
 * @property string $user_status
 * @property string $system_status
 * @property string $description
 * @property string $from_date
 * @property string $to_date
 * @property integer $starting_status_cb
 * @property integer $ending_status_cb
 * @property integer $sys_process_flow_header_id
 * @property string $next_allowed_status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjStatusHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_status_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_status', 'system_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['starting_status_cb', 'ending_status_cb', 'sys_process_flow_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['user_status', 'system_status', 'next_allowed_status'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_status_header_id' => Yii::t('app', 'Prj Status Header ID'),
            'user_status' => Yii::t('app', 'User Status'),
            'system_status' => Yii::t('app', 'System Status'),
            'description' => Yii::t('app', 'Description'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'starting_status_cb' => Yii::t('app', 'Starting Status Cb'),
            'ending_status_cb' => Yii::t('app', 'Ending Status Cb'),
            'sys_process_flow_header_id' => Yii::t('app', 'Sys Process Flow Header ID'),
            'next_allowed_status' => Yii::t('app', 'Next Allowed Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
