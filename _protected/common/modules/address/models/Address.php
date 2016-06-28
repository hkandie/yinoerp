<?php

namespace common\modules\address\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property string $address_id
 * @property string $type
 * @property string $address_name
 * @property integer $mdm_tax_region_id
 * @property string $description
 * @property string $phone
 * @property string $email
 * @property string $website
 * @property string $address
 * @property string $country
 * @property string $postal_code
 * @property integer $default_cb
 * @property string $status
 * @property string $usage_type
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_tax_region_id', 'default_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['address'], 'string'],
            [['address_name'], 'unique'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['type', 'postal_code', 'status'], 'string', 'max' => 20],
            [['address_name', 'phone'], 'string', 'max' => 50],
            [['description', 'website'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['country'], 'string', 'max' => 40],
            [['usage_type'], 'string', 'max' => 25],
            [['address_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'address_id' => Yii::t('app', 'Address ID'),
            'type' => Yii::t('app', 'Type'),
            'address_name' => Yii::t('app', 'Address Name'),
            'mdm_tax_region_id' => Yii::t('app', 'Mdm Tax Region ID'),
            'description' => Yii::t('app', 'Description'),
            'phone' => Yii::t('app', 'Phone'),
            'email' => Yii::t('app', 'Email'),
            'website' => Yii::t('app', 'Website'),
            'address' => Yii::t('app', 'Address'),
            'country' => Yii::t('app', 'Country'),
            'postal_code' => Yii::t('app', 'Postal Code'),
            'default_cb' => Yii::t('app', 'Default Cb'),
            'status' => Yii::t('app', 'Status'),
            'usage_type' => Yii::t('app', 'Usage Type'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
    public function getOptionLine() {
        return $this->hasOne(\common\modules\option\models\OptionLine::className(),
                ['option_line_id' => 'usage_type']);
    }
}
