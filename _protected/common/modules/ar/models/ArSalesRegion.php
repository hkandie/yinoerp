<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_sales_region}}".
 *
 * @property string $ar_sales_region_id
 * @property string $country_code
 * @property string $state
 * @property string $city
 * @property string $sales_region_name
 * @property string $description
 * @property string $street
 * @property integer $mdm_tax_region_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArSalesRegion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_sales_region}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_code', 'created_by', 'last_update_by'], 'required'],
            [['mdm_tax_region_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['country_code'], 'string', 'max' => 5],
            [['state', 'city', 'status'], 'string', 'max' => 25],
            [['sales_region_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 256],
            [['street'], 'string', 'max' => 50],
            [['state', 'description'], 'unique', 'targetAttribute' => ['state', 'description'], 'message' => 'The combination of State and Description has already been taken.'],
            [['sales_region_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_sales_region_id' => Yii::t('app', 'Ar Sales Region ID'),
            'country_code' => Yii::t('app', 'Country Code'),
            'state' => Yii::t('app', 'State'),
            'city' => Yii::t('app', 'City'),
            'sales_region_name' => Yii::t('app', 'Sales Region Name'),
            'description' => Yii::t('app', 'Description'),
            'street' => Yii::t('app', 'Street'),
            'mdm_tax_region_id' => Yii::t('app', 'Mdm Tax Region ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
