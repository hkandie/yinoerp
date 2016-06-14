<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_type_line}}".
 *
 * @property integer $hd_service_type_line_id
 * @property integer $hd_service_type_header_id
 * @property string $billing_type
 * @property integer $service_activity_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceTypeLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_type_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_service_type_header_id', 'billing_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_service_type_header_id', 'service_activity_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['billing_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['hd_service_type_header_id', 'billing_type'], 'unique', 'targetAttribute' => ['hd_service_type_header_id', 'billing_type'], 'message' => 'The combination of Hd Service Type Header ID and Billing Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_type_line_id' => Yii::t('app', 'Hd Service Type Line ID'),
            'hd_service_type_header_id' => Yii::t('app', 'Hd Service Type Header ID'),
            'billing_type' => Yii::t('app', 'Billing Type'),
            'service_activity_id' => Yii::t('app', 'Service Activity ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
