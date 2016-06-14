<?php

namespace common\modules\bc\models;

use Yii;

/**
 * This is the model class for table "{{%bc_label_auto_trigger}}".
 *
 * @property integer $bc_label_auto_trigger_id
 * @property integer $transaction_type_id
 * @property integer $bc_label_format_header_id
 * @property string $association_level
 * @property integer $association_level_value
 * @property integer $sys_printer_id
 * @property integer $enabled_cb
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BcLabelAutoTrigger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bc_label_auto_trigger}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transaction_type_id', 'bc_label_format_header_id', 'association_level', 'sys_printer_id', 'created_by', 'last_update_by'], 'required'],
            [['transaction_type_id', 'bc_label_format_header_id', 'association_level_value', 'sys_printer_id', 'enabled_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['association_level'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['transaction_type_id', 'association_level', 'association_level_value'], 'unique', 'targetAttribute' => ['transaction_type_id', 'association_level', 'association_level_value'], 'message' => 'The combination of Transaction Type ID, Association Level and Association Level Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bc_label_auto_trigger_id' => Yii::t('app', 'Bc Label Auto Trigger ID'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'bc_label_format_header_id' => Yii::t('app', 'Bc Label Format Header ID'),
            'association_level' => Yii::t('app', 'Association Level'),
            'association_level_value' => Yii::t('app', 'Association Level Value'),
            'sys_printer_id' => Yii::t('app', 'Sys Printer ID'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
