<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_store}}".
 *
 * @property string $sd_store_id
 * @property string $org_id
 * @property string $store_name
 * @property string $code
 * @property string $type
 * @property integer $cogs_ac_id
 * @property integer $revenue_ac_id
 * @property integer $cash_ac_id
 * @property integer $tax_ac_id
 * @property string $description
 * @property string $status
 * @property integer $address_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdStore extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_store}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'cogs_ac_id', 'revenue_ac_id', 'cash_ac_id', 'tax_ac_id', 'address_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['store_name', 'code', 'revenue_ac_id', 'cash_ac_id', 'tax_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['store_name'], 'string', 'max' => 100],
            [['code'], 'string', 'max' => 25],
            [['type', 'status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['store_name'], 'unique'],
            [['code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_store_id' => Yii::t('app', 'Sd Store ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'store_name' => Yii::t('app', 'Store Name'),
            'code' => Yii::t('app', 'Code'),
            'type' => Yii::t('app', 'Type'),
            'cogs_ac_id' => Yii::t('app', 'Cogs Ac ID'),
            'revenue_ac_id' => Yii::t('app', 'Revenue Ac ID'),
            'cash_ac_id' => Yii::t('app', 'Cash Ac ID'),
            'tax_ac_id' => Yii::t('app', 'Tax Ac ID'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'address_id' => Yii::t('app', 'Address ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
