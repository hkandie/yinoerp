<?php

namespace common\modules\dashboard\models;

use Yii;

/**
 * This is the model class for table "{{%user_favourite}}".
 *
 * @property integer $user_favourite_id
 * @property integer $user_id
 * @property integer $path_id
 * @property string $external_link
 * @property string $fav_name
 * @property string $fav_group
 * @property integer $priority
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class UserFavourite extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user_favourite}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'fav_name', 'created_by', 'last_update_by'], 'required'],
            [['user_id', 'path_id', 'priority', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['external_link'], 'string', 'max' => 256],
            [['fav_name'], 'string', 'max' => 100],
            [['fav_group'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_favourite_id' => Yii::t('app', 'User Favourite ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'path_id' => Yii::t('app', 'Path ID'),
            'external_link' => Yii::t('app', 'External Link'),
            'fav_name' => Yii::t('app', 'Fav Name'),
            'fav_group' => Yii::t('app', 'Fav Group'),
            'priority' => Yii::t('app', 'Priority'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
