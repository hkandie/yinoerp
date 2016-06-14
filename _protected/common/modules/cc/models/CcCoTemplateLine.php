<?php

namespace common\modules\cc\models;

use Yii;

/**
 * This is the model class for table "{{%cc_co_template_line}}".
 *
 * @property integer $cc_co_template_line_id
 * @property integer $cc_co_template_header_id
 * @property string $field_name
 * @property string $required_cb
 * @property string $label
 * @property string $value_type
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
class CcCoTemplateLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cc_co_template_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cc_co_template_header_id', 'created_by', 'last_update_by'], 'required'],
            [['cc_co_template_header_id', 'control_uom', 'active_cb', 'display_weight', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['list_values'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['field_name', 'required_cb', 'value_type'], 'string', 'max' => 25],
            [['label', 'control_value', 'lower_limit', 'upper_limit', 'list_value_option_type'], 'string', 'max' => 50],
            [['control_type'], 'string', 'max' => 10],
            [['cc_co_template_header_id', 'field_name'], 'unique', 'targetAttribute' => ['cc_co_template_header_id', 'field_name'], 'message' => 'The combination of Cc Co Template Header ID and Field Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cc_co_template_line_id' => Yii::t('app', 'Cc Co Template Line ID'),
            'cc_co_template_header_id' => Yii::t('app', 'Cc Co Template Header ID'),
            'field_name' => Yii::t('app', 'Field Name'),
            'required_cb' => Yii::t('app', 'Required Cb'),
            'label' => Yii::t('app', 'Label'),
            'value_type' => Yii::t('app', 'Value Type'),
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
