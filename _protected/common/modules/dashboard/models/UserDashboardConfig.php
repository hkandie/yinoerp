<?php

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "{{%user_dashboard_config}}".
 *
 * @property integer $user_dashboard_config_id
 * @property string $config_level
 * @property string $report_label
 * @property string $user_role
 * @property integer $user_id
 * @property string $report_group
 * @property string $report_type
 * @property integer $report_id
 * @property integer $priority
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class UserDashboardConfig extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_dashboard_config}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['report_label', 'report_group', 'created_by', 'last_update_by'], 'required'],
            [['user_id', 'report_id', 'priority', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['config_level'], 'string', 'max' => 25],
            [['report_label'], 'string', 'max' => 40],
            [['user_role', 'report_group'], 'string', 'max' => 50],
            [['report_type'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_dashboard_config_id' => Yii::t('app', 'User Dashboard Config ID'),
            'config_level' => Yii::t('app', 'Config Level'),
            'report_label' => Yii::t('app', 'Report Label'),
            'user_role' => Yii::t('app', 'User Role'),
            'user_id' => Yii::t('app', 'User ID'),
            'report_group' => Yii::t('app', 'Report Group'),
            'report_type' => Yii::t('app', 'Report Type'),
            'report_id' => Yii::t('app', 'Report ID'),
            'priority' => Yii::t('app', 'Priority'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
