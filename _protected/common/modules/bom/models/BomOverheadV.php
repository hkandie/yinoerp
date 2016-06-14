<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_overhead_v}}".
 *
 * @property integer $bom_overhead_resource_assignment_id
 * @property string $resource_bom_cost_type
 * @property integer $resource_id
 * @property integer $bom_overhead_rate_assignment_id
 * @property integer $bom_overhead_id
 * @property string $rate_bom_cost_type
 * @property string $default_basis
 * @property integer $rate
 * @property string $overhead
 * @property string $description
 * @property integer $org_id
 * @property string $overhead_type
 * @property integer $absorption_ac_id
 */
class BomOverheadV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_overhead_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_overhead_resource_assignment_id', 'resource_id', 'bom_overhead_rate_assignment_id', 'bom_overhead_id', 'rate', 'org_id', 'absorption_ac_id'], 'integer'],
            [['bom_overhead_id', 'rate_bom_cost_type', 'default_basis', 'rate'], 'required'],
            [['resource_bom_cost_type', 'rate_bom_cost_type', 'default_basis'], 'string', 'max' => 25],
            [['overhead', 'overhead_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_overhead_resource_assignment_id' => Yii::t('app', 'Bom Overhead Resource Assignment ID'),
            'resource_bom_cost_type' => Yii::t('app', 'Resource Bom Cost Type'),
            'resource_id' => Yii::t('app', 'Resource ID'),
            'bom_overhead_rate_assignment_id' => Yii::t('app', 'Bom Overhead Rate Assignment ID'),
            'bom_overhead_id' => Yii::t('app', 'Bom Overhead ID'),
            'rate_bom_cost_type' => Yii::t('app', 'Rate Bom Cost Type'),
            'default_basis' => Yii::t('app', 'Default Basis'),
            'rate' => Yii::t('app', 'Rate'),
            'overhead' => Yii::t('app', 'Overhead'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'overhead_type' => Yii::t('app', 'Overhead Type'),
            'absorption_ac_id' => Yii::t('app', 'Absorption Ac ID'),
        ];
    }
}
