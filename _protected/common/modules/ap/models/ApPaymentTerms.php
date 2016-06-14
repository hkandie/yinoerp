<?php

namespace common\modules\ap\models;

use Yii;

/**
 * This is the model class for table "ap_payment_terms".
 *
 * @property integer $term_id
 * @property string $term_name
 * @property string $term_description
 * @property string $end_date
 * @property integer $company_id
 */
class ApPaymentTerms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ap_payment_terms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['term_description', 'end_date'], 'required'],
            [['end_date'], 'safe'],
            [['company_id'], 'integer'],
            [['term_name'], 'string', 'max' => 12],
            [['term_description'], 'string', 'max' => 50],
            [['term_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'term_id' => Yii::t('app', 'Term ID'),
            'term_name' => Yii::t('app', 'Term Name'),
            'term_description' => Yii::t('app', 'Term Description'),
            'end_date' => Yii::t('app', 'End Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
