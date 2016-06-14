<?php

namespace common\modules\am\models;

use Yii;

/**
 * This is the model class for table "am_activity_reference".
 *
 * @property string $am_activity_reference_id
 * @property integer $am_asset_id
 * @property integer $activity_item_id_m
 * @property integer $priority
 * @property string $start_date
 * @property string $end_date
 * @property string $description
 * @property string $activity_cause
 * @property string $activity_type
 * @property integer $accounting_class_id
 * @property integer $owning_department_id
 * @property string $shutdown_type
 * @property string $activity_source
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class AmActivityReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'am_activity_reference';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['am_asset_id', 'activity_item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['am_asset_id', 'activity_item_id_m', 'priority', 'accounting_class_id', 'owning_department_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['activity_cause', 'activity_type', 'shutdown_type', 'activity_source'], 'string', 'max' => 25],
            [['am_asset_id'], 'unique'],
            [['priority'], 'unique'],
            [['am_asset_id', 'start_date'], 'unique', 'targetAttribute' => ['am_asset_id', 'start_date'], 'message' => 'The combination of Am Asset ID and Start Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'am_activity_reference_id' => Yii::t('app', 'Am Activity Reference ID'),
            'am_asset_id' => Yii::t('app', 'Am Asset ID'),
            'activity_item_id_m' => Yii::t('app', 'Activity Item Id M'),
            'priority' => Yii::t('app', 'Priority'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'description' => Yii::t('app', 'Description'),
            'activity_cause' => Yii::t('app', 'Activity Cause'),
            'activity_type' => Yii::t('app', 'Activity Type'),
            'accounting_class_id' => Yii::t('app', 'Accounting Class ID'),
            'owning_department_id' => Yii::t('app', 'Owning Department ID'),
            'shutdown_type' => Yii::t('app', 'Shutdown Type'),
            'activity_source' => Yii::t('app', 'Activity Source'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
