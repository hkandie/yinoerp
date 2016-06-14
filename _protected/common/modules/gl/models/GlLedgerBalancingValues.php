<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_ledger_balancing_values}}".
 *
 * @property integer $gl_ledger_balancing_values_id
 * @property integer $gl_ledger_id
 * @property string $balancing_values
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlLedgerBalancingValues extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_ledger_balancing_values}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_ledger_id', 'balancing_values', 'created_by', 'last_update_by', 'last_update_date'], 'required'],
            [['gl_ledger_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['balancing_values'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_ledger_balancing_values_id' => Yii::t('app', 'Gl Ledger Balancing Values ID'),
            'gl_ledger_id' => Yii::t('app', 'Gl Ledger ID'),
            'balancing_values' => Yii::t('app', 'Balancing Values'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
