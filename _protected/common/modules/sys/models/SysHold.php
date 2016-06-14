<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_hold}}".
 *
 * @property string $sys_hold_id
 * @property string $hold_code
 * @property string $hold_name
 * @property string $hold_type
 * @property integer $manual_released_cb
 * @property string $description
 * @property string $status
 * @property string $access_level
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysHold extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_hold}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hold_code', 'hold_name', 'hold_type', 'created_by', 'last_update_by'], 'required'],
            [['manual_released_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['hold_code', 'hold_name', 'hold_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 20],
            [['access_level'], 'string', 'max' => 25],
            [['hold_code'], 'unique'],
            [['hold_name'], 'unique'],
            [['hold_code'], 'unique'],
            [['hold_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_hold_id' => Yii::t('app', 'Sys Hold ID'),
            'hold_code' => Yii::t('app', 'Hold Code'),
            'hold_name' => Yii::t('app', 'Hold Name'),
            'hold_type' => Yii::t('app', 'Hold Type'),
            'manual_released_cb' => Yii::t('app', 'Manual Released Cb'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'access_level' => Yii::t('app', 'Access Level'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
