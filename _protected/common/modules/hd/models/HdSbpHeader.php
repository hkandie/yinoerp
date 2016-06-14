<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_sbp_header}}".
 *
 * @property integer $hd_sbp_header_id
 * @property string $business_process
 * @property string $description
 * @property integer $service_order_cb
 * @property integer $service_request_cb
 * @property integer $service_contract_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSbpHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_sbp_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['business_process', 'created_by', 'last_update_by'], 'required'],
            [['service_order_cb', 'service_request_cb', 'service_contract_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['business_process'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['business_process'], 'unique'],
            [['description'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_sbp_header_id' => Yii::t('app', 'Hd Sbp Header ID'),
            'business_process' => Yii::t('app', 'Business Process'),
            'description' => Yii::t('app', 'Description'),
            'service_order_cb' => Yii::t('app', 'Service Order Cb'),
            'service_request_cb' => Yii::t('app', 'Service Request Cb'),
            'service_contract_cb' => Yii::t('app', 'Service Contract Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
