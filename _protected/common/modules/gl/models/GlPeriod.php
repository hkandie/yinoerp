<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_period}}".
 *
 * @property string $gl_period_id
 * @property integer $gl_calendar_id
 * @property integer $ledger_id
 * @property string $period_name
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlPeriod extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_period}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_calendar_id', 'ledger_id', 'period_name', 'status', 'created_by', 'last_update_by'], 'required'],
            [['gl_calendar_id', 'ledger_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['period_name', 'status'], 'string', 'max' => 25],
            [['gl_calendar_id', 'ledger_id'], 'unique', 'targetAttribute' => ['gl_calendar_id', 'ledger_id'], 'message' => 'The combination of Gl Calendar ID and Ledger ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_period_id' => Yii::t('app', 'Gl Period ID'),
            'gl_calendar_id' => Yii::t('app', 'Gl Calendar ID'),
            'ledger_id' => Yii::t('app', 'Ledger ID'),
            'period_name' => Yii::t('app', 'Period Name'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
