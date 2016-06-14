<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_cost_base}}".
 *
 * @property string $prj_burden_cost_base_id
 * @property string $cost_base
 * @property string $description
 * @property string $cost_base_type
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $priority
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenCostBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_cost_base}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cost_base', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['priority', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['cost_base', 'cost_base_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['cost_base'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_cost_base_id' => Yii::t('app', 'Prj Burden Cost Base ID'),
            'cost_base' => Yii::t('app', 'Cost Base'),
            'description' => Yii::t('app', 'Description'),
            'cost_base_type' => Yii::t('app', 'Cost Base Type'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'priority' => Yii::t('app', 'Priority'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
