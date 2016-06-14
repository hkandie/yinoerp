<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_expenditure_header}}".
 *
 * @property string $prj_expenditure_header_id
 * @property integer $bu_org_id
 * @property string $batch_name
 * @property string $description
 * @property string $expenditure_class
 * @property string $effective_to
 * @property string $status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $submitted_by_user_id
 * @property string $submitted_on
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
class PrjExpenditureHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_expenditure_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'submitted_by_user_id', 'misc_transaction_cb', 'over_time_cb', 'invoice_cb', 'usages_cb', 'wip_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_to', 'submitted_on', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by'], 'required'],
            [['batch_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['expenditure_class', 'status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['batch_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_expenditure_header_id' => Yii::t('app', 'Prj Expenditure Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'batch_name' => Yii::t('app', 'Batch Name'),
            'description' => Yii::t('app', 'Description'),
            'expenditure_class' => Yii::t('app', 'Expenditure Class'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'status' => Yii::t('app', 'Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'submitted_by_user_id' => Yii::t('app', 'Submitted By User ID'),
            'submitted_on' => Yii::t('app', 'Submitted On'),
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
