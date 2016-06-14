<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_count_schedule}}".
 *
 * @property integer $inv_count_schedule_id
 * @property integer $inv_count_header_id
 * @property integer $item_id_m
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $lot_number
 * @property string $serial_number
 * @property string $schedule_date
 * @property integer $zero_count_cb
 * @property string $status
 * @property string $abc_code
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvCountSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_count_schedule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_count_header_id', 'item_id_m', 'schedule_date', 'created_by', 'last_update_by'], 'required'],
            [['inv_count_header_id', 'item_id_m', 'subinventory_id', 'locator_id', 'zero_count_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['schedule_date', 'creation_date', 'last_update_date'], 'safe'],
            [['lot_number', 'serial_number'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 25],
            [['abc_code'], 'string', 'max' => 2],
            [['description'], 'string', 'max' => 256],
            [['inv_count_header_id', 'item_id_m', 'subinventory_id', 'locator_id', 'schedule_date'], 'unique', 'targetAttribute' => ['inv_count_header_id', 'item_id_m', 'subinventory_id', 'locator_id', 'schedule_date'], 'message' => 'The combination of Inv Count Header ID, Item Id M, Subinventory ID, Locator ID and Schedule Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_count_schedule_id' => Yii::t('app', 'Inv Count Schedule ID'),
            'inv_count_header_id' => Yii::t('app', 'Inv Count Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'lot_number' => Yii::t('app', 'Lot Number'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'schedule_date' => Yii::t('app', 'Schedule Date'),
            'zero_count_cb' => Yii::t('app', 'Zero Count Cb'),
            'status' => Yii::t('app', 'Status'),
            'abc_code' => Yii::t('app', 'Abc Code'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
