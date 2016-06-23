<?php

namespace common\modules\item\models;

use Yii;

/**
 * This is the model class for table "item_status".
 *
 * @property string $item_status_id
 * @property string $code
 * @property integer $active
 * @property string $description
 * @property integer $inventory_item
 * @property integer $transactable
 * @property integer $reservable
 * @property integer $costing_enabled
 * @property integer $customer_ordered
 * @property integer $purchased
 * @property integer $build_in_wip
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ItemStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'item_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'active', 'purchased', 'build_in_wip', 'created_by', 'last_update_by'], 'required'],
            [['active', 'inventory_item', 'transactable', 'reservable', 'costing_enabled', 'customer_ordered', 'purchased', 'build_in_wip', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['code'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 200],
            [['rev_enabled'], 'string', 'max' => 20],
            [['active'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'item_status_id' => Yii::t('app', 'Item Status ID'),
            'code' => Yii::t('app', 'Code'),
            'active' => Yii::t('app', 'Active'),
            'description' => Yii::t('app', 'Description'),
            'inventory_item' => Yii::t('app', 'Inventory Item'),
            'transactable' => Yii::t('app', 'Transactable'),
            'reservable' => Yii::t('app', 'Reservable'),
            'costing_enabled' => Yii::t('app', 'Costing Enabled'),
            'customer_ordered' => Yii::t('app', 'Customer Ordered'),
            'purchased' => Yii::t('app', 'Purchased'),
            'build_in_wip' => Yii::t('app', 'Build In Wip'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
