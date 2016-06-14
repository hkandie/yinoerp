<?php

namespace common\modules\bc\models;

use Yii;

/**
 * This is the model class for table "{{%bc_label_format_line}}".
 *
 * @property integer $bc_label_format_line_id
 * @property integer $bc_label_format_header_id
 * @property string $object_name
 * @property string $sys_field_name
 * @property string $field_name
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BcLabelFormatLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bc_label_format_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bc_label_format_header_id', 'object_name', 'sys_field_name', 'created_by', 'last_update_by'], 'required'],
            [['bc_label_format_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['object_name', 'sys_field_name'], 'string', 'max' => 50],
            [['field_name'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 256],
            [['bc_label_format_header_id', 'sys_field_name'], 'unique', 'targetAttribute' => ['bc_label_format_header_id', 'sys_field_name'], 'message' => 'The combination of Bc Label Format Header ID and Sys Field Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bc_label_format_line_id' => Yii::t('app', 'Bc Label Format Line ID'),
            'bc_label_format_header_id' => Yii::t('app', 'Bc Label Format Header ID'),
            'object_name' => Yii::t('app', 'Object Name'),
            'sys_field_name' => Yii::t('app', 'Sys Field Name'),
            'field_name' => Yii::t('app', 'Field Name'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
