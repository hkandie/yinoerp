<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_price_list_detail}}".
 *
 * @property integer $mdm_price_list_detail_id
 * @property integer $mdm_price_list_header_id
 * @property integer $mdm_price_list_line_id
 * @property string $qty_from
 * @property string $qty_to
 * @property integer $uom_id
 * @property integer $unit_price
 * @property string $formula
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $q_reference_key_name
 * @property integer $q_reference_key_value
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmPriceListDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_price_list_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_price_list_header_id', 'mdm_price_list_line_id', 'created_by', 'last_update_by'], 'required'],
            [['mdm_price_list_header_id', 'mdm_price_list_line_id', 'uom_id', 'unit_price', 'q_reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['qty_from', 'qty_to'], 'number'],
            [['formula'], 'string'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['q_reference_key_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['mdm_price_list_line_id', 'qty_from', 'effective_start_date'], 'unique', 'targetAttribute' => ['mdm_price_list_line_id', 'qty_from', 'effective_start_date'], 'message' => 'The combination of Mdm Price List Line ID, Qty From and Effective Start Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_price_list_detail_id' => Yii::t('app', 'Mdm Price List Detail ID'),
            'mdm_price_list_header_id' => Yii::t('app', 'Mdm Price List Header ID'),
            'mdm_price_list_line_id' => Yii::t('app', 'Mdm Price List Line ID'),
            'qty_from' => Yii::t('app', 'Qty From'),
            'qty_to' => Yii::t('app', 'Qty To'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'formula' => Yii::t('app', 'Formula'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'q_reference_key_name' => Yii::t('app', 'Q Reference Key Name'),
            'q_reference_key_value' => Yii::t('app', 'Q Reference Key Value'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
