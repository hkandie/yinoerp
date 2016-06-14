<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_count_entries_v}}".
 *
 * @property integer $inv_count_entries_id
 * @property integer $inv_count_schedule_id
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property integer $org_id
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $lot_number
 * @property string $serial_number
 * @property string $schedule_date
 * @property integer $adjustment_ac_id
 * @property string $status
 * @property string $reason
 * @property string $reference
 * @property string $counted_by
 * @property string $count_date
 * @property string $count_qty
 * @property string $system_qty
 * @property string $adjusted_qty
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $item_number
 * @property string $item_description
 * @property string $subinventory
 * @property string $locator
 * @property string $uom_name
 * @property string $org
 */
class InvCountEntriesV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_count_entries_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_count_entries_id', 'inv_count_schedule_id', 'item_id_m', 'uom_id', 'org_id', 'subinventory_id', 'locator_id', 'adjustment_ac_id', 'created_by', 'last_update_by'], 'integer'],
            [['item_id_m', 'uom_id', 'org_id', 'schedule_date', 'status', 'counted_by', 'count_date', 'count_qty', 'system_qty', 'adjusted_qty', 'created_by', 'last_update_by'], 'required'],
            [['schedule_date', 'count_date', 'creation_date', 'last_update_date'], 'safe'],
            [['count_qty', 'system_qty', 'adjusted_qty'], 'number'],
            [['lot_number', 'serial_number', 'item_number', 'org'], 'string', 'max' => 50],
            [['status', 'subinventory', 'uom_name'], 'string', 'max' => 25],
            [['reason', 'reference', 'counted_by', 'description', 'item_description', 'locator'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_count_entries_id' => Yii::t('app', 'Inv Count Entries ID'),
            'inv_count_schedule_id' => Yii::t('app', 'Inv Count Schedule ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'lot_number' => Yii::t('app', 'Lot Number'),
            'serial_number' => Yii::t('app', 'Serial Number'),
            'schedule_date' => Yii::t('app', 'Schedule Date'),
            'adjustment_ac_id' => Yii::t('app', 'Adjustment Ac ID'),
            'status' => Yii::t('app', 'Status'),
            'reason' => Yii::t('app', 'Reason'),
            'reference' => Yii::t('app', 'Reference'),
            'counted_by' => Yii::t('app', 'Counted By'),
            'count_date' => Yii::t('app', 'Count Date'),
            'count_qty' => Yii::t('app', 'Count Qty'),
            'system_qty' => Yii::t('app', 'System Qty'),
            'adjusted_qty' => Yii::t('app', 'Adjusted Qty'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'subinventory' => Yii::t('app', 'Subinventory'),
            'locator' => Yii::t('app', 'Locator'),
            'uom_name' => Yii::t('app', 'Uom Name'),
            'org' => Yii::t('app', 'Org'),
        ];
    }
}
