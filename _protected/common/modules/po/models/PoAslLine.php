<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_asl_line}}".
 *
 * @property integer $po_asl_line_id
 * @property integer $po_asl_header_id
 * @property integer $supplier_id
 * @property integer $supplier_site_id
 * @property string $mfg_part_number
 * @property string $manufacturer
 * @property string $business_type
 * @property string $description
 * @property string $release_method
 * @property string $min_order_quantity
 * @property integer $fix_lot_multiplier
 * @property string $country_of_origin
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoAslLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_asl_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_asl_header_id', 'supplier_id', 'supplier_site_id', 'fix_lot_multiplier', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['supplier_id', 'supplier_site_id', 'created_by', 'last_update_by'], 'required'],
            [['min_order_quantity'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['mfg_part_number', 'manufacturer'], 'string', 'max' => 100],
            [['business_type', 'release_method'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['country_of_origin', 'status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_asl_line_id' => Yii::t('app', 'Po Asl Line ID'),
            'po_asl_header_id' => Yii::t('app', 'Po Asl Header ID'),
            'supplier_id' => Yii::t('app', 'Supplier ID'),
            'supplier_site_id' => Yii::t('app', 'Supplier Site ID'),
            'mfg_part_number' => Yii::t('app', 'Mfg Part Number'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'business_type' => Yii::t('app', 'Business Type'),
            'description' => Yii::t('app', 'Description'),
            'release_method' => Yii::t('app', 'Release Method'),
            'min_order_quantity' => Yii::t('app', 'Min Order Quantity'),
            'fix_lot_multiplier' => Yii::t('app', 'Fix Lot Multiplier'),
            'country_of_origin' => Yii::t('app', 'Country Of Origin'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
