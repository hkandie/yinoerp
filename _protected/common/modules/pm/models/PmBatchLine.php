<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_batch_line}}".
 *
 * @property string $pm_batch_line_id
 * @property integer $pm_batch_header_id
 * @property integer $line_no
 * @property string $line_type
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property string $planned_quantity
 * @property string $wip_planned_quantity
 * @property string $actual_quantity
 * @property string $allocated_qty
 * @property string $yield_date
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $description
 * @property string $scale_type
 * @property string $yield_type
 * @property integer $cost_allocation_cb
 * @property integer $step_no
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmBatchLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_batch_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_batch_header_id', 'line_no', 'item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['pm_batch_header_id', 'line_no', 'item_id_m', 'uom_id', 'subinventory_id', 'locator_id', 'cost_allocation_cb', 'step_no', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['planned_quantity', 'wip_planned_quantity', 'allocated_qty'], 'number'],
            [['yield_date', 'creation_date', 'last_update_date'], 'safe'],
            [['line_type', 'actual_quantity', 'scale_type', 'yield_type'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 256],
            [['pm_batch_header_id', 'item_id_m'], 'unique', 'targetAttribute' => ['pm_batch_header_id', 'item_id_m'], 'message' => 'The combination of Pm Batch Header ID and Item Id M has already been taken.'],
            [['pm_batch_header_id', 'line_no'], 'unique', 'targetAttribute' => ['pm_batch_header_id', 'line_no'], 'message' => 'The combination of Pm Batch Header ID and Line No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_batch_line_id' => Yii::t('app', 'Pm Batch Line ID'),
            'pm_batch_header_id' => Yii::t('app', 'Pm Batch Header ID'),
            'line_no' => Yii::t('app', 'Line No'),
            'line_type' => Yii::t('app', 'Line Type'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'planned_quantity' => Yii::t('app', 'Planned Quantity'),
            'wip_planned_quantity' => Yii::t('app', 'Wip Planned Quantity'),
            'actual_quantity' => Yii::t('app', 'Actual Quantity'),
            'allocated_qty' => Yii::t('app', 'Allocated Qty'),
            'yield_date' => Yii::t('app', 'Yield Date'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'description' => Yii::t('app', 'Description'),
            'scale_type' => Yii::t('app', 'Scale Type'),
            'yield_type' => Yii::t('app', 'Yield Type'),
            'cost_allocation_cb' => Yii::t('app', 'Cost Allocation Cb'),
            'step_no' => Yii::t('app', 'Step No'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
