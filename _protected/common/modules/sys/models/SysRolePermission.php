<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_role_permission}}".
 *
 * @property string $sys_role_permission_id
 * @property string $role_id
 * @property string $permission_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysRolePermission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_role_permission}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'permission_id', 'created_by', 'last_update_by'], 'required'],
            [['role_id', 'permission_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_role_permission_id' => Yii::t('app', 'Sys Role Permission ID'),
            'role_id' => Yii::t('app', 'Role ID'),
            'permission_id' => Yii::t('app', 'Permission ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
