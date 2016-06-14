<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_task_type}}".
 *
 * @property string $hd_task_type_id
 * @property string $task_type
 * @property string $description
 * @property string $from_date
 * @property string $to_date
 * @property integer $effort_uom_id
 * @property string $effort_duration
 * @property integer $auto_schedule_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdTaskType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_task_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_type', 'created_by', 'last_update_by'], 'required'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['effort_uom_id', 'auto_schedule_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effort_duration'], 'number'],
            [['task_type'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['task_type'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_task_type_id' => Yii::t('app', 'Hd Task Type ID'),
            'task_type' => Yii::t('app', 'Task Type'),
            'description' => Yii::t('app', 'Description'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'effort_uom_id' => Yii::t('app', 'Effort Uom ID'),
            'effort_duration' => Yii::t('app', 'Effort Duration'),
            'auto_schedule_cb' => Yii::t('app', 'Auto Schedule Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
