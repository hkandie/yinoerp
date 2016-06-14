<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_event_type}}".
 *
 * @property string $prj_event_type_id
 * @property string $event_type
 * @property string $description
 * @property string $event_class
 * @property string $revenue_category
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjEventType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_event_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_type', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['event_type', 'event_class', 'revenue_category'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['event_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_event_type_id' => Yii::t('app', 'Prj Event Type ID'),
            'event_type' => Yii::t('app', 'Event Type'),
            'description' => Yii::t('app', 'Description'),
            'event_class' => Yii::t('app', 'Event Class'),
            'revenue_category' => Yii::t('app', 'Revenue Category'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
