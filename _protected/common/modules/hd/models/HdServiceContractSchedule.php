<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_contract_schedule}}".
 *
 * @property integer $hd_service_contract_schedule_id
 * @property integer $hd_service_contract_line_id
 * @property integer $hd_service_contract_detail_id
 * @property integer $hd_service_contract_header_id
 * @property integer $line_num
 * @property string $amount
 * @property string $gl_amount
 * @property string $invoice_date
 * @property string $from_date
 * @property string $to_date
 * @property string $interface_date
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceContractSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_contract_schedule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_service_contract_line_id', 'hd_service_contract_detail_id', 'hd_service_contract_header_id', 'line_num', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['hd_service_contract_header_id', 'created_by', 'last_update_by'], 'required'],
            [['amount', 'gl_amount'], 'number'],
            [['invoice_date', 'from_date', 'to_date', 'interface_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_contract_schedule_id' => Yii::t('app', 'Hd Service Contract Schedule ID'),
            'hd_service_contract_line_id' => Yii::t('app', 'Hd Service Contract Line ID'),
            'hd_service_contract_detail_id' => Yii::t('app', 'Hd Service Contract Detail ID'),
            'hd_service_contract_header_id' => Yii::t('app', 'Hd Service Contract Header ID'),
            'line_num' => Yii::t('app', 'Line Num'),
            'amount' => Yii::t('app', 'Amount'),
            'gl_amount' => Yii::t('app', 'Gl Amount'),
            'invoice_date' => Yii::t('app', 'Invoice Date'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'interface_date' => Yii::t('app', 'Interface Date'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
