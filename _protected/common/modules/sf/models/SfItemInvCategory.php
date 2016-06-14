<?php

namespace common\modules\sf\models;

use Yii;

/**
 * This is the model class for table "{{%sf_item_inv_category}}".
 *
 * @property integer $sf_item_inv_category_id
 * @property string $reference_type
 * @property string $reference_entity
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $created_by
 * @property string $creation_date
 * @property string $last_update_by
 * @property string $last_update_date
 * @property string $sf_item_inv_category_value
 * @property integer $company_id
 */
class SfItemInvCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sf_item_inv_category}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_key_value', 'company_id'], 'integer'],
            [['created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_type'], 'string', 'max' => 30],
            [['reference_entity', 'reference_key_name'], 'string', 'max' => 50],
            [['created_by', 'last_update_by'], 'string', 'max' => 256],
            [['sf_item_inv_category_value'], 'string', 'max' => 25],
            [['sf_item_inv_category_value', 'reference_key_name', 'reference_key_value'], 'unique', 'targetAttribute' => ['sf_item_inv_category_value', 'reference_key_name', 'reference_key_value'], 'message' => 'The combination of Reference Key Name, Reference Key Value and Sf Item Inv Category Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sf_item_inv_category_id' => Yii::t('app', 'Sf Item Inv Category ID'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_entity' => Yii::t('app', 'Reference Entity'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'sf_item_inv_category_value' => Yii::t('app', 'Sf Item Inv Category Value'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
