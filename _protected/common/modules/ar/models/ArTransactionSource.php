<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_transaction_source}}".
 *
 * @property integer $ar_transaction_source_id
 * @property string $transaction_source
 * @property string $source_type
 * @property integer $bu_org_id
 * @property integer $legal_org_id
 * @property integer $invoice_type_id
 * @property string $description
 * @property integer $cm_type_id
 * @property integer $payment_term_id
 * @property string $status
 * @property integer $create_clearing_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class ArTransactionSource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_transaction_source}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transaction_source', 'source_type', 'bu_org_id', 'legal_org_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'legal_org_id', 'invoice_type_id', 'cm_type_id', 'payment_term_id', 'create_clearing_cb', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['transaction_source'], 'string', 'max' => 50],
            [['source_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['transaction_source', 'source_type'], 'unique', 'targetAttribute' => ['transaction_source', 'source_type'], 'message' => 'The combination of Transaction Source and Source Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_transaction_source_id' => Yii::t('app', 'Ar Transaction Source ID'),
            'transaction_source' => Yii::t('app', 'Transaction Source'),
            'source_type' => Yii::t('app', 'Source Type'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'legal_org_id' => Yii::t('app', 'Legal Org ID'),
            'invoice_type_id' => Yii::t('app', 'Invoice Type ID'),
            'description' => Yii::t('app', 'Description'),
            'cm_type_id' => Yii::t('app', 'Cm Type ID'),
            'payment_term_id' => Yii::t('app', 'Payment Term ID'),
            'status' => Yii::t('app', 'Status'),
            'create_clearing_cb' => Yii::t('app', 'Create Clearing Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
