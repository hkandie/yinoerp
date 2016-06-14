<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_balance_v}}".
 *
 * @property string $period_name
 * @property string $gl_period_id
 * @property string $combination
 * @property string $description
 * @property integer $gl_balance_id
 * @property integer $ledger_id
 * @property integer $coa_combination_id
 * @property integer $period_id
 * @property string $balance_type
 * @property string $period_net_dr
 * @property string $period_net_cr
 * @property string $begin_balance_dr
 * @property string $begin_balance_cr
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $field1
 * @property string $field2
 * @property string $field3
 * @property string $field4
 * @property string $field5
 * @property string $field6
 * @property string $field7
 * @property string $field8
 */
class GlBalanceV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_balance_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_period_id', 'gl_balance_id', 'ledger_id', 'coa_combination_id', 'period_id', 'last_update_by'], 'integer'],
            [['ledger_id', 'coa_combination_id', 'period_id', 'balance_type', 'last_update_by', 'last_update_date'], 'required'],
            [['period_net_dr', 'period_net_cr', 'begin_balance_dr', 'begin_balance_cr'], 'number'],
            [['last_update_date'], 'safe'],
            [['period_name', 'balance_type'], 'string', 'max' => 25],
            [['combination'], 'string', 'max' => 256],
            [['description'], 'string', 'max' => 200],
            [['field1', 'field2', 'field3', 'field4', 'field5', 'field6', 'field7', 'field8'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'period_name' => Yii::t('app', 'Period Name'),
            'gl_period_id' => Yii::t('app', 'Gl Period ID'),
            'combination' => Yii::t('app', 'Combination'),
            'description' => Yii::t('app', 'Description'),
            'gl_balance_id' => Yii::t('app', 'Gl Balance ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'coa_combination_id' => Yii::t('app', 'Coa Combination ID'),
            'period_id' => Yii::t('app', 'Period ID'),
            'balance_type' => Yii::t('app', 'Balance Type'),
            'period_net_dr' => Yii::t('app', 'Period Net Dr'),
            'period_net_cr' => Yii::t('app', 'Period Net Cr'),
            'begin_balance_dr' => Yii::t('app', 'Begin Balance Dr'),
            'begin_balance_cr' => Yii::t('app', 'Begin Balance Cr'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'field1' => Yii::t('app', 'Field1'),
            'field2' => Yii::t('app', 'Field2'),
            'field3' => Yii::t('app', 'Field3'),
            'field4' => Yii::t('app', 'Field4'),
            'field5' => Yii::t('app', 'Field5'),
            'field6' => Yii::t('app', 'Field6'),
            'field7' => Yii::t('app', 'Field7'),
            'field8' => Yii::t('app', 'Field8'),
        ];
    }
}
