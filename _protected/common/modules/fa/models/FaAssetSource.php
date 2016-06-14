<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_source}}".
 *
 * @property string $fa_asset_source_id
 * @property integer $fa_asset_id
 * @property string $source_type
 * @property integer $line_number
 * @property string $legacy_invoice_num
 * @property integer $ap_transaction_line_id
 * @property string $reference_bumber
 * @property integer $fa_distribution_line_id
 * @property integer $active_cb
 * @property string $line_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetSource extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_source}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_id', 'line_number', 'ap_transaction_line_id', 'fa_distribution_line_id', 'active_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['line_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['source_type'], 'string', 'max' => 15],
            [['legacy_invoice_num'], 'string', 'max' => 40],
            [['reference_bumber'], 'string', 'max' => 50],
            [['fa_asset_id', 'ap_transaction_line_id'], 'unique', 'targetAttribute' => ['fa_asset_id', 'ap_transaction_line_id'], 'message' => 'The combination of Fa Asset ID and Ap Transaction Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_source_id' => Yii::t('app', 'Fa Asset Source ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'source_type' => Yii::t('app', 'Source Type'),
            'line_number' => Yii::t('app', 'Line Number'),
            'legacy_invoice_num' => Yii::t('app', 'Legacy Invoice Num'),
            'ap_transaction_line_id' => Yii::t('app', 'Ap Transaction Line ID'),
            'reference_bumber' => Yii::t('app', 'Reference Bumber'),
            'fa_distribution_line_id' => Yii::t('app', 'Fa Distribution Line ID'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'line_amount' => Yii::t('app', 'Line Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
