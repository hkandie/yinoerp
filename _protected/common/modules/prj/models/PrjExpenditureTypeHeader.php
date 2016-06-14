<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_expenditure_type_header}}".
 *
 * @property string $prj_expenditure_type_header_id
 * @property string $expenditure_type
 * @property string $description
 * @property string $expenditure_category
 * @property string $effective_from
 * @property string $effective_to
 * @property string $revenue_category
 * @property integer $uom_id
 * @property integer $direct_labor_cb
 * @property integer $inventory_cb
 * @property integer $burden_cb
 * @property integer $expense_reports_cb
 * @property integer $misc_transaction_cb
 * @property integer $over_time_cb
 * @property integer $invoice_cb
 * @property integer $usages_cb
 * @property integer $wip_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjExpenditureTypeHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_expenditure_type_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['expenditure_type', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['uom_id', 'direct_labor_cb', 'inventory_cb', 'burden_cb', 'expense_reports_cb', 'misc_transaction_cb', 'over_time_cb', 'invoice_cb', 'usages_cb', 'wip_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['expenditure_type', 'expenditure_category', 'revenue_category'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['expenditure_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_expenditure_type_header_id' => Yii::t('app', 'Prj Expenditure Type Header ID'),
            'expenditure_type' => Yii::t('app', 'Expenditure Type'),
            'description' => Yii::t('app', 'Description'),
            'expenditure_category' => Yii::t('app', 'Expenditure Category'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'revenue_category' => Yii::t('app', 'Revenue Category'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'direct_labor_cb' => Yii::t('app', 'Direct Labor Cb'),
            'inventory_cb' => Yii::t('app', 'Inventory Cb'),
            'burden_cb' => Yii::t('app', 'Burden Cb'),
            'expense_reports_cb' => Yii::t('app', 'Expense Reports Cb'),
            'misc_transaction_cb' => Yii::t('app', 'Misc Transaction Cb'),
            'over_time_cb' => Yii::t('app', 'Over Time Cb'),
            'invoice_cb' => Yii::t('app', 'Invoice Cb'),
            'usages_cb' => Yii::t('app', 'Usages Cb'),
            'wip_cb' => Yii::t('app', 'Wip Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
