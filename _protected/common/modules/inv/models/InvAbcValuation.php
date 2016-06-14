<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_abc_valuation}}".
 *
 * @property integer $inv_abc_valuation_id
 * @property string $valuation_name
 * @property integer $scope_org_id
 * @property integer $scope_sub_inventory_id
 * @property integer $scope_org_hirearchy_id
 * @property string $description
 * @property string $scope_product_line
 * @property string $criteria
 * @property string $cost_type
 * @property integer $fp_forecast_header_id
 * @property integer $fp_mrp_header_id
 * @property string $from_date
 * @property string $to_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvAbcValuation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_abc_valuation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['valuation_name', 'created_by', 'last_update_by'], 'required'],
            [['scope_org_id', 'scope_sub_inventory_id', 'scope_org_hirearchy_id', 'fp_forecast_header_id', 'fp_mrp_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['valuation_name', 'scope_product_line', 'criteria'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['cost_type'], 'string', 'max' => 25],
            [['valuation_name', 'scope_sub_inventory_id'], 'unique', 'targetAttribute' => ['valuation_name', 'scope_sub_inventory_id'], 'message' => 'The combination of Valuation Name and Scope Sub Inventory ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_abc_valuation_id' => Yii::t('app', 'Inv Abc Valuation ID'),
            'valuation_name' => Yii::t('app', 'Valuation Name'),
            'scope_org_id' => Yii::t('app', 'Scope Org ID'),
            'scope_sub_inventory_id' => Yii::t('app', 'Scope Sub Inventory ID'),
            'scope_org_hirearchy_id' => Yii::t('app', 'Scope Org Hirearchy ID'),
            'description' => Yii::t('app', 'Description'),
            'scope_product_line' => Yii::t('app', 'Scope Product Line'),
            'criteria' => Yii::t('app', 'Criteria'),
            'cost_type' => Yii::t('app', 'Cost Type'),
            'fp_forecast_header_id' => Yii::t('app', 'Fp Forecast Header ID'),
            'fp_mrp_header_id' => Yii::t('app', 'Fp Mrp Header ID'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
