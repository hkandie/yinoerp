<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_subscription_detail}}".
 *
 * @property integer $hd_subscription_detail_id
 * @property integer $hd_subscription_header_id
 * @property integer $hd_subscription_line_id
 * @property string $member_name
 * @property string $member_dob
 * @property string $vehcile_no
 * @property string $vehcile_registration
 * @property string $road_tax_expiry_date
 * @property string $vehcile_details
 * @property string $description
 * @property string $line_type
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdSubscriptionDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_subscription_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hd_subscription_header_id', 'hd_subscription_line_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hd_subscription_header_id', 'hd_subscription_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['member_dob', 'road_tax_expiry_date', 'creation_date', 'last_update_date'], 'safe'],
            [['member_name', 'vehcile_no', 'vehcile_registration'], 'string', 'max' => 100],
            [['vehcile_details', 'description'], 'string', 'max' => 255],
            [['line_type'], 'string', 'max' => 25],
            [['hd_subscription_line_id', 'member_name'], 'unique', 'targetAttribute' => ['hd_subscription_line_id', 'member_name'], 'message' => 'The combination of Hd Subscription Line ID and Member Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_subscription_detail_id' => Yii::t('app', 'Hd Subscription Detail ID'),
            'hd_subscription_header_id' => Yii::t('app', 'Hd Subscription Header ID'),
            'hd_subscription_line_id' => Yii::t('app', 'Hd Subscription Line ID'),
            'member_name' => Yii::t('app', 'Member Name'),
            'member_dob' => Yii::t('app', 'Member Dob'),
            'vehcile_no' => Yii::t('app', 'Vehcile No'),
            'vehcile_registration' => Yii::t('app', 'Vehcile Registration'),
            'road_tax_expiry_date' => Yii::t('app', 'Road Tax Expiry Date'),
            'vehcile_details' => Yii::t('app', 'Vehcile Details'),
            'description' => Yii::t('app', 'Description'),
            'line_type' => Yii::t('app', 'Line Type'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
