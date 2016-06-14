<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_value_group_header}}".
 *
 * @property string $sys_value_group_header_id
 * @property string $access_level
 * @property string $value_group
 * @property string $description
 * @property string $module_code
 * @property string $validation_type
 * @property string $field_type
 * @property integer $min_size
 * @property integer $max_size
 * @property integer $min_value
 * @property integer $max_value
 * @property integer $fixed_size
 * @property integer $number_only_cb
 * @property integer $uppercase_only_cb
 * @property string $option_assignments
 * @property string $status
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysValueGroupHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_value_group_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['value_group', 'created_by', 'last_update_by'], 'required'],
            [['min_size', 'max_size', 'min_value', 'max_value', 'fixed_size', 'number_only_cb', 'uppercase_only_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status', 'rev_enabled'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['access_level'], 'string', 'max' => 20],
            [['value_group', 'module_code', 'field_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['validation_type', 'option_assignments'], 'string', 'max' => 100],
            [['value_group'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_value_group_header_id' => Yii::t('app', 'Sys Value Group Header ID'),
            'access_level' => Yii::t('app', 'Access Level'),
            'value_group' => Yii::t('app', 'Value Group'),
            'description' => Yii::t('app', 'Description'),
            'module_code' => Yii::t('app', 'Module Code'),
            'validation_type' => Yii::t('app', 'Validation Type'),
            'field_type' => Yii::t('app', 'Field Type'),
            'min_size' => Yii::t('app', 'Min Size'),
            'max_size' => Yii::t('app', 'Max Size'),
            'min_value' => Yii::t('app', 'Min Value'),
            'max_value' => Yii::t('app', 'Max Value'),
            'fixed_size' => Yii::t('app', 'Fixed Size'),
            'number_only_cb' => Yii::t('app', 'Number Only Cb'),
            'uppercase_only_cb' => Yii::t('app', 'Uppercase Only Cb'),
            'option_assignments' => Yii::t('app', 'Option Assignments'),
            'status' => Yii::t('app', 'Status'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
