<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_event_line}}".
 *
 * @property string $prj_event_line_id
 * @property integer $prj_event_header_id
 * @property integer $event_type_id
 * @property string $event_date
 * @property integer $org_id
 * @property integer $event_number
 * @property integer $prj_project_line_id
 * @property string $description
 * @property string $currency
 * @property string $billing_amount
 * @property string $revenue_amount
 * @property integer $billed_cb
 * @property integer $revenue_distributed_cb
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjEventLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_event_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_event_header_id', 'event_type_id', 'org_id', 'event_number', 'prj_project_line_id', 'billed_cb', 'revenue_distributed_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['event_type_id', 'created_by', 'last_update_by'], 'required'],
            [['event_date', 'creation_date', 'last_update_date'], 'safe'],
            [['billing_amount', 'revenue_amount'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 25],
            [['reference_key_name', 'reference_key_value'], 'string', 'max' => 50],
            [['event_type_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_event_line_id' => Yii::t('app', 'Prj Event Line ID'),
            'prj_event_header_id' => Yii::t('app', 'Prj Event Header ID'),
            'event_type_id' => Yii::t('app', 'Event Type ID'),
            'event_date' => Yii::t('app', 'Event Date'),
            'org_id' => Yii::t('app', 'Org ID'),
            'event_number' => Yii::t('app', 'Event Number'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'description' => Yii::t('app', 'Description'),
            'currency' => Yii::t('app', 'Currency'),
            'billing_amount' => Yii::t('app', 'Billing Amount'),
            'revenue_amount' => Yii::t('app', 'Revenue Amount'),
            'billed_cb' => Yii::t('app', 'Billed Cb'),
            'revenue_distributed_cb' => Yii::t('app', 'Revenue Distributed Cb'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
