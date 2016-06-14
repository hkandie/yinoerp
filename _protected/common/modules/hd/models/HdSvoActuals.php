<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_svo_actuals}}".
 *
 * @property integer $hd_svo_actuals_id
 * @property integer $hd_svo_header_id
 * @property integer $item_id_m
 * @property string $source
 * @property string $billing_type
 * @property string $hd_svo_estimates_id
 * @property integer $wip_wo_header_id
 * @property string $quantity
 * @property integer $uom_id
 * @property string $unit_price
 * @property string $line_price
 * @property string $line_status
 * @property integer $sd_so_header_id
 * @property integer $sd_so_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSvoActuals extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_svo_actuals}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_svo_header_id', 'item_id_m', 'billing_type', 'line_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_svo_header_id', 'item_id_m', 'wip_wo_header_id', 'uom_id', 'sd_so_header_id', 'sd_so_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'unit_price', 'line_price'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['source', 'billing_type', 'line_status'], 'string', 'max' => 25],
            [['hd_svo_estimates_id'], 'string', 'max' => 15],
            [['hd_svo_header_id', 'source', 'wip_wo_header_id'], 'unique', 'targetAttribute' => ['hd_svo_header_id', 'source', 'wip_wo_header_id'], 'message' => 'The combination of Hd Svo Header ID, Source and Wip Wo Header ID has already been taken.'],
            [['hd_svo_header_id', 'hd_svo_estimates_id'], 'unique', 'targetAttribute' => ['hd_svo_header_id', 'hd_svo_estimates_id'], 'message' => 'The combination of Hd Svo Header ID and Hd Svo Estimates ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_svo_actuals_id' => Yii::t('app', 'Hd Svo Actuals ID'),
            'hd_svo_header_id' => Yii::t('app', 'Hd Svo Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'source' => Yii::t('app', 'Source'),
            'billing_type' => Yii::t('app', 'Billing Type'),
            'hd_svo_estimates_id' => Yii::t('app', 'Hd Svo Estimates ID'),
            'wip_wo_header_id' => Yii::t('app', 'Wip Wo Header ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'line_status' => Yii::t('app', 'Line Status'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
