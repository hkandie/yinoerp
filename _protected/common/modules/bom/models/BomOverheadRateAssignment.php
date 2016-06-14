<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_overhead_rate_assignment}}".
 *
 * @property integer $bom_overhead_rate_assignment_id
 * @property integer $bom_overhead_id
 * @property string $bom_cost_type
 * @property string $default_basis
 * @property integer $rate
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomOverheadRateAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_overhead_rate_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_overhead_id', 'bom_cost_type', 'default_basis', 'rate', 'created_by', 'last_update_by'], 'required'],
            [['bom_overhead_id', 'rate', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['bom_cost_type', 'default_basis'], 'string', 'max' => 25],
            [['bom_overhead_id', 'bom_cost_type'], 'unique', 'targetAttribute' => ['bom_overhead_id', 'bom_cost_type'], 'message' => 'The combination of Bom Overhead ID and Bom Cost Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_overhead_rate_assignment_id' => Yii::t('app', 'Bom Overhead Rate Assignment ID'),
            'bom_overhead_id' => Yii::t('app', 'Bom Overhead ID'),
            'bom_cost_type' => Yii::t('app', 'Bom Cost Type'),
            'default_basis' => Yii::t('app', 'Default Basis'),
            'rate' => Yii::t('app', 'Rate'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
