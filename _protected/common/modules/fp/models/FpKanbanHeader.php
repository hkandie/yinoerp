<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_header}}".
 *
 * @property string $fp_kanban_header_id
 * @property integer $org_id
 * @property string $description
 * @property integer $item_id_m
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $subinventory_id
 * @property integer $locator_id
 * @property string $source_type
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property integer $from_org_id
 * @property integer $from_subinventory_id
 * @property integer $from_locator_id
 * @property integer $planning_only_cb
 * @property integer $auto_request_cb
 * @property string $calculate
 * @property string $card_size
 * @property integer $noof_card
 * @property string $moq
 * @property integer $lead_time
 * @property string $allocation_per
 * @property integer $flm
 * @property integer $ssd
 * @property string $rfid_reference
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpKanbanHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'item_id_m', 'subinventory_id', 'source_type', 'calculate', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'item_id_m', 'subinventory_id', 'locator_id', 'supplier_id', 'supplier_site_id', 'from_org_id', 'from_subinventory_id', 'from_locator_id', 'planning_only_cb', 'auto_request_cb', 'noof_card', 'lead_time', 'flm', 'ssd', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['card_size', 'moq', 'allocation_per'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['source_type', 'calculate'], 'string', 'max' => 25],
            [['rfid_reference'], 'string', 'max' => 100],
            [['org_id', 'item_id_m', 'subinventory_id'], 'unique', 'targetAttribute' => ['org_id', 'item_id_m', 'subinventory_id'], 'message' => 'The combination of Org ID, Item Id M and Subinventory ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_kanban_header_id' => Yii::t('app', 'Fp Kanban Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'description' => Yii::t('app', 'Description'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'subinventory_id' => Yii::t('app', 'Subinventory ID'),
            'locator_id' => Yii::t('app', 'Locator ID'),
            'source_type' => Yii::t('app', 'Source Type'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'from_org_id' => Yii::t('app', 'From Org ID'),
            'from_subinventory_id' => Yii::t('app', 'From Subinventory ID'),
            'from_locator_id' => Yii::t('app', 'From Locator ID'),
            'planning_only_cb' => Yii::t('app', 'Planning Only Cb'),
            'auto_request_cb' => Yii::t('app', 'Auto Request Cb'),
            'calculate' => Yii::t('app', 'Calculate'),
            'card_size' => Yii::t('app', 'Card Size'),
            'noof_card' => Yii::t('app', 'Noof Card'),
            'moq' => Yii::t('app', 'Moq'),
            'lead_time' => Yii::t('app', 'Lead Time'),
            'allocation_per' => Yii::t('app', 'Allocation Per'),
            'flm' => Yii::t('app', 'Flm'),
            'ssd' => Yii::t('app', 'Ssd'),
            'rfid_reference' => Yii::t('app', 'Rfid Reference'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
