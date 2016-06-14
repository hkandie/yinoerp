<?php

namespace common\modules\wip\models;

use Yii;

/**
 * This is the model class for table "{{%wip_resource_transaction}}".
 *
 * @property integer $wip_resource_transaction_id
 * @property string $wip_wo_header_id
 * @property string $wip_wo_routing_line_id
 * @property string $wip_wo_routing_detail_id
 * @property string $org_id
 * @property string $transaction_type
 * @property string $transaction_date
 * @property string $transaction_quantity
 * @property string $reason
 * @property string $reference
 * @property integer $scrap_account_id
 * @property integer $sales_order_header_id
 * @property integer $sales_order_line_id
 * @property integer $gl_journal_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class WipResourceTransaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%wip_resource_transaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['wip_wo_header_id', 'wip_wo_routing_line_id', 'wip_wo_routing_detail_id', 'org_id', 'transaction_type', 'transaction_date', 'transaction_quantity', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['wip_wo_header_id', 'wip_wo_routing_line_id', 'wip_wo_routing_detail_id', 'org_id', 'scrap_account_id', 'sales_order_header_id', 'sales_order_line_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['transaction_date', 'creation_date', 'last_update_date'], 'safe'],
            [['transaction_quantity'], 'number'],
            [['transaction_type'], 'string', 'max' => 50],
            [['reason', 'reference'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'wip_resource_transaction_id' => Yii::t('app', 'Wip Resource Transaction ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'wip_wo_routing_line_id' => Yii::t('app', 'Wip Wo Routing Line ID'),
            'wip_wo_routing_detail_id' => Yii::t('app', 'Wip Wo Routing Detail ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'transaction_date' => Yii::t('app', 'Transaction Date'),
            'transaction_quantity' => Yii::t('app', 'Transaction Quantity'),
            'reason' => Yii::t('app', 'Reason'),
            'reference' => Yii::t('app', 'Reference'),
            'scrap_account_id' => Yii::t('app', 'Scrap Account ID'),
            'sales_order_header_id' => Yii::t('app', 'Sales Order Header ID'),
            'sales_order_line_id' => Yii::t('app', 'Sales Order Line ID'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
