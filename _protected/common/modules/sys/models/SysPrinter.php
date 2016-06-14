<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_printer}}".
 *
 * @property string $sys_printer_id
 * @property string $printer_name
 * @property string $printer_type
 * @property string $manufacturer
 * @property string $description
 * @property string $ip_address
 * @property integer $port_number
 * @property string $model_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysPrinter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_printer}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['printer_name', 'created_by', 'last_update_by'], 'required'],
            [['port_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['printer_name'], 'string', 'max' => 50],
            [['printer_type', 'manufacturer', 'model_number'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 256],
            [['ip_address'], 'string', 'max' => 20],
            [['printer_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_printer_id' => Yii::t('app', 'Sys Printer ID'),
            'printer_name' => Yii::t('app', 'Printer Name'),
            'printer_type' => Yii::t('app', 'Printer Type'),
            'manufacturer' => Yii::t('app', 'Manufacturer'),
            'description' => Yii::t('app', 'Description'),
            'ip_address' => Yii::t('app', 'Ip Address'),
            'port_number' => Yii::t('app', 'Port Number'),
            'model_number' => Yii::t('app', 'Model Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
