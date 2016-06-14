<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_depreciation_method}}".
 *
 * @property string $fa_depreciation_method_id
 * @property string $depreciation_method
 * @property string $method_type
 * @property string $calculation_basis
 * @property integer $life_month
 * @property string $reducing_balance_rate
 * @property string $status
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaDepreciationMethod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_depreciation_method}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['depreciation_method', 'created_by', 'last_update_by'], 'required'],
            [['life_month', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['reducing_balance_rate'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['depreciation_method', 'method_type', 'calculation_basis'], 'string', 'max' => 25],
            [['status'], 'string', 'max' => 15],
            [['description'], 'string', 'max' => 256],
            [['depreciation_method'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_depreciation_method_id' => Yii::t('app', 'Fa Depreciation Method ID'),
            'depreciation_method' => Yii::t('app', 'Depreciation Method'),
            'method_type' => Yii::t('app', 'Method Type'),
            'calculation_basis' => Yii::t('app', 'Calculation Basis'),
            'life_month' => Yii::t('app', 'Life Month'),
            'reducing_balance_rate' => Yii::t('app', 'Reducing Balance Rate'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
