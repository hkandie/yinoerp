<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_subscribe}}".
 *
 * @property string $extn_subscribe_id
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $user_email
 * @property integer $user_id
 * @property string $username
 * @property string $unsubscribe_reason
 * @property integer $enabled_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnSubscribe extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_subscribe}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_key_name', 'reference_key_value', 'user_email', 'created_by', 'last_update_by'], 'required'],
            [['reference_key_value', 'user_id', 'enabled_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_key_name', 'user_email'], 'string', 'max' => 50],
            [['username'], 'string', 'max' => 25],
            [['unsubscribe_reason'], 'string', 'max' => 255],
            [['reference_key_name', 'reference_key_value', 'user_email'], 'unique', 'targetAttribute' => ['reference_key_name', 'reference_key_value', 'user_email'], 'message' => 'The combination of Reference Key Name, Reference Key Value and User Email has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_subscribe_id' => Yii::t('app', 'Extn Subscribe ID'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'user_email' => Yii::t('app', 'User Email'),
            'user_id' => Yii::t('app', 'User ID'),
            'username' => Yii::t('app', 'Username'),
            'unsubscribe_reason' => Yii::t('app', 'Unsubscribe Reason'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
