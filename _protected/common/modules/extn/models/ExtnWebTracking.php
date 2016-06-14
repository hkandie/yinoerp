<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_web_tracking}}".
 *
 * @property integer $extn_web_tracking_id
 * @property string $page_visited
 * @property string $referrer
 * @property string $query_string
 * @property string $hostname
 * @property integer $user_id
 * @property string $country
 * @property string $city
 * @property string $http_user_agent
 * @property string $creation_date
 * @property integer $company_id
 */
class ExtnWebTracking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_web_tracking}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['extn_web_tracking_id'], 'required'],
            [['extn_web_tracking_id', 'user_id', 'company_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['page_visited', 'referrer', 'query_string', 'http_user_agent'], 'string', 'max' => 256],
            [['hostname'], 'string', 'max' => 50],
            [['country'], 'string', 'max' => 60],
            [['city'], 'string', 'max' => 128],
            [['referrer'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_web_tracking_id' => Yii::t('app', 'Extn Web Tracking ID'),
            'page_visited' => Yii::t('app', 'Page Visited'),
            'referrer' => Yii::t('app', 'Referrer'),
            'query_string' => Yii::t('app', 'Query String'),
            'hostname' => Yii::t('app', 'Hostname'),
            'user_id' => Yii::t('app', 'User ID'),
            'country' => Yii::t('app', 'Country'),
            'city' => Yii::t('app', 'City'),
            'http_user_agent' => Yii::t('app', 'Http User Agent'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
