<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_rfid_interface}}".
 *
 * @property string $sys_rfid_interface_id
 * @property string $epc
 * @property string $tag_number
 * @property string $antena_number
 * @property string $time_stamp
 * @property string $user_data
 * @property string $description
 * @property integer $readcount
 * @property integer $org_id
 * @property integer $item_id_m
 * @property integer $from_subinventory_id
 * @property string $from_subinventory
 * @property integer $transaction_type_id
 * @property string $transaction_type
 * @property string $quantity
 * @property string $item_description
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysRfidInterface extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_rfid_interface}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['epc', 'status', 'created_by', 'last_update_by'], 'required'],
            [['time_stamp', 'creation_date', 'last_update_date'], 'safe'],
            [['readcount', 'org_id', 'item_id_m', 'from_subinventory_id', 'transaction_type_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity'], 'number'],
            [['epc', 'tag_number', 'user_data', 'description', 'item_description'], 'string', 'max' => 255],
            [['antena_number'], 'string', 'max' => 100],
            [['from_subinventory', 'transaction_type'], 'string', 'max' => 50],
            [['status'], 'string', 'max' => 25],
            [['tag_number', 'antena_number', 'time_stamp'], 'unique', 'targetAttribute' => ['tag_number', 'antena_number', 'time_stamp'], 'message' => 'The combination of Tag Number, Antena Number and Time Stamp has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_rfid_interface_id' => Yii::t('app', 'Sys Rfid Interface ID'),
            'epc' => Yii::t('app', 'Epc'),
            'tag_number' => Yii::t('app', 'Tag Number'),
            'antena_number' => Yii::t('app', 'Antena Number'),
            'time_stamp' => Yii::t('app', 'Time Stamp'),
            'user_data' => Yii::t('app', 'User Data'),
            'description' => Yii::t('app', 'Description'),
            'readcount' => Yii::t('app', 'Readcount'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'from_subinventory_id' => Yii::t('app', 'From Subinventory ID'),
            'from_subinventory' => Yii::t('app', 'From Subinventory'),
            'transaction_type_id' => Yii::t('app', 'Transaction Type ID'),
            'transaction_type' => Yii::t('app', 'Transaction Type'),
            'quantity' => Yii::t('app', 'Quantity'),
            'item_description' => Yii::t('app', 'Item Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
