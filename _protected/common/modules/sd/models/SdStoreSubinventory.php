<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_store_subinventory}}".
 *
 * @property string $sd_store_subinventory_id
 * @property integer $sd_store_id
 * @property integer $subinventory_id
 * @property string $floor_number
 * @property string $building_number
 * @property string $wing_number
 * @property string $description
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdStoreSubinventory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_store_subinventory}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sd_store_id', 'subinventory_id', 'created_by', 'last_update_by'], 'required'],
            [['sd_store_id', 'subinventory_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['floor_number'], 'string', 'max' => 10],
            [['building_number', 'wing_number'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 200],
            [['status'], 'string', 'max' => 50],
            [['sd_store_id', 'subinventory_id'], 'unique', 'targetAttribute' => ['sd_store_id', 'subinventory_id'], 'message' => 'The combination of Sd Store ID and Subinventory ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_store_subinventory_id' => Yii::t('app', 'Sd Store Subinventory ID'),
            'sd_store_id' => Yii::t('app', 'Sd Store ID'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'floor_number' => Yii::t('app', 'Floor Number'),
            'building_number' => Yii::t('app', 'Building Number'),
            'wing_number' => Yii::t('app', 'Wing Number'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
