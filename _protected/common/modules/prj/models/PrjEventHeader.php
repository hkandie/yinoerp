<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_event_header}}".
 *
 * @property string $prj_event_header_id
 * @property string $event_name
 * @property string $description
 * @property integer $prj_project_header_id
 * @property string $billing_amount
 * @property string $revenue_amount
 * @property integer $event_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjEventHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_event_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_name', 'created_by', 'last_update_by'], 'required'],
            [['prj_project_header_id', 'event_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['billing_amount', 'revenue_amount'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['event_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['prj_project_header_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_event_header_id' => Yii::t('app', 'Prj Event Header ID'),
            'event_name' => Yii::t('app', 'Event Name'),
            'description' => Yii::t('app', 'Description'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'billing_amount' => Yii::t('app', 'Billing Amount'),
            'revenue_amount' => Yii::t('app', 'Revenue Amount'),
            'event_number' => Yii::t('app', 'Event Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
