<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_batch_ingredient}}".
 *
 * @property string $pm_batch_ingredient_id
 * @property integer $pm_batch_header_id
 * @property integer $line_no
 * @property string $revision_name
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property string $planned_quantity
 * @property string $description
 * @property string $wip_planned_quantity
 * @property string $scale_type
 * @property integer $contribute_yield_cb
 * @property string $byproduct_type
 * @property string $consumption_type
 * @property string $phantom_type
 * @property string $allocated_quantity
 * @property string $actual_quantity
 * @property string $requirement_date
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property integer $step_no
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmBatchIngredient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_batch_ingredient}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_batch_header_id', 'line_no', 'created_by', 'last_update_by'], 'required'],
            [['pm_batch_header_id', 'line_no', 'item_id_m', 'uom_id', 'contribute_yield_cb', 'subinventory_id', 'locator_id', 'step_no', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['planned_quantity', 'wip_planned_quantity', 'allocated_quantity', 'actual_quantity'], 'number'],
            [['requirement_date', 'creation_date', 'last_update_date'], 'safe'],
            [['revision_name', 'scale_type', 'byproduct_type', 'consumption_type', 'phantom_type'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 256],
            [['pm_batch_header_id', 'line_no'], 'unique', 'targetAttribute' => ['pm_batch_header_id', 'line_no'], 'message' => 'The combination of Pm Batch Header ID and Line No has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_batch_ingredient_id' => Yii::t('app', 'Pm Batch Ingredient ID'),
            'pm_batch_header_id' => Yii::t('app', 'Pm Batch Header ID'),
            'line_no' => Yii::t('app', 'Line No'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'planned_quantity' => Yii::t('app', 'Planned Quantity'),
            'description' => Yii::t('app', 'Description'),
            'wip_planned_quantity' => Yii::t('app', 'Wip Planned Quantity'),
            'scale_type' => Yii::t('app', 'Scale Type'),
            'contribute_yield_cb' => Yii::t('app', 'Contribute Yield Cb'),
            'byproduct_type' => Yii::t('app', 'Byproduct Type'),
            'consumption_type' => Yii::t('app', 'Consumption Type'),
            'phantom_type' => Yii::t('app', 'Phantom Type'),
            'allocated_quantity' => Yii::t('app', 'Allocated Quantity'),
            'actual_quantity' => Yii::t('app', 'Actual Quantity'),
            'requirement_date' => Yii::t('app', 'Requirement Date'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'step_no' => Yii::t('app', 'Step No'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
