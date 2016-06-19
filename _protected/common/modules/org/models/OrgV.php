<?php

namespace common\modules\org\models;

use Yii;

/**
 * This is the model class for table "org_v".
 *
 * @property string $org_id
 * @property string $org
 * @property string $type
 * @property string $code
 * @property string $description
 * @property string $enterprise_org_id
 * @property string $legal_org_id
 * @property string $business_org_id
 * @property string $inventory_org_id
 * @property integer $address_id
 * @property integer $ledger_id
 * @property string $ledger
 * @property integer $coa_structure_id
 * @property string $currency_code
 */
class OrgV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'org_v';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'enterprise_org_id', 'legal_org_id', 'business_org_id', 'inventory_org_id', 'address_id', 'ledger_id', 'coa_structure_id'], 'integer'],
            [['org', 'type', 'code'], 'required'],
            [['org', 'type', 'ledger'], 'string', 'max' => 50],
            [['code'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 200],
            [['currency_code'], 'string', 'max' => 20],
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
            'type' => Yii::t('app', 'Type'),
            'code' => Yii::t('app', 'Code'),
            'description' => Yii::t('app', 'Description'),
            'enterprise_org_id' => Yii::t('app', 'Enterprise Org ID'),
            'legal_org_id' => Yii::t('app', 'Legal Org ID'),
            'business_org_id' => Yii::t('app', 'Business Org ID'),
            'inventory_org_id' => Yii::t('app', 'Inventory Org ID'),
            'address_id' => Yii::t('app', 'Address ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'ledger' => Yii::t('app', 'Ledger'),
            'coa_structure_id' => Yii::t('app', 'Coa Structure ID'),
            'currency_code' => Yii::t('app', 'Currency Code'),
        ];
    }
}
