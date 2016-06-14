<?php

namespace common\modules\sd\models;

use Yii;

/**
 * This is the model class for table "{{%sd_sales_documents_v}}".
 *
 * @property string $document_id
 * @property string $docuemnt_number
 * @property string $sales_team
 * @property string $creation_date
 * @property string $document_type
 * @property string $status
 */
class SdSalesDocumentsV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sd_sales_documents_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['document_id'], 'integer'],
            [['creation_date'], 'safe'],
            [['docuemnt_number'], 'string', 'max' => 50],
            [['sales_team', 'status'], 'string', 'max' => 25],
            [['document_type'], 'string', 'max' => 11],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'document_id' => Yii::t('app', 'Document ID'),
            'docuemnt_number' => Yii::t('app', 'Docuemnt Number'),
            'sales_team' => Yii::t('app', 'Sales Team'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'document_type' => Yii::t('app', 'Document Type'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
}
