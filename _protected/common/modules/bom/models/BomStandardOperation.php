<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_standard_operation}}".
 *
 * @property integer $bom_standard_operation_id
 * @property string $standard_operation
 * @property integer $org_id
 * @property integer $department_id
 * @property string $description
 * @property integer $count_point_cb
 * @property integer $auto_charge_cb
 * @property integer $backflush_cb
 * @property string $status
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomStandardOperation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_standard_operation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['standard_operation', 'org_id', 'department_id', 'description', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'department_id', 'count_point_cb', 'auto_charge_cb', 'backflush_cb', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['standard_operation'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_standard_operation_id' => Yii::t('app', 'Bom Standard Operation ID'),
            'standard_operation' => Yii::t('app', 'Standard Operation'),
            'org_id' => Yii::t('app', 'Org ID'),
            'department_id' => Yii::t('app', 'Department ID'),
            'description' => Yii::t('app', 'Description'),
            'count_point_cb' => Yii::t('app', 'Count Point Cb'),
            'auto_charge_cb' => Yii::t('app', 'Auto Charge Cb'),
            'backflush_cb' => Yii::t('app', 'Backflush Cb'),
            'status' => Yii::t('app', 'Status'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
