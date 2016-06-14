<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_wo_header}}".
 *
 * @property integer $wip_wo_header_id
 * @property integer $item_id_m
 * @property string $wo_number
 * @property string $revision_name
 * @property integer $org_id
 * @property integer $wip_accounting_group_id
 * @property integer $wo_type
 * @property string $wo_status
 * @property string $start_date
 * @property string $completion_date
 * @property string $quantity
 * @property string $nettable_quantity
 * @property integer $reference_bom_item_id_m
 * @property integer $bom_exploded_cb
 * @property integer $routing_exploded_cb
 * @property integer $reference_routing_item_id_m
 * @property integer $completion_sub_inventory
 * @property integer $completion_locator
 * @property string $completed_quantity
 * @property string $scrapped_quantity
 * @property string $released_date
 * @property string $first_unit_completed_date
 * @property string $last_unit_completed_date
 * @property string $schedule_group
 * @property integer $build_sequence
 * @property string $line
 * @property integer $scheduling_priority
 * @property string $closed_date
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipWoHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_wo_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'wip_accounting_group_id', 'wo_type', 'start_date', 'quantity', 'nettable_quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'org_id', 'wip_accounting_group_id', 'wo_type', 'reference_bom_item_id_m', 'bom_exploded_cb', 'routing_exploded_cb', 'reference_routing_item_id_m', 'completion_sub_inventory', 'completion_locator', 'build_sequence', 'scheduling_priority', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'completion_date', 'released_date', 'first_unit_completed_date', 'last_unit_completed_date', 'closed_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity', 'nettable_quantity', 'completed_quantity', 'scrapped_quantity'], 'number'],
            [['wo_number', 'wo_status'], 'string', 'max' => 50],
            [['revision_name'], 'string', 'max' => 10],
            [['schedule_group', 'line'], 'string', 'max' => 20],
            [['wo_number'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'wo_number' => Yii::t('app', 'Wo Number'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'wo_type' => Yii::t('app', 'Wo Type'),
            'wo_status' => Yii::t('app', 'Wo Status'),
            'start_date' => Yii::t('app', 'Start Date'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'nettable_quantity' => Yii::t('app', 'Nettable Quantity'),
            'reference_bom_item_id_m' => Yii::t('app', 'Reference Bom Item Id M'),
            'bom_exploded_cb' => Yii::t('app', 'Bom Exploded Cb'),
            'routing_exploded_cb' => Yii::t('app', 'Routing Exploded Cb'),
            'reference_routing_item_id_m' => Yii::t('app', 'Reference Routing Item Id M'),
            'completion_sub_inventory' => Yii::t('app', 'Completion Sub Inventory'),
            'completion_locator' => Yii::t('app', 'Completion Locator'),
            'completed_quantity' => Yii::t('app', 'Completed Quantity'),
            'scrapped_quantity' => Yii::t('app', 'Scrapped Quantity'),
            'released_date' => Yii::t('app', 'Released Date'),
            'first_unit_completed_date' => Yii::t('app', 'First Unit Completed Date'),
            'last_unit_completed_date' => Yii::t('app', 'Last Unit Completed Date'),
            'schedule_group' => Yii::t('app', 'Schedule Group'),
            'build_sequence' => Yii::t('app', 'Build Sequence'),
            'line' => Yii::t('app', 'Line'),
            'scheduling_priority' => Yii::t('app', 'Scheduling Priority'),
            'closed_date' => Yii::t('app', 'Closed Date'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
