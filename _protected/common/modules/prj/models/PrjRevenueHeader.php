<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_revenue_header}}".
 *
 * @property integer $prj_revenue_header_id
 * @property integer $bu_org_id
 * @property string $revenue_status
 * @property integer $unearned_coa_id
 * @property integer $unbilled_coa_id
 * @property integer $revenue_coa_id
 * @property integer $prj_agreement_header_id
 * @property string $description
 * @property integer $prj_project_header_id
 * @property string $transfer_status
 * @property string $unearned_amount
 * @property string $unbilled_amount
 * @property string $revenue_amount
 * @property string $currency
 * @property string $doc_currency
 * @property string $revenue_number
 * @property string $exchange_rate_type
 * @property string $exchange_rate
 * @property string $release_date
 * @property string $rejection_reason
 * @property string $transfer_date
 * @property string $document_number
 * @property integer $ledger_id
 * @property integer $period_id
 * @property string $approval_status
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $gl_journal_header_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjRevenueHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_revenue_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'revenue_status', 'unbilled_coa_id', 'revenue_coa_id', 'prj_project_header_id', 'currency', 'doc_currency', 'exchange_rate_type', 'exchange_rate', 'ledger_id', 'period_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'unearned_coa_id', 'unbilled_coa_id', 'revenue_coa_id', 'prj_agreement_header_id', 'prj_project_header_id', 'ledger_id', 'period_id', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['unearned_amount', 'unbilled_amount', 'revenue_amount', 'exchange_rate'], 'number'],
            [['release_date', 'transfer_date', 'creation_date', 'last_update_date'], 'safe'],
            [['revenue_status', 'transfer_status'], 'string', 'max' => 15],
            [['description', 'currency'], 'string', 'max' => 256],
            [['doc_currency', 'revenue_number', 'approval_status', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['exchange_rate_type', 'document_number'], 'string', 'max' => 50],
            [['rejection_reason'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_revenue_header_id' => Yii::t('app', 'Prj Revenue Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'revenue_status' => Yii::t('app', 'Revenue Status'),
            'unearned_coa_id' => Yii::t('app', 'Unearned Coa ID'),
            'unbilled_coa_id' => Yii::t('app', 'Unbilled Coa ID'),
            'revenue_coa_id' => Yii::t('app', 'Revenue Coa ID'),
            'prj_agreement_header_id' => Yii::t('app', 'Prj Agreement Header ID'),
            'description' => Yii::t('app', 'Description'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'transfer_status' => Yii::t('app', 'Transfer Status'),
            'unearned_amount' => Yii::t('app', 'Unearned Amount'),
            'unbilled_amount' => Yii::t('app', 'Unbilled Amount'),
            'revenue_amount' => Yii::t('app', 'Revenue Amount'),
            'currency' => Yii::t('app', 'Currency'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'revenue_number' => Yii::t('app', 'Revenue Number'),
            'exchange_rate_type' => Yii::t('app', 'Exchange Rate Type'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'release_date' => Yii::t('app', 'Release Date'),
            'rejection_reason' => Yii::t('app', 'Rejection Reason'),
            'transfer_date' => Yii::t('app', 'Transfer Date'),
            'document_number' => Yii::t('app', 'Document Number'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'approval_status' => Yii::t('app', 'Approval Status'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
