<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_wol_transaction}}".
 *
 * @property integer $wip_wol_transaction_id
 * @property integer $item_id_m
 * @property string $description
 * @property string $revision_name
 * @property integer $org_id
 * @property integer $wip_accounting_group_id
 * @property integer $transaction_type_id
 * @property string $transaction_status
 * @property string $start_date
 * @property string $completion_date
 * @property string $quantity
 * @property integer $reference_bom_item_id_m
 * @property integer $reference_routing_item_id_m
 * @property integer $completion_sub_inventory
 * @property integer $completion_locator
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipWolTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_wol_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'wip_accounting_group_id', 'transaction_type_id', 'start_date', 'quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'org_id', 'wip_accounting_group_id', 'transaction_type_id', 'reference_bom_item_id_m', 'reference_routing_item_id_m', 'completion_sub_inventory', 'completion_locator', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'completion_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity'], 'number'],
            [['description'], 'string', 'max' => 256],
            [['revision_name'], 'string', 'max' => 10],
            [['transaction_status'], 'string', 'max' => 50],
            [['description'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_wol_transaction_id' => Yii::t('app', 'Wip Wol Transaction ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'description' => Yii::t('app', 'Description'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'org_id' => Yii::t('app', 'Org ID'),
            'wip_accounting_group_id' => Yii::t('app', 'Wip Accounting Group ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'transaction_status' => Yii::t('app', 'Transaction Status'),
            'start_date' => Yii::t('app', 'Start Date'),
            'completion_date' => Yii::t('app', 'Completion Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'reference_bom_item_id_m' => Yii::t('app', 'Reference Bom Item Id M'),
            'reference_routing_item_id_m' => Yii::t('app', 'Reference Routing Item Id M'),
            'completion_sub_inventory' => Yii::t('app', 'Completion Sub Inventory'),
            'completion_locator' => Yii::t('app', 'Completion Locator'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
