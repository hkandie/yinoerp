<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_receipt_source}}".
 *
 * @property integer $ar_receipt_source_id
 * @property string $receipt_source
 * @property string $receipt_type
 * @property string $creation_method
 * @property integer $bu_org_id
 * @property string $description
 * @property string $remittance
 * @property string $clearance
 * @property integer $bank_account_id
 * @property integer $sync_receipt_number_cb
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class ArReceiptSource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_receipt_source}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['receipt_source', 'receipt_type', 'creation_method', 'bu_org_id', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'bank_account_id', 'sync_receipt_number_cb', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['receipt_source'], 'string', 'max' => 50],
            [['receipt_type', 'creation_method', 'remittance', 'clearance'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['receipt_source', 'creation_method'], 'unique', 'targetAttribute' => ['receipt_source', 'creation_method'], 'message' => 'The combination of Receipt Source and Creation Method has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_receipt_source_id' => Yii::t('app', 'Ar Receipt Source ID'),
            'receipt_source' => Yii::t('app', 'Receipt Source'),
            'receipt_type' => Yii::t('app', 'Receipt Type'),
            'creation_method' => Yii::t('app', 'Creation Method'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'description' => Yii::t('app', 'Description'),
            'remittance' => Yii::t('app', 'Remittance'),
            'clearance' => Yii::t('app', 'Clearance'),
            'bank_account_id' => Yii::t('app', 'Bank Account ID'),
            'sync_receipt_number_cb' => Yii::t('app', 'Sync Receipt Number Cb'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
