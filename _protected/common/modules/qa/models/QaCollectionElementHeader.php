<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_collection_element_header}}".
 *
 * @property integer $qa_collection_element_header_id
 * @property string $element_name
 * @property string $sys_element_name
 * @property string $description
 * @property string $data_type
 * @property integer $data_length
 * @property string $display_type
 * @property string $element_type
 * @property string $element_label
 * @property string $hint
 * @property integer $decimal_position
 * @property integer $uom_id
 * @property string $default_value
 * @property integer $option_header_id
 * @property string $target_value
 * @property string $user_range_low
 * @property string $user_range_high
 * @property string $specification_range_high
 * @property string $specification_range_low
 * @property string $reasonable_range_high
 * @property string $reasonable_range_low
 * @property integer $active_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCollectionElementHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_collection_element_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['element_name', 'sys_element_name', 'element_type', 'created_by', 'last_update_by'], 'required'],
            [['data_length', 'decimal_position', 'uom_id', 'option_header_id', 'active_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['element_name', 'sys_element_name', 'data_type', 'element_label', 'default_value', 'target_value', 'user_range_low', 'user_range_high', 'specification_range_high', 'specification_range_low', 'reasonable_range_high', 'reasonable_range_low'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['display_type'], 'string', 'max' => 20],
            [['element_type'], 'string', 'max' => 10],
            [['hint'], 'string', 'max' => 255],
            [['element_name'], 'unique'],
            [['sys_element_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_collection_element_header_id' => Yii::t('app', 'Qa Collection Element Header ID'),
            'element_name' => Yii::t('app', 'Element Name'),
            'sys_element_name' => Yii::t('app', 'Sys Element Name'),
            'description' => Yii::t('app', 'Description'),
            'data_type' => Yii::t('app', 'Data Type'),
            'data_length' => Yii::t('app', 'Data Length'),
            'display_type' => Yii::t('app', 'Display Type'),
            'element_type' => Yii::t('app', 'Element Type'),
            'element_label' => Yii::t('app', 'Element Label'),
            'hint' => Yii::t('app', 'Hint'),
            'decimal_position' => Yii::t('app', 'Decimal Position'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'default_value' => Yii::t('app', 'Default Value'),
            'option_header_id' => Yii::t('app', 'Option Header ID'),
            'target_value' => Yii::t('app', 'Target Value'),
            'user_range_low' => Yii::t('app', 'User Range Low'),
            'user_range_high' => Yii::t('app', 'User Range High'),
            'specification_range_high' => Yii::t('app', 'Specification Range High'),
            'specification_range_low' => Yii::t('app', 'Specification Range Low'),
            'reasonable_range_high' => Yii::t('app', 'Reasonable Range High'),
            'reasonable_range_low' => Yii::t('app', 'Reasonable Range Low'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
