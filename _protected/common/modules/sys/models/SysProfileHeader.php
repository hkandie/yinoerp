<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_profile_header}}".
 *
 * @property string $sys_profile_header_id
 * @property string $access_level
 * @property string $profile_name
 * @property string $profile_class_name
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysProfileHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_profile_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['access_level'], 'string'],
            [['profile_name', 'profile_class_name', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['profile_name'], 'string', 'max' => 50],
            [['profile_class_name'], 'string', 'max' => 256],
            [['description'], 'string', 'max' => 200],
            [['profile_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_profile_header_id' => Yii::t('app', 'Sys Profile Header ID'),
            'access_level' => Yii::t('app', 'Access Level'),
            'profile_name' => Yii::t('app', 'Profile Name'),
            'profile_class_name' => Yii::t('app', 'Profile Class Name'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
