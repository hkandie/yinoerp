<?php

namespace common\modules\hd\models;

use Yii;

/**
 * This is the model class for table "{{%hd_service_activity_header}}".
 *
 * @property integer $hd_service_activity_header_id
 * @property string $activity_name
 * @property string $activity_description
 * @property string $line_category
 * @property string $start_date
 * @property string $end_date
 * @property integer $allow_quantity_update_cb
 * @property integer $create_charge_cb
 * @property integer $create_cost_cb
 * @property integer $zero_charge_cb
 * @property integer $expense_cb
 * @property integer $labor_cb
 * @property integer $material_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HdServiceActivityHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hd_service_activity_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['activity_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['allow_quantity_update_cb', 'create_charge_cb', 'create_cost_cb', 'zero_charge_cb', 'expense_cb', 'labor_cb', 'material_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['activity_name'], 'string', 'max' => 50],
            [['activity_description'], 'string', 'max' => 256],
            [['line_category'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hd_service_activity_header_id' => Yii::t('app', 'Hd Service Activity Header ID'),
            'activity_name' => Yii::t('app', 'Activity Name'),
            'activity_description' => Yii::t('app', 'Activity Description'),
            'line_category' => Yii::t('app', 'Line Category'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'allow_quantity_update_cb' => Yii::t('app', 'Allow Quantity Update Cb'),
            'create_charge_cb' => Yii::t('app', 'Create Charge Cb'),
            'create_cost_cb' => Yii::t('app', 'Create Cost Cb'),
            'zero_charge_cb' => Yii::t('app', 'Zero Charge Cb'),
            'expense_cb' => Yii::t('app', 'Expense Cb'),
            'labor_cb' => Yii::t('app', 'Labor Cb'),
            'material_cb' => Yii::t('app', 'Material Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
