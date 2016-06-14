<?php

namespace common\modules\bc\models;

use Yii;

/**
 * This is the model class for table "{{%bc_static_label}}".
 *
 * @property integer $bc_static_label_id
 * @property string $label_type
 * @property integer $bc_label_format_header_id
 * @property string $status
 * @property string $label_content
 * @property integer $sys_printer_id
 * @property string $generate_label_class_name
 * @property string $generate_label_function_name
 * @property string $output_file_path
 * @property string $file_name
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BcStaticLabel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bc_static_label}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['label_type', 'bc_label_format_header_id', 'sys_printer_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bc_label_format_header_id', 'sys_printer_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['label_type', 'status'], 'string', 'max' => 25],
            [['label_content', 'output_file_path', 'file_name'], 'string', 'max' => 256],
            [['generate_label_class_name', 'generate_label_function_name'], 'string', 'max' => 70],
            [['label_type', 'status', 'label_content'], 'unique', 'targetAttribute' => ['label_type', 'status', 'label_content'], 'message' => 'The combination of Label Type, Status and Label Content has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bc_static_label_id' => Yii::t('app', 'Bc Static Label ID'),
            'label_type' => Yii::t('app', 'Label Type'),
            'bc_label_format_header_id' => Yii::t('app', 'Bc Label Format Header ID'),
            'status' => Yii::t('app', 'Status'),
            'label_content' => Yii::t('app', 'Label Content'),
            'sys_printer_id' => Yii::t('app', 'Sys Printer ID'),
            'generate_label_class_name' => Yii::t('app', 'Generate Label Class Name'),
            'generate_label_function_name' => Yii::t('app', 'Generate Label Function Name'),
            'output_file_path' => Yii::t('app', 'Output File Path'),
            'file_name' => Yii::t('app', 'File Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
