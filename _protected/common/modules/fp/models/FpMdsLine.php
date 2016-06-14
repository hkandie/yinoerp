<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mds_line}}".
 *
 * @property integer $fp_mds_line_id
 * @property integer $fp_mds_header_id
 * @property integer $item_id_m
 * @property string $demand_date
 * @property string $quantity
 * @property string $source_type
 * @property integer $source_header_id
 * @property integer $source_line_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMdsLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mds_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_mds_header_id', 'item_id_m', 'source_header_id', 'source_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['item_id_m', 'source_header_id', 'source_line_id', 'created_by', 'last_update_by'], 'required'],
            [['demand_date', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity'], 'number'],
            [['source_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mds_line_id' => Yii::t('app', 'Fp Mds Line ID'),
            'fp_mds_header_id' => Yii::t('app', 'Fp Mds Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'demand_date' => Yii::t('app', 'Demand Date'),
            'quantity' => Yii::t('app', 'Quantity'),
            'source_type' => Yii::t('app', 'Source Type'),
            'source_header_id' => Yii::t('app', 'Source Header ID'),
            'source_line_id' => Yii::t('app', 'Source Line ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
