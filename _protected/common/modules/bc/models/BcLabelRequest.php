<?php

namespace common\modules\bc\models;

use Yii;

/**
 * This is the model class for table "{{%bc_label_request}}".
 *
 * @property integer $bc_label_request_id
 * @property integer $transaction_type_id
 * @property integer $bc_label_format_header_id
 * @property string $status
 * @property string $label_content
 * @property integer $sys_printer_id
 * @property string $output_file_path
 * @property string $file_name
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BcLabelRequest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bc_label_request}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transaction_type_id', 'bc_label_format_header_id', 'sys_printer_id', 'created_by', 'last_update_by'], 'required'],
            [['transaction_type_id', 'bc_label_format_header_id', 'sys_printer_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status'], 'string', 'max' => 25],
            [['label_content', 'output_file_path', 'file_name'], 'string', 'max' => 256],
            [['transaction_type_id', 'status', 'label_content'], 'unique', 'targetAttribute' => ['transaction_type_id', 'status', 'label_content'], 'message' => 'The combination of Transaction Type ID, Status and Label Content has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bc_label_request_id' => Yii::t('app', 'Bc Label Request ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'bc_label_format_header_id' => Yii::t('app', 'Bc Label Format Header ID'),
            'status' => Yii::t('app', 'Status'),
            'label_content' => Yii::t('app', 'Label Content'),
            'sys_printer_id' => Yii::t('app', 'Sys Printer ID'),
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
