<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_location}}".
 *
 * @property integer $hr_location_id
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $combination
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_location}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['combination', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['country', 'state', 'city'], 'string', 'max' => 50],
            [['combination'], 'string', 'max' => 256],
            [['description'], 'string', 'max' => 200],
            [['combination'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_location_id' => Yii::t('app', 'Hr Location ID'),
            'country' => Yii::t('app', 'Country'),
            'state' => Yii::t('app', 'State'),
            'city' => Yii::t('app', 'City'),
            'combination' => Yii::t('app', 'Combination'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
