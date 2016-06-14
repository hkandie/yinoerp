<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_secondary_field_instance}}".
 *
 * @property integer $sys_secondary_field_instance_id
 * @property integer $sys_secondary_field_id
 * @property string $reference_type
 * @property string $referece_entity
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property string $label
 * @property string $control_type
 * @property string $control_value
 * @property integer $control_uom
 * @property integer $active_cb
 * @property integer $display_weight
 * @property resource $list_values
 * @property string $lower_limit
 * @property string $upper_limit
 * @property string $list_value_option_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysSecondaryFieldInstance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_secondary_field_instance}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_secondary_field_id', 'reference_key_name', 'created_by', 'last_update_by'], 'required'],
            [['sys_secondary_field_id', 'reference_key_value', 'control_uom', 'active_cb', 'display_weight', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['list_values'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_type', 'referece_entity'], 'string', 'max' => 25],
            [['reference_key_name', 'label', 'control_value', 'lower_limit', 'upper_limit', 'list_value_option_type'], 'string', 'max' => 50],
            [['control_type'], 'string', 'max' => 10],
            [['sys_secondary_field_id', 'reference_type', 'reference_key_name', 'reference_key_value'], 'unique', 'targetAttribute' => ['sys_secondary_field_id', 'reference_type', 'reference_key_name', 'reference_key_value'], 'message' => 'The combination of Sys Secondary Field ID, Reference Type, Reference Key Name and Reference Key Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_secondary_field_instance_id' => Yii::t('app', 'Sys Secondary Field Instance ID'),
            'sys_secondary_field_id' => Yii::t('app', 'Sys Secondary Field ID'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'referece_entity' => Yii::t('app', 'Referece Entity'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'label' => Yii::t('app', 'Label'),
            'control_type' => Yii::t('app', 'Control Type'),
            'control_value' => Yii::t('app', 'Control Value'),
            'control_uom' => Yii::t('app', 'Control Uom'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'display_weight' => Yii::t('app', 'Display Weight'),
            'list_values' => Yii::t('app', 'List Values'),
            'lower_limit' => Yii::t('app', 'Lower Limit'),
            'upper_limit' => Yii::t('app', 'Upper Limit'),
            'list_value_option_type' => Yii::t('app', 'List Value Option Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
