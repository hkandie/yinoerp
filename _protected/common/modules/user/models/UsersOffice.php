<?php

namespace common\modules\user\models;

use Yii;

/**
 * This is the model class for table "bamboo_users_office".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $office_id
 */
class UsersOffice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return static::getDb()->tablePrefix .  'bamboo_users_office';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'office_id'], 'required'],
            [['user_id', 'office_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('stock', 'ID'),
            'user_id' => Yii::t('stock', 'User'),
            'office_id' => Yii::t('stock', 'Station'),
        ];
    }
    public function getOffice() {
        return $this->hasOne(\common\modules\prtl\models\Office::className(), ['id' => 'office_id']);
    }
}
