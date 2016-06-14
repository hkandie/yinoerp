<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_kanban_line_v}}".
 *
 * @property string $fp_kanban_line_id
 * @property integer $fp_kanban_header_id
 * @property string $description
 * @property string $card_number
 * @property string $card_status
 * @property string $supply_status
 * @property string $kanban_size
 * @property string $card_type
 * @property integer $org_id
 * @property string $kbh_description
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
 * @property string $item_number
 * @property string $item_description
 * @property integer $uom_id
 * @property string $list_price
 * @property integer $sourcing_rule_id
 * @property string $lead_time
 * @property string $subinventory
 * @property string $locator
 * @property string $org
 * @property string $bu_org_id
 */
class FpKanbanLineV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_kanban_line_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_kanban_line_id', 'fp_kanban_header_id', 'org_id', 'item_id_m', 'subinventory_id', 'locator_id', 'supplier_id', 'supplier_site_id', 'from_org_id', 'from_subinventory_id', 'from_locator_id', 'uom_id', 'sourcing_rule_id', 'lead_time', 'bu_org_id'], 'integer'],
            [['fp_kanban_header_id', 'card_type', 'org_id', 'item_id_m', 'subinventory_id', 'source_type', 'item_number', 'uom_id', 'org'], 'required'],
            [['kanban_size', 'list_price'], 'number'],
            [['effective_from', 'effective_to'], 'safe'],
            [['description', 'kbh_description'], 'string', 'max' => 255],
            [['card_number', 'card_status', 'supply_status', 'card_type', 'source_type', 'subinventory'], 'string', 'max' => 25],
            [['item_number', 'org'], 'string', 'max' => 50],
            [['item_description', 'locator'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_kanban_line_id' => Yii::t('app', 'Fp Kanban Line ID'),
            'fp_kanban_header_id' => Yii::t('app', 'Fp Kanban Header ID'),
            'description' => Yii::t('app', 'Description'),
            'card_number' => Yii::t('app', 'Card Number'),
            'card_status' => Yii::t('app', 'Card Status'),
            'supply_status' => Yii::t('app', 'Supply Status'),
            'kanban_size' => Yii::t('app', 'Kanban Size'),
            'card_type' => Yii::t('app', 'Card Type'),
            'org_id' => Yii::t('app', 'Org ID'),
            'kbh_description' => Yii::t('app', 'Kbh Description'),
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
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'list_price' => Yii::t('app', 'List Price'),
            'sourcing_rule_id' => Yii::t('app', 'Sourcing Rule ID'),
            'lead_time' => Yii::t('app', 'Lead Time'),
            'subinventory' => Yii::t('app', 'Subinventory'),
            'locator' => Yii::t('app', 'Locator'),
            'org' => Yii::t('app', 'Org'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
        ];
    }
}
