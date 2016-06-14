<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_all_v}}".
 *
 * @property integer $bom_header_id
 * @property integer $item_id_m
 * @property string $alternate_bom
 * @property integer $org_id
 * @property string $bom_revision
 * @property string $effective_date
 * @property integer $common_bom_item_id_m
 * @property string $item_number
 * @property string $item_description
 * @property integer $uom_id
 * @property string $item_type
 * @property string $item_status
 * @property string $bom_type
 * @property integer $costing_enabled_cb
 * @property string $make_buy
 * @property string $org
 * @property string $org_type
 * @property string $org_status
 * @property string $org_description
 * @property string $org_code
 */
class BomAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_header_id', 'item_id_m', 'org_id', 'common_bom_item_id_m', 'uom_id', 'costing_enabled_cb'], 'integer'],
            [['item_id_m', 'org_id'], 'required'],
            [['effective_date'], 'safe'],
            [['alternate_bom', 'item_number', 'org', 'org_type', 'org_status'], 'string', 'max' => 50],
            [['bom_revision'], 'string', 'max' => 12],
            [['item_description'], 'string', 'max' => 256],
            [['item_type'], 'string', 'max' => 20],
            [['item_status', 'bom_type'], 'string', 'max' => 15],
            [['make_buy'], 'string', 'max' => 10],
            [['org_description'], 'string', 'max' => 200],
            [['org_code'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_header_id' => Yii::t('app', 'Bom Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'alternate_bom' => Yii::t('app', 'Alternate Bom'),
            'org_id' => Yii::t('app', 'Org ID'),
            'bom_revision' => Yii::t('app', 'Bom Revision'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'common_bom_item_id_m' => Yii::t('app', 'Common Bom Item Id M'),
            'item_number' => Yii::t('app', 'Item Number'),
            'item_description' => Yii::t('app', 'Item Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'item_type' => Yii::t('app', 'Item Type'),
            'item_status' => Yii::t('app', 'Item Status'),
            'bom_type' => Yii::t('app', 'Bom Type'),
            'costing_enabled_cb' => Yii::t('app', 'Costing Enabled Cb'),
            'make_buy' => Yii::t('app', 'Make Buy'),
            'org' => Yii::t('app', 'Org'),
            'org_type' => Yii::t('app', 'Org Type'),
            'org_status' => Yii::t('app', 'Org Status'),
            'org_description' => Yii::t('app', 'Org Description'),
            'org_code' => Yii::t('app', 'Org Code'),
        ];
    }
}
