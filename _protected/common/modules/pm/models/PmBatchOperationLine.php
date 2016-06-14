<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_batch_operation_line}}".
 *
 * @property string $pm_batch_operation_line_id
 * @property integer $pm_batch_header_id
 * @property integer $pm_process_routing_header_id
 * @property string $activity_code
 * @property string $description
 * @property string $activity_factror
 * @property integer $sequence_dependency_cb
 * @property string $offset_interval
 * @property integer $breakable_cb
 * @property integer $material_scheduled_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmBatchOperationLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_batch_operation_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pm_batch_header_id', 'pm_process_routing_header_id', 'activity_code', 'created_by', 'last_update_by'], 'required'],
            [['pm_batch_header_id', 'pm_process_routing_header_id', 'sequence_dependency_cb', 'breakable_cb', 'material_scheduled_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['activity_factror', 'offset_interval'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['activity_code'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['pm_batch_header_id', 'activity_code'], 'unique', 'targetAttribute' => ['pm_batch_header_id', 'activity_code'], 'message' => 'The combination of Pm Batch Header ID and Activity Code has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_batch_operation_line_id' => Yii::t('app', 'Pm Batch Operation Line ID'),
            'pm_batch_header_id' => Yii::t('app', 'Pm Batch Header ID'),
            'pm_process_routing_header_id' => Yii::t('app', 'Pm Process Routing Header ID'),
            'activity_code' => Yii::t('app', 'Activity Code'),
            'description' => Yii::t('app', 'Description'),
            'activity_factror' => Yii::t('app', 'Activity Factror'),
            'sequence_dependency_cb' => Yii::t('app', 'Sequence Dependency Cb'),
            'offset_interval' => Yii::t('app', 'Offset Interval'),
            'breakable_cb' => Yii::t('app', 'Breakable Cb'),
            'material_scheduled_cb' => Yii::t('app', 'Material Scheduled Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
