<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_ce_spectra_reading}}".
 *
 * @property integer $qa_ce_spectra_reading_id
 * @property string $reference_type
 * @property string $reference_entity
 * @property string $reference_key_name
 * @property integer $reference_key_value
 * @property integer $qa_cp_header_id
 * @property string $created_by
 * @property string $creation_date
 * @property string $last_update_by
 * @property string $last_update_date
 * @property string $qa_ce_spectra_reading_value
 * @property integer $company_id
 */
class QaCeSpectraReading extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_ce_spectra_reading}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reference_key_value', 'qa_cp_header_id', 'company_id'], 'integer'],
            [['created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['reference_type'], 'string', 'max' => 30],
            [['reference_entity', 'reference_key_name'], 'string', 'max' => 50],
            [['created_by', 'last_update_by'], 'string', 'max' => 256],
            [['qa_ce_spectra_reading_value'], 'string', 'max' => 10],
            [['qa_ce_spectra_reading_value', 'reference_key_name', 'reference_key_value'], 'unique', 'targetAttribute' => ['qa_ce_spectra_reading_value', 'reference_key_name', 'reference_key_value'], 'message' => 'The combination of Reference Key Name, Reference Key Value and Qa Ce Spectra Reading Value has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_ce_spectra_reading_id' => Yii::t('app', 'Qa Ce Spectra Reading ID'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_entity' => Yii::t('app', 'Reference Entity'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'qa_cp_header_id' => Yii::t('app', 'Qa Cp Header ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'qa_ce_spectra_reading_value' => Yii::t('app', 'Qa Ce Spectra Reading Value'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
