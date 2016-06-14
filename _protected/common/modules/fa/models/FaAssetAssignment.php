<?php

namespace common\modules\fa\models;

use Yii;

/**
 * This is the model class for table "{{%fa_asset_assignment}}".
 *
 * @property string $fa_asset_assignment_id
 * @property integer $fa_asset_id
 * @property string $units
 * @property integer $hr_employee_id
 * @property integer $address_id
 * @property integer $expense_ac_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FaAssetAssignment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fa_asset_assignment}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fa_asset_id', 'units', 'expense_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['fa_asset_id', 'hr_employee_id', 'address_id', 'expense_ac_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['units'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fa_asset_assignment_id' => Yii::t('app', 'Fa Asset Assignment ID'),
            'fa_asset_id' => Yii::t('app', 'Fa Asset ID'),
            'units' => Yii::t('app', 'Units'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'address_id' => Yii::t('app', 'Address ID'),
            'expense_ac_id' => Yii::t('app', 'Expense Ac ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
