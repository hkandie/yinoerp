<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_invoice_line}}".
 *
 * @property integer $prj_invoice_line_id
 * @property integer $prj_invoice_header_id
 * @property integer $prj_project_line_id
 * @property string $revenue_category
 * @property string $expenditure_category
 * @property string $revenue_source
 * @property integer $line_number
 * @property string $description
 * @property string $amount
 * @property string $release_date
 * @property string $rejection_reason
 * @property string $transfer_date
 * @property string $document_number
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
class PrjInvoiceLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_invoice_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_invoice_header_id', 'line_number', 'created_by', 'last_update_by'], 'required'],
            [['prj_invoice_header_id', 'prj_project_line_id', 'line_number', 'gl_journal_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['amount'], 'number'],
            [['release_date', 'transfer_date', 'creation_date', 'last_update_date'], 'safe'],
            [['revenue_category', 'expenditure_category', 'revenue_source', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['rejection_reason'], 'string', 'max' => 255],
            [['document_number'], 'string', 'max' => 50],
            [['revenue_source'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_invoice_line_id' => Yii::t('app', 'Prj Invoice Line ID'),
            'prj_invoice_header_id' => Yii::t('app', 'Prj Invoice Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'revenue_category' => Yii::t('app', 'Revenue Category'),
            'expenditure_category' => Yii::t('app', 'Expenditure Category'),
            'revenue_source' => Yii::t('app', 'Revenue Source'),
            'line_number' => Yii::t('app', 'Line Number'),
            'description' => Yii::t('app', 'Description'),
            'amount' => Yii::t('app', 'Amount'),
            'release_date' => Yii::t('app', 'Release Date'),
            'rejection_reason' => Yii::t('app', 'Rejection Reason'),
            'transfer_date' => Yii::t('app', 'Transfer Date'),
            'document_number' => Yii::t('app', 'Document Number'),
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
