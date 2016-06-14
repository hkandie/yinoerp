<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_overhead_resource_assignment}}".
 *
 * @property integer $bom_overhead_resource_assignment_id
 * @property integer $bom_overhead_id
 * @property string $bom_cost_type
 * @property integer $resource_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomOverheadResourceAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_overhead_resource_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_overhead_id', 'bom_cost_type', 'resource_id', 'created_by', 'last_update_by'], 'required'],
            [['bom_overhead_id', 'resource_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['bom_cost_type'], 'string', 'max' => 25],
            [['bom_overhead_id', 'bom_cost_type', 'resource_id'], 'unique', 'targetAttribute' => ['bom_overhead_id', 'bom_cost_type', 'resource_id'], 'message' => 'The combination of Bom Overhead ID, Bom Cost Type and Resource ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_overhead_resource_assignment_id' => Yii::t('app', 'Bom Overhead Resource Assignment ID'),
            'bom_overhead_id' => Yii::t('app', 'Bom Overhead ID'),
            'bom_cost_type' => Yii::t('app', 'Bom Cost Type'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
