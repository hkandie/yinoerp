<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_cost_type}}".
 *
 * @property integer $bom_cost_type_id
 * @property string $cost_type_code
 * @property string $cost_type
 * @property string $description
 * @property integer $org_id
 * @property string $status
 * @property integer $multi_org_cb
 * @property integer $default_cost_type
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomCostType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_cost_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cost_type_code', 'cost_type', 'description', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'multi_org_cb', 'default_cost_type', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['cost_type_code'], 'string', 'max' => 25],
            [['cost_type', 'status'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['cost_type', 'org_id'], 'unique', 'targetAttribute' => ['cost_type', 'org_id'], 'message' => 'The combination of Cost Type and Org ID has already been taken.'],
            [['cost_type_code'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_cost_type_id' => Yii::t('app', 'Bom Cost Type ID'),
            'cost_type_code' => Yii::t('app', 'Cost Type Code'),
            'cost_type' => Yii::t('app', 'Cost Type'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'multi_org_cb' => Yii::t('app', 'Multi Org Cb'),
            'default_cost_type' => Yii::t('app', 'Default Cost Type'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
