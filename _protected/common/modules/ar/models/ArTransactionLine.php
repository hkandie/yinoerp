<?php

namespace common\modules\ar\models;

use Yii;

/**
 * This is the model class for table "{{%ar_transaction_line}}".
 *
 * @property integer $ar_transaction_line_id
 * @property integer $ar_transaction_header_id
 * @property integer $line_number
 * @property integer $item_id_m
 * @property string $item_description
 * @property string $inv_line_quantity
 * @property string $inv_unit_price
 * @property string $inv_line_price
 * @property integer $tax_code_id
 * @property string $tax_amount
 * @property string $gl_inv_line_price
 * @property string $gl_tax_amount
 * @property string $line_type
 * @property string $line_description
 * @property integer $asset_cb
 * @property integer $fa_asset_category_id
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property integer $uom_id
 * @property string $status
 * @property string $line_source
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $sd_so_header_id
 * @property integer $sd_so_line_id
 * @property integer $sd_so_detail_id
 * @property integer $period_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ArTransactionLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ar_transaction_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ar_transaction_header_id', 'line_number', 'item_description', 'line_type', 'created_by', 'last_update_by'], 'required'],
            [['ar_transaction_header_id', 'line_number', 'item_id_m', 'tax_code_id', 'asset_cb', 'fa_asset_category_id', 'prj_project_header_id', 'prj_project_line_id', 'uom_id', 'sd_so_header_id', 'sd_so_line_id', 'sd_so_detail_id', 'period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['inv_line_quantity', 'inv_unit_price', 'inv_line_price', 'tax_amount', 'gl_inv_line_price', 'gl_tax_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['item_description', 'line_description'], 'string', 'max' => 256],
            [['line_type', 'status'], 'string', 'max' => 50],
            [['line_source', 'reference_type', 'reference_key_name', 'reference_key_value'], 'string', 'max' => 25],
            [['ar_transaction_header_id', 'line_number'], 'unique', 'targetAttribute' => ['ar_transaction_header_id', 'line_number'], 'message' => 'The combination of Ar Transaction Header ID and Line Number has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ar_transaction_line_id' => Yii::t('app', 'Ar Transaction Line ID'),
            'ar_transaction_header_id' => Yii::t('app', 'Ar Transaction Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'item_description' => Yii::t('app', 'Item Description'),
            'inv_line_quantity' => Yii::t('app', 'Inv Line Quantity'),
            'inv_unit_price' => Yii::t('app', 'Inv Unit Price'),
            'inv_line_price' => Yii::t('app', 'Inv Line Price'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'tax_amount' => Yii::t('app', 'Tax Amount'),
            'gl_inv_line_price' => Yii::t('app', 'Gl Inv Line Price'),
            'gl_tax_amount' => Yii::t('app', 'Gl Tax Amount'),
            'line_type' => Yii::t('app', 'Line Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'asset_cb' => Yii::t('app', 'Asset Cb'),
            'fa_asset_category_id' => Yii::t('app', 'Fa Asset Category ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'status' => Yii::t('app', 'Status'),
            'line_source' => Yii::t('app', 'Line Source'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'sd_so_detail_id' => Yii::t('app', 'Sd So Detail ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
