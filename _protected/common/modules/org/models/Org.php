<?php

namespace common\modules\org\models;

use Yii;

/**
 * This is the model class for table "org".
 *
 * @property string $org_id
 * @property string $org
 * @property string $code
 * @property string $type
 * @property string $description
 * @property string $enterprise_org_id
 * @property string $legal_org_id
 * @property string $business_org_id
 * @property string $inventory_org_id
 * @property integer $ef_id
 * @property string $status
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $address_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 * @property string $org_logo
 */
class Org extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'org';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org', 'code', 'type', 'created_by', 'last_update_by'], 'required'],
            [['enterprise_org_id', 'legal_org_id', 'business_org_id', 'inventory_org_id', 'ef_id', 'rev_number', 'address_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['org', 'type', 'status', 'rev_enabled'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 200],
            [['org'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'org_id' => Yii::t('app', 'Org ID'),
            'org' => Yii::t('app', 'Org'),
            'code' => Yii::t('app', 'Code'),
            'type' => Yii::t('app', 'Type'),
            'description' => Yii::t('app', 'Description'),
            'enterprise_org_id' => Yii::t('app', 'Enterprise Org ID'),
            'legal_org_id' => Yii::t('app', 'Legal Org ID'),
            'business_org_id' => Yii::t('app', 'Business Org ID'),
            'inventory_org_id' => Yii::t('app', 'Inventory Org ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'status' => Yii::t('app', 'Status'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'address_id' => Yii::t('app', 'Address ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
            'org_logo'=> Yii::t('app', 'Logo'),
        ];
    }
}
