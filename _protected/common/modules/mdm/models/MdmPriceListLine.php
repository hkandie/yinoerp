<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_price_list_line}}".
 *
 * @property integer $mdm_price_list_line_id
 * @property integer $mdm_price_list_header_id
 * @property string $line_type
 * @property integer $org_id
 * @property integer $item_id_m
 * @property integer $uom_id
 * @property integer $unit_price
 * @property string $formula
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $use_price_break_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmPriceListLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_price_list_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['mdm_price_list_header_id', 'line_type', 'effective_start_date', 'created_by', 'last_update_by'], 'required'],
            [['mdm_price_list_header_id', 'org_id', 'item_id_m', 'uom_id', 'unit_price', 'use_price_break_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['formula'], 'string'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['line_type'], 'string', 'max' => 25],
            [['mdm_price_list_header_id', 'org_id', 'item_id_m', 'effective_start_date'], 'unique', 'targetAttribute' => ['mdm_price_list_header_id', 'org_id', 'item_id_m', 'effective_start_date'], 'message' => 'The combination of Mdm Price List Header ID, Org ID, Item Id M and Effective Start Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_price_list_line_id' => Yii::t('app', 'Mdm Price List Line ID'),
            'mdm_price_list_header_id' => Yii::t('app', 'Mdm Price List Header ID'),
            'line_type' => Yii::t('app', 'Line Type'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'formula' => Yii::t('app', 'Formula'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'use_price_break_cb' => Yii::t('app', 'Use Price Break Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
