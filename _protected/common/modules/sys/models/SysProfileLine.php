<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_profile_line}}".
 *
 * @property string $sys_profile_line_id
 * @property string $sys_profile_header_id
 * @property string $profile_level
 * @property string $level_name
 * @property string $level_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysProfileLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_profile_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_profile_header_id', 'profile_level', 'level_name', 'level_value', 'created_by', 'last_update_by'], 'required'],
            [['sys_profile_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['profile_level'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['level_name', 'level_value'], 'string', 'max' => 256],
            [['sys_profile_header_id', 'profile_level', 'level_name', 'level_value'], 'unique', 'targetAttribute' => ['sys_profile_header_id', 'profile_level', 'level_name', 'level_value'], 'message' => 'The combination of Sys Profile Header ID, Profile Level, Level Name and Level Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_profile_line_id' => Yii::t('app', 'Sys Profile Line ID'),
            'sys_profile_header_id' => Yii::t('app', 'Sys Profile Header ID'),
            'profile_level' => Yii::t('app', 'Profile Level'),
            'level_name' => Yii::t('app', 'Level Name'),
            'level_value' => Yii::t('app', 'Level Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
