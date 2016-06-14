<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_hold_reference}}".
 *
 * @property string $sys_hold_reference_id
 * @property string $hold_code
 * @property string $reference_table
 * @property integer $reference_id
 * @property string $hold_applied_by
 * @property string $hold_applied_on
 * @property string $application_reason
 * @property string $hold_removed_by
 * @property string $hold_removed_on
 * @property string $removal_reason
 * @property integer $hold_count
 * @property integer $company_id
 */
class SysHoldReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_hold_reference}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hold_code', 'reference_table', 'reference_id'], 'required'],
            [['reference_id', 'hold_count', 'company_id'], 'integer'],
            [['hold_applied_on', 'hold_removed_on'], 'safe'],
            [['hold_code', 'reference_table', 'hold_applied_by', 'hold_removed_by'], 'string', 'max' => 50],
            [['application_reason', 'removal_reason'], 'string', 'max' => 256],
            [['hold_code', 'reference_table', 'reference_id', 'hold_count'], 'unique', 'targetAttribute' => ['hold_code', 'reference_table', 'reference_id', 'hold_count'], 'message' => 'The combination of Hold Code, Reference Table, Reference ID and Hold Count has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_hold_reference_id' => Yii::t('app', 'Sys Hold Reference ID'),
            'hold_code' => Yii::t('app', 'Hold Code'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'hold_applied_by' => Yii::t('app', 'Hold Applied By'),
            'hold_applied_on' => Yii::t('app', 'Hold Applied On'),
            'application_reason' => Yii::t('app', 'Application Reason'),
            'hold_removed_by' => Yii::t('app', 'Hold Removed By'),
            'hold_removed_on' => Yii::t('app', 'Hold Removed On'),
            'removal_reason' => Yii::t('app', 'Removal Reason'),
            'hold_count' => Yii::t('app', 'Hold Count'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
