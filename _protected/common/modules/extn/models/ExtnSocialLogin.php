<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_social_login}}".
 *
 * @property integer $extn_social_login_id
 * @property string $provider_name
 * @property integer $enabled_cb
 * @property string $sl_key
 * @property string $description
 * @property string $slid
 * @property string $sl_secret
 * @property string $sl_scope
 * @property integer $display_weight
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnSocialLogin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_social_login}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['enabled_cb', 'display_weight', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['sl_scope'], 'string'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['provider_name'], 'string', 'max' => 50],
            [['sl_key', 'description', 'slid', 'sl_secret'], 'string', 'max' => 255],
            [['enabled_cb', 'slid'], 'unique', 'targetAttribute' => ['enabled_cb', 'slid'], 'message' => 'The combination of Enabled Cb and Slid has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_social_login_id' => Yii::t('app', 'Extn Social Login ID'),
            'provider_name' => Yii::t('app', 'Provider Name'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'sl_key' => Yii::t('app', 'Sl Key'),
            'description' => Yii::t('app', 'Description'),
            'slid' => Yii::t('app', 'Slid'),
            'sl_secret' => Yii::t('app', 'Sl Secret'),
            'sl_scope' => Yii::t('app', 'Sl Scope'),
            'display_weight' => Yii::t('app', 'Display Weight'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
