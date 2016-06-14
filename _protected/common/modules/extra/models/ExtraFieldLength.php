<?php

namespace common\modules\extra\models;

use Yii;

/**
 * This is the model class for table "{{%extra_field_length}}".
 *
 * @property integer $extra_field_length_id
 * @property string $reference_type
 * @property string $reference_entity
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $extra_field_length_value
 * @property integer $company_id
 */
class ExtraFieldLength extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extra_field_length}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_key_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_type'], 'string', 'max' => 30],
            [['reference_entity', 'reference_key_name'], 'string', 'max' => 50],
            [['extra_field_length_value'], 'string', 'max' => 20],
            [['extra_field_length_value', 'reference_key_name', 'reference_key_value'], 'unique', 'targetAttribute' => ['extra_field_length_value', 'reference_key_name', 'reference_key_value'], 'message' => 'The combination of Reference Key Name, Reference Key Value and Extra Field Length Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extra_field_length_id' => Yii::t('app', 'Extra Field Length ID'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_entity' => Yii::t('app', 'Reference Entity'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'extra_field_length_value' => Yii::t('app', 'Extra Field Length Value'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
