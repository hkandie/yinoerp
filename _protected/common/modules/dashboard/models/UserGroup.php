<?php

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "{{%user_group}}".
 *
 * @property string $user_group_id
 * @property string $user_group_code
 * @property string $user_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class UserGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_group}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_group_code', 'user_id', 'created_by', 'last_update_by'], 'required'],
            [['user_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['user_group_code'], 'string', 'max' => 25],
            [['user_group_code', 'user_id'], 'unique', 'targetAttribute' => ['user_group_code', 'user_id'], 'message' => 'The combination of User Group Code and User ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_group_id' => Yii::t('app', 'User Group ID'),
            'user_group_code' => Yii::t('app', 'User Group Code'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
