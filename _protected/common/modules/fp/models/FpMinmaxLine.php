<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_minmax_line}}".
 *
 * @property integer $fp_minmax_line_id
 * @property integer $fp_minmax_header_id
 * @property integer $item_id_m
 * @property string $min_quantity
 * @property string $max_quantity
 * @property string $mb_min_quantity
 * @property string $mb_max_quantity
 * @property integer $mb_bin_size
 * @property string $total_demand
 * @property string $avg_daily_demand
 * @property string $lead_time
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMinmaxLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_minmax_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_minmax_header_id', 'item_id_m', 'total_demand', 'created_by', 'last_update_by'], 'required'],
            [['fp_minmax_header_id', 'item_id_m', 'mb_bin_size', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['min_quantity', 'max_quantity', 'mb_min_quantity', 'mb_max_quantity', 'total_demand', 'avg_daily_demand', 'lead_time'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['fp_minmax_header_id', 'item_id_m'], 'unique', 'targetAttribute' => ['fp_minmax_header_id', 'item_id_m'], 'message' => 'The combination of Fp Minmax Header ID and Item Id M has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_minmax_line_id' => Yii::t('app', 'Fp Minmax Line ID'),
            'fp_minmax_header_id' => Yii::t('app', 'Fp Minmax Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'min_quantity' => Yii::t('app', 'Min Quantity'),
            'max_quantity' => Yii::t('app', 'Max Quantity'),
            'mb_min_quantity' => Yii::t('app', 'Mb Min Quantity'),
            'mb_max_quantity' => Yii::t('app', 'Mb Max Quantity'),
            'mb_bin_size' => Yii::t('app', 'Mb Bin Size'),
            'total_demand' => Yii::t('app', 'Total Demand'),
            'avg_daily_demand' => Yii::t('app', 'Avg Daily Demand'),
            'lead_time' => Yii::t('app', 'Lead Time'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
