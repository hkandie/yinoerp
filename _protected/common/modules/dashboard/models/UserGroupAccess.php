<?php

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "{{%user_group_access}}".
 *
 * @property integer $user_group_access_id
 * @property string $user_group_code
 * @property integer $org_id
 * @property integer $access_level
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class UserGroupAccess extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_group_access}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_group_code', 'org_id', 'access_level', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'access_level', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['user_group_code'], 'string', 'max' => 25],
            [['user_group_code', 'org_id', 'access_level'], 'unique', 'targetAttribute' => ['user_group_code', 'org_id', 'access_level'], 'message' => 'The combination of User Group Code, Org ID and Access Level has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_group_access_id' => Yii::t('app', 'User Group Access ID'),
            'user_group_code' => Yii::t('app', 'User Group Code'),
            'org_id' => Yii::t('app', 'Org ID'),
            'access_level' => Yii::t('app', 'Access Level'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
