<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_svo_line}}".
 *
 * @property integer $hd_svo_line_id
 * @property integer $hd_svo_header_id
 * @property integer $line_number
 * @property integer $inv_org_id
 * @property integer $hd_service_type_header_id
 * @property integer $sd_so_header_id
 * @property integer $sd_so_line_id
 * @property string $quantity
 * @property integer $item_id_m
 * @property integer $action_type_id
 * @property string $status
 * @property integer $price_list_header_id
 * @property string $price_date
 * @property string $unit_price
 * @property string $line_price
 * @property string $line_status
 * @property string $requested_date
 * @property string $promise_date
 * @property string $schedule_ship_date
 * @property integer $reference_doc_type
 * @property integer $reference_doc_number
 * @property integer $service_activity_header_id
 * @property string $supply_source
 * @property string $destination_type
 * @property string $line_description
 * @property string $uom_id
 * @property string $return_reason
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSvoLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_svo_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_svo_header_id', 'line_number', 'inv_org_id', 'item_id_m', 'line_status', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_svo_header_id', 'line_number', 'inv_org_id', 'hd_service_type_header_id', 'sd_so_header_id', 'sd_so_line_id', 'item_id_m', 'action_type_id', 'price_list_header_id', 'reference_doc_type', 'reference_doc_number', 'service_activity_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['quantity', 'unit_price', 'line_price'], 'number'],
            [['price_date', 'requested_date', 'promise_date', 'schedule_ship_date', 'creation_date', 'last_update_date'], 'safe'],
            [['status', 'line_status', 'supply_source', 'destination_type', 'uom_id', 'return_reason'], 'string', 'max' => 25],
            [['line_description'], 'string', 'max' => 256],
            [['hd_svo_header_id', 'line_number'], 'unique', 'targetAttribute' => ['hd_svo_header_id', 'line_number'], 'message' => 'The combination of Hd Svo Header ID and Line Number has already been taken.'],
            [['hd_svo_header_id', 'hd_service_type_header_id', 'requested_date'], 'unique', 'targetAttribute' => ['hd_svo_header_id', 'hd_service_type_header_id', 'requested_date'], 'message' => 'The combination of Hd Svo Header ID, Hd Service Type Header ID and Requested Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_svo_line_id' => Yii::t('app', 'Hd Svo Line ID'),
            'hd_svo_header_id' => Yii::t('app', 'Hd Svo Header ID'),
            'line_number' => Yii::t('app', 'Line Number'),
            'inv_org_id' => Yii::t('app', 'Inv Org ID'),
            'hd_service_type_header_id' => Yii::t('app', 'Hd Service Type Header ID'),
            'sd_so_header_id' => Yii::t('app', 'Sd So Header ID'),
            'sd_so_line_id' => Yii::t('app', 'Sd So Line ID'),
            'quantity' => Yii::t('app', 'Quantity'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'action_type_id' => Yii::t('app', 'Action Type ID'),
            'status' => Yii::t('app', 'Status'),
            'price_list_header_id' => Yii::t('app', 'Price List Header ID'),
            'price_date' => Yii::t('app', 'Price Date'),
            'unit_price' => Yii::t('app', 'Unit Price'),
            'line_price' => Yii::t('app', 'Line Price'),
            'line_status' => Yii::t('app', 'Line Status'),
            'requested_date' => Yii::t('app', 'Requested Date'),
            'promise_date' => Yii::t('app', 'Promise Date'),
            'schedule_ship_date' => Yii::t('app', 'Schedule Ship Date'),
            'reference_doc_type' => Yii::t('app', 'Reference Doc Type'),
            'reference_doc_number' => Yii::t('app', 'Reference Doc Number'),
            'service_activity_header_id' => Yii::t('app', 'Service Activity Header ID'),
            'supply_source' => Yii::t('app', 'Supply Source'),
            'destination_type' => Yii::t('app', 'Destination Type'),
            'line_description' => Yii::t('app', 'Line Description'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'return_reason' => Yii::t('app', 'Return Reason'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
