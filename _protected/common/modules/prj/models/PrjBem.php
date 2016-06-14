<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_bem}}".
 *
 * @property string $prj_bem_id
 * @property string $bem
 * @property string $description
 * @property string $budget_entry_level
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $quantity_cost_cb
 * @property integer $raw_cost_cb
 * @property integer $burdened_cost_cb
 * @property integer $revenue_cb
 * @property integer $quantity_revenue_cb
 * @property string $time_phased_by
 * @property integer $categorized_by_resource_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_bem}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bem', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['quantity_cost_cb', 'raw_cost_cb', 'burdened_cost_cb', 'revenue_cb', 'quantity_revenue_cb', 'categorized_by_resource_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['bem', 'budget_entry_level', 'time_phased_by'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['bem'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_bem_id' => Yii::t('app', 'Prj Bem ID'),
            'bem' => Yii::t('app', 'Bem'),
            'description' => Yii::t('app', 'Description'),
            'budget_entry_level' => Yii::t('app', 'Budget Entry Level'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'quantity_cost_cb' => Yii::t('app', 'Quantity Cost Cb'),
            'raw_cost_cb' => Yii::t('app', 'Raw Cost Cb'),
            'burdened_cost_cb' => Yii::t('app', 'Burdened Cost Cb'),
            'revenue_cb' => Yii::t('app', 'Revenue Cb'),
            'quantity_revenue_cb' => Yii::t('app', 'Quantity Revenue Cb'),
            'time_phased_by' => Yii::t('app', 'Time Phased By'),
            'categorized_by_resource_cb' => Yii::t('app', 'Categorized By Resource Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
