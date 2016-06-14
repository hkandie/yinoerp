<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_recipe_customer}}".
 *
 * @property string $pm_recipe_customer_id
 * @property integer $pm_recipe_header_id
 * @property integer $org_id
 * @property integer $ar_customer_id
 * @property integer $ar_customer_site_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmRecipeCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_recipe_customer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_recipe_header_id', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['pm_recipe_header_id', 'org_id', 'ar_customer_id', 'ar_customer_site_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['pm_recipe_header_id', 'org_id'], 'unique', 'targetAttribute' => ['pm_recipe_header_id', 'org_id'], 'message' => 'The combination of Pm Recipe Header ID and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_recipe_customer_id' => Yii::t('app', 'Pm Recipe Customer ID'),
            'pm_recipe_header_id' => Yii::t('app', 'Pm Recipe Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'ar_customer_site_id' => Yii::t('app', 'Ar Customer Site ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
