<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_routing_v}}".
 *
 * @property integer $bom_routing_header_id
 * @property integer $item_id_m
 * @property string $alternate_routing
 * @property integer $org_id
 * @property string $routing_revision
 * @property string $effective_date
 * @property integer $common_routing_item_id_m
 * @property integer $description
 * @property integer $completion_subinventory
 * @property integer $completion_locator
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $item_number
 * @property string $item_description
 * @property integer $uom_id
 * @property string $item_type
 * @property string $item_status
 * @property string $bom_type
 * @property integer $costing_enabled_cb
 * @property string $make_buy
 * @property string $org
 * @property string $type
 * @property string $status
 * @property string $org_description
 * @property string $code
 * @property string $subinventory
 * @property string $locator
 */
class BomRoutingV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_routing_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_routing_header_id', 'item_id_m', 'org_id', 'common_routing_item_id_m', 'description', 'completion_subinventory', 'completion_locator', 'ef_id', 'created_by', 'last_update_by', 'uom_id', 'costing_enabled_cb'], 'integer'],
            [['item_id_m', 'org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['effective_date', 'creation_date', 'last_update_date'], 'safe'],
            [['alternate_routing', 'item_number', 'org', 'type', 'status'], 'string', 'max' => 50],
            [['routing_revision', 'make_buy'], 'string', 'max' => 10],
            [['item_description', 'locator'], 'string', 'max' => 256],
            [['item_type'], 'string', 'max' => 20],
            [['item_status', 'bom_type'], 'string', 'max' => 15],
            [['org_description'], 'string', 'max' => 200],
            [['code'], 'string', 'max' => 5],
            [['subinventory'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_routing_header_id' => Yii::t('app', 'Bom Routing Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'alternate_routing' => Yii::t('app', 'Alternate Routing'),
            'org_id' => Yii::t('app', 'Org ID'),
            'routing_revision' => Yii::t('app', 'Routing Revision'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'common_routing_item_id_m' => Yii::t('app', 'Common Routing Item Id M'),
            'description' => Yii::t('app', 'Description'),
            'completion_subinventory' => Yii::t('app', 'Completion Subinventory'),
            'completion_locator' => Yii::t('app', 'Completion Locator'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'item_type' => Yii::t('app', 'Item Type'),
            'item_status' => Yii::t('app', 'Item Status'),
            'bom_type' => Yii::t('app', 'Bom Type'),
            'costing_enabled_cb' => Yii::t('app', 'Costing Enabled Cb'),
            'make_buy' => Yii::t('app', 'Make Buy'),
            'org' => Yii::t('app', 'Org'),
            'type' => Yii::t('app', 'Type'),
            'status' => Yii::t('app', 'Status'),
            'org_description' => Yii::t('app', 'Org Description'),
            'code' => Yii::t('app', 'Code'),
            'subinventory' => Yii::t('app', 'Subinventory'),
            'locator' => Yii::t('app', 'Locator'),
        ];
    }
}
