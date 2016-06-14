<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_rating_values}}".
 *
 * @property integer $extn_rating_values_id
 * @property string $reference_table
 * @property integer $reference_id
 * @property integer $rating
 * @property string $vote_time
 * @property string $ip_address
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnRatingValues extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_rating_values}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_table', 'reference_id', 'vote_time', 'created_by', 'last_update_by'], 'required'],
            [['reference_id', 'rating', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['vote_time', 'creation_date', 'last_update_date'], 'safe'],
            [['reference_table'], 'string', 'max' => 50],
            [['ip_address'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_rating_values_id' => Yii::t('app', 'Extn Rating Values ID'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'rating' => Yii::t('app', 'Rating'),
            'vote_time' => Yii::t('app', 'Vote Time'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
