<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_ledger}}".
 *
 * @property integer $gl_ledger_id
 * @property string $ledger
 * @property string $description
 * @property integer $coa_id
 * @property integer $coa_structure_id
 * @property string $calendar_option_line_code
 * @property string $currency_code
 * @property integer $future_enabled_periods
 * @property integer $currency_balancing_ac_id
 * @property integer $retained_earnings_ac_id
 * @property integer $suspense_ac_id
 * @property integer $rev_enabled
 * @property integer $rev_number
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlLedger extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_ledger}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ledger', 'coa_id', 'coa_structure_id', 'calendar_option_line_code', 'currency_code', 'suspense_ac_id', 'created_by', 'last_update_by', 'last_update_date'], 'required'],
            [['coa_id', 'coa_structure_id', 'future_enabled_periods', 'currency_balancing_ac_id', 'retained_earnings_ac_id', 'suspense_ac_id', 'rev_enabled', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['ledger', 'calendar_option_line_code'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['currency_code'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_ledger_id' => Yii::t('app', 'Gl Ledger ID'),
            'ledger' => Yii::t('app', 'Ledger'),
            'description' => Yii::t('app', 'Description'),
            'coa_id' => Yii::t('app', 'Coa ID'),
            'coa_structure_id' => Yii::t('app', 'Coa Structure ID'),
            'calendar_option_line_code' => Yii::t('app', 'Calendar Option Line Code'),
            'currency_code' => Yii::t('app', 'Currency Code'),
            'future_enabled_periods' => Yii::t('app', 'Future Enabled Periods'),
            'currency_balancing_ac_id' => Yii::t('app', 'Currency Balancing Ac ID'),
            'retained_earnings_ac_id' => Yii::t('app', 'Retained Earnings Ac ID'),
            'suspense_ac_id' => Yii::t('app', 'Suspense Ac ID'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
