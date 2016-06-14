<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_journal_interface}}".
 *
 * @property integer $gl_journal_interface_id
 * @property integer $ledger_id
 * @property string $currency
 * @property string $document_date
 * @property integer $period_id
 * @property string $journal_source
 * @property string $journal_category
 * @property string $journal_name
 * @property string $description
 * @property string $balance_type
 * @property string $post_date
 * @property string $header_amount
 * @property string $doc_currency
 * @property string $exchange_type
 * @property string $exchange_date
 * @property string $exchange_rate
 * @property string $control_total
 * @property string $running_total_dr
 * @property string $running_total_cr
 * @property string $running_toatl_ac_dr
 * @property string $running_toatl_ac_cr
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $line_num
 * @property string $line_status
 * @property string $line_type
 * @property string $line_description
 * @property integer $code_combination_id
 * @property string $total_dr
 * @property string $total_cr
 * @property string $total_ac_dr
 * @property string $total_ac_cr
 * @property string $line_reference_type
 * @property string $line_reference_key_name
 * @property string $line_reference_key_value
 * @property integer $rev_enabled_cb
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $gl_journal_header_id
 * @property integer $gl_journal_line_id
 * @property integer $company_id
 */
class GlJournalInterface extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_journal_interface}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ledger_id', 'currency', 'period_id', 'journal_source', 'journal_category', 'balance_type', 'doc_currency', 'exchange_type', 'exchange_rate', 'line_status', 'code_combination_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['ledger_id', 'period_id', 'line_num', 'code_combination_id', 'rev_enabled_cb', 'rev_number', 'created_by', 'last_update_by', 'gl_journal_header_id', 'gl_journal_line_id', 'company_id'], 'integer'],
            [['document_date', 'post_date', 'exchange_date', 'control_total', 'creation_date', 'last_update_date'], 'safe'],
            [['header_amount', 'exchange_rate', 'running_total_dr', 'running_total_cr', 'running_toatl_ac_dr', 'running_toatl_ac_cr', 'total_dr', 'total_cr', 'total_ac_dr', 'total_ac_cr'], 'number'],
            [['currency', 'balance_type', 'reference_type', 'reference_key_name', 'reference_key_value', 'line_type', 'line_reference_type', 'line_reference_key_value'], 'string', 'max' => 25],
            [['journal_source', 'journal_category'], 'string', 'max' => 30],
            [['journal_name'], 'string', 'max' => 64],
            [['description'], 'string', 'max' => 256],
            [['doc_currency'], 'string', 'max' => 10],
            [['exchange_type'], 'string', 'max' => 15],
            [['line_status'], 'string', 'max' => 2],
            [['line_description'], 'string', 'max' => 255],
            [['line_reference_key_name'], 'string', 'max' => 50],
            [['ledger_id', 'document_date', 'line_reference_key_name', 'line_reference_key_value'], 'unique', 'targetAttribute' => ['ledger_id', 'document_date', 'line_reference_key_name', 'line_reference_key_value'], 'message' => 'The combination of Ledger ID, Document Date, Line Reference Key Name and Line Reference Key Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_journal_interface_id' => Yii::t('app', 'Gl Journal Interface ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'currency' => Yii::t('app', 'Currency'),
            'document_date' => Yii::t('app', 'Document Date'),
            'period_id' => Yii::t('app', 'Period ID'),
            'journal_source' => Yii::t('app', 'Journal Source'),
            'journal_category' => Yii::t('app', 'Journal Category'),
            'journal_name' => Yii::t('app', 'Journal Name'),
            'description' => Yii::t('app', 'Description'),
            'balance_type' => Yii::t('app', 'Balance Type'),
            'post_date' => Yii::t('app', 'Post Date'),
            'header_amount' => Yii::t('app', 'Header Amount'),
            'doc_currency' => Yii::t('app', 'Doc Currency'),
            'exchange_type' => Yii::t('app', 'Exchange Type'),
            'exchange_date' => Yii::t('app', 'Exchange Date'),
            'exchange_rate' => Yii::t('app', 'Exchange Rate'),
            'control_total' => Yii::t('app', 'Control Total'),
            'running_total_dr' => Yii::t('app', 'Running Total Dr'),
            'running_total_cr' => Yii::t('app', 'Running Total Cr'),
            'running_toatl_ac_dr' => Yii::t('app', 'Running Toatl Ac Dr'),
            'running_toatl_ac_cr' => Yii::t('app', 'Running Toatl Ac Cr'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'line_num' => Yii::t('app', 'Line Num'),
            'line_status' => Yii::t('app', 'Line Status'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'code_combination_id' => Yii::t('app', 'Code Combination ID'),
            'total_dr' => Yii::t('app', 'Total Dr'),
            'total_cr' => Yii::t('app', 'Total Cr'),
            'total_ac_dr' => Yii::t('app', 'Total Ac Dr'),
            'total_ac_cr' => Yii::t('app', 'Total Ac Cr'),
            'line_reference_type' => Yii::t('app', 'Line Reference Type'),
            'line_reference_key_name' => Yii::t('app', 'Line Reference Key Name'),
            'line_reference_key_value' => Yii::t('app', 'Line Reference Key Value'),
            'rev_enabled_cb' => Yii::t('app', 'Rev Enabled Cb'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'gl_journal_line_id' => Yii::t('app', 'Gl Journal Line ID'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
