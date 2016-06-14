<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_config_header}}".
 *
 * @property integer $bom_config_header_id
 * @property integer $item_id_m
 * @property integer $bom_header_id
 * @property integer $org_id
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomConfigHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_config_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id_m', 'org_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'bom_header_id', 'org_id', 'reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_key_name'], 'string', 'max' => 60],
            [['item_id_m', 'reference_key_name', 'reference_key_value'], 'unique', 'targetAttribute' => ['item_id_m', 'reference_key_name', 'reference_key_value'], 'message' => 'The combination of Item Id M, Reference Key Name and Reference Key Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_config_header_id' => Yii::t('app', 'Bom Config Header ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'bom_header_id' => Yii::t('app', 'Bom Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
