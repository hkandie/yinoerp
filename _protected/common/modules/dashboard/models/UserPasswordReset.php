<?php

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "{{%user_password_reset}}".
 *
 * @property string $user_password_reset_id
 * @property string $user_id
 * @property string $code
 * @property double $status
 * @property string $creation_date
 * @property string $created_by
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class UserPasswordReset extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_password_reset}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'code', 'creation_date'], 'required'],
            [['user_id', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'number'],
            [['creation_date'], 'safe'],
            [['code'], 'string', 'max' => 256],
            [['created_by', 'last_update_date'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_password_reset_id' => Yii::t('app', 'User Password Reset ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'code' => Yii::t('app', 'Code'),
            'status' => Yii::t('app', 'Status'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
