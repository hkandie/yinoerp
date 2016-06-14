<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_balance}}".
 *
 * @property integer $gl_balance_id
 * @property integer $ledger_id
 * @property integer $coa_combination_id
 * @property integer $period_id
 * @property string $balance_type
 * @property string $period_net_dr
 * @property string $period_net_cr
 * @property string $begin_balance_dr
 * @property string $begin_balance_cr
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlBalance extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_balance}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ledger_id', 'coa_combination_id', 'period_id', 'balance_type', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['ledger_id', 'coa_combination_id', 'period_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['period_net_dr', 'period_net_cr', 'begin_balance_dr', 'begin_balance_cr'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['balance_type'], 'string', 'max' => 25],
            [['coa_combination_id', 'balance_type', 'begin_balance_dr', 'period_id'], 'unique', 'targetAttribute' => ['coa_combination_id', 'balance_type', 'begin_balance_dr', 'period_id'], 'message' => 'The combination of Coa Combination ID, Period ID, Balance Type and Begin Balance Dr has already been taken.'],
            [['period_id', 'coa_combination_id', 'balance_type', 'begin_balance_cr'], 'unique', 'targetAttribute' => ['period_id', 'coa_combination_id', 'balance_type', 'begin_balance_cr'], 'message' => 'The combination of Coa Combination ID, Period ID, Balance Type and Begin Balance Cr has already been taken.'],
            [['period_id', 'coa_combination_id', 'balance_type', 'period_net_cr'], 'unique', 'targetAttribute' => ['period_id', 'coa_combination_id', 'balance_type', 'period_net_cr'], 'message' => 'The combination of Coa Combination ID, Period ID, Balance Type and Period Net Cr has already been taken.'],
            [['period_id', 'coa_combination_id', 'balance_type', 'period_net_dr'], 'unique', 'targetAttribute' => ['period_id', 'coa_combination_id', 'balance_type', 'period_net_dr'], 'message' => 'The combination of Coa Combination ID, Period ID, Balance Type and Period Net Dr has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_balance_id' => Yii::t('app', 'Gl Balance ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'coa_combination_id' => Yii::t('app', 'Coa Combination ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'balance_type' => Yii::t('app', 'Balance Type'),
            'period_net_dr' => Yii::t('app', 'Period Net Dr'),
            'period_net_cr' => Yii::t('app', 'Period Net Cr'),
            'begin_balance_dr' => Yii::t('app', 'Begin Balance Dr'),
            'begin_balance_cr' => Yii::t('app', 'Begin Balance Cr'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
