<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_currency_conversion}}".
 *
 * @property string $gl_currency_conversion_id
 * @property string $currency_conversion_type
 * @property string $from_currency
 * @property string $to_currency
 * @property string $from_date
 * @property string $to_date
 * @property string $rate
 * @property integer $use_reverse_conversion
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlCurrencyConversion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_currency_conversion}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['currency_conversion_type', 'from_currency', 'to_currency', 'from_date', 'rate', 'created_by', 'last_update_by'], 'required'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['rate'], 'number'],
            [['use_reverse_conversion', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['currency_conversion_type'], 'string', 'max' => 25],
            [['from_currency', 'to_currency'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 256],
            [['currency_conversion_type', 'from_date', 'from_currency', 'to_currency'], 'unique', 'targetAttribute' => ['currency_conversion_type', 'from_date', 'from_currency', 'to_currency'], 'message' => 'The combination of Currency Conversion Type, From Currency, To Currency and From Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_currency_conversion_id' => Yii::t('app', 'Gl Currency Conversion ID'),
            'currency_conversion_type' => Yii::t('app', 'Currency Conversion Type'),
            'from_currency' => Yii::t('app', 'From Currency'),
            'to_currency' => Yii::t('app', 'To Currency'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'rate' => Yii::t('app', 'Rate'),
            'use_reverse_conversion' => Yii::t('app', 'Use Reverse Conversion'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
