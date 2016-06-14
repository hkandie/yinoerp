<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_type_header}}".
 *
 * @property integer $hd_service_type_header_id
 * @property string $service_type
 * @property string $description
 * @property integer $active_cb
 * @property string $repair_mode
 * @property string $primary_service_type
 * @property integer $pre_repair_activity_rma
 * @property integer $pre_repair_activity_so
 * @property integer $post_repair_activity_rma
 * @property integer $post_repair_activity_so
 * @property integer $auto_create_so_rma_cb
 * @property integer $prices_list_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceTypeHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_type_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['service_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['active_cb', 'pre_repair_activity_rma', 'pre_repair_activity_so', 'post_repair_activity_rma', 'post_repair_activity_so', 'auto_create_so_rma_cb', 'prices_list_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['service_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['repair_mode', 'primary_service_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_type_header_id' => Yii::t('app', 'Hd Service Type Header ID'),
            'service_type' => Yii::t('app', 'Service Type'),
            'description' => Yii::t('app', 'Description'),
            'active_cb' => Yii::t('app', 'Active Cb'),
            'repair_mode' => Yii::t('app', 'Repair Mode'),
            'primary_service_type' => Yii::t('app', 'Primary Service Type'),
            'pre_repair_activity_rma' => Yii::t('app', 'Pre Repair Activity Rma'),
            'pre_repair_activity_so' => Yii::t('app', 'Pre Repair Activity So'),
            'post_repair_activity_rma' => Yii::t('app', 'Post Repair Activity Rma'),
            'post_repair_activity_so' => Yii::t('app', 'Post Repair Activity So'),
            'auto_create_so_rma_cb' => Yii::t('app', 'Auto Create So Rma Cb'),
            'prices_list_id' => Yii::t('app', 'Prices List ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
