<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_trasaction}}".
 *
 * @property string $fa_asset_trasaction_id
 * @property integer $fa_asset_id
 * @property integer $transaction_type_id
 * @property string $quantity
 * @property string $amount
 * @property string $description
 * @property string $status
 * @property string $reference
 * @property integer $accounted_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetTrasaction extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_trasaction}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_id', 'transaction_type_id', 'accounted_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 25],
            [['reference'], 'string', 'max' => 50],
            [['fa_asset_id'], 'unique'],
            [['transaction_type_id'], 'unique'],
            [['fa_asset_id', 'quantity'], 'unique', 'targetAttribute' => ['fa_asset_id', 'quantity'], 'message' => 'The combination of Fa Asset ID and Quantity has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_trasaction_id' => Yii::t('app', 'Fa Asset Trasaction ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'amount' => Yii::t('app', 'Amount'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'reference' => Yii::t('app', 'Reference'),
            'accounted_cb' => Yii::t('app', 'Accounted Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
