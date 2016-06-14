<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_location_default}}".
 *
 * @property string $inv_location_default_id
 * @property integer $org_id
 * @property integer $item_id_m
 * @property integer $priority
 * @property string $default_type
 * @property string $description
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property integer $address_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvLocationDefault extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_location_default}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'item_id_m', 'priority', 'subinventory_id', 'locator_id', 'address_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['default_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'item_id_m', 'priority', 'subinventory_id', 'locator_id'], 'unique', 'targetAttribute' => ['org_id', 'item_id_m', 'priority', 'subinventory_id', 'locator_id'], 'message' => 'The combination of Org ID, Item Id M, Priority, Subinventory ID and Locator ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_location_default_id' => Yii::t('app', 'Inv Location Default ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'priority' => Yii::t('app', 'Priority'),
            'default_type' => Yii::t('app', 'Default Type'),
            'description' => Yii::t('app', 'Description'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'address_id' => Yii::t('app', 'Address ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
