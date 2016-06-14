<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_rate_schedule_header}}".
 *
 * @property string $prj_rate_schedule_header_id
 * @property integer $bu_org_id
 * @property string $rate_type
 * @property string $schedule_name
 * @property string $description
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjRateScheduleHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_rate_schedule_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'rate_type', 'schedule_name', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['rate_type'], 'string', 'max' => 25],
            [['schedule_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['schedule_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_rate_schedule_header_id' => Yii::t('app', 'Prj Rate Schedule Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'rate_type' => Yii::t('app', 'Rate Type'),
            'schedule_name' => Yii::t('app', 'Schedule Name'),
            'description' => Yii::t('app', 'Description'),
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
