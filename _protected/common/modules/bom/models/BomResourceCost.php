<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_resource_cost}}".
 *
 * @property integer $bom_resource_cost_id
 * @property integer $bom_resource_id
 * @property string $bom_cost_type
 * @property string $resource_rate
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomResourceCost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_resource_cost}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bom_resource_id', 'bom_cost_type', 'resource_rate', 'created_by', 'last_update_by'], 'required'],
            [['bom_resource_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['resource_rate'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['bom_cost_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_resource_cost_id' => Yii::t('app', 'Bom Resource Cost ID'),
            'bom_resource_id' => Yii::t('app', 'Bom Resource ID'),
            'bom_cost_type' => Yii::t('app', 'Bom Cost Type'),
            'resource_rate' => Yii::t('app', 'Resource Rate'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
