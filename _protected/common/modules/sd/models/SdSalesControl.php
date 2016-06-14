<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_sales_control}}".
 *
 * @property string $sd_sales_control_id
 * @property integer $org_id
 * @property integer $ar_transaction_type_id
 * @property integer $mdm_price_list_header_id
 * @property integer $deffer_invoicing_cb
 * @property integer $default_requested_date_cb
 * @property integer $default_schedule_ship_date_cb
 * @property integer $default_promise_date_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SdSalesControl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_sales_control}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'ar_transaction_type_id', 'mdm_price_list_header_id', 'deffer_invoicing_cb', 'default_requested_date_cb', 'default_schedule_ship_date_cb', 'default_promise_date_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sd_sales_control_id' => Yii::t('app', 'Sd Sales Control ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'ar_transaction_type_id' => Yii::t('app', 'Ar Transaction Type ID'),
            'mdm_price_list_header_id' => Yii::t('app', 'Mdm Price List Header ID'),
            'deffer_invoicing_cb' => Yii::t('app', 'Deffer Invoicing Cb'),
            'default_requested_date_cb' => Yii::t('app', 'Default Requested Date Cb'),
            'default_schedule_ship_date_cb' => Yii::t('app', 'Default Schedule Ship Date Cb'),
            'default_promise_date_cb' => Yii::t('app', 'Default Promise Date Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
