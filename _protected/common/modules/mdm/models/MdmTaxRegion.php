<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_tax_region}}".
 *
 * @property string $mdm_tax_region_id
 * @property string $country_code
 * @property string $state
 * @property string $city
 * @property string $tax_region_name
 * @property string $description
 * @property string $tax_regime
 * @property string $tax_jurisdiction
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmTaxRegion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_tax_region}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country_code', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['country_code'], 'string', 'max' => 5],
            [['state', 'city', 'status'], 'string', 'max' => 25],
            [['tax_region_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 256],
            [['tax_regime', 'tax_jurisdiction'], 'string', 'max' => 50],
            [['state', 'description'], 'unique', 'targetAttribute' => ['state', 'description'], 'message' => 'The combination of State and Description has already been taken.'],
            [['tax_region_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_tax_region_id' => Yii::t('app', 'Mdm Tax Region ID'),
            'country_code' => Yii::t('app', 'Country Code'),
            'state' => Yii::t('app', 'State'),
            'city' => Yii::t('app', 'City'),
            'tax_region_name' => Yii::t('app', 'Tax Region Name'),
            'description' => Yii::t('app', 'Description'),
            'tax_regime' => Yii::t('app', 'Tax Regime'),
            'tax_jurisdiction' => Yii::t('app', 'Tax Jurisdiction'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
