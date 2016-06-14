<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_asl_document}}".
 *
 * @property integer $po_asl_document_id
 * @property integer $po_asl_line_id
 * @property string $document_type
 * @property integer $document_header_id
 * @property integer $document_line_id
 * @property integer $priority
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoAslDocument extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_asl_document}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_asl_line_id', 'document_type', 'document_header_id', 'created_by', 'last_update_by'], 'required'],
            [['po_asl_line_id', 'document_header_id', 'document_line_id', 'priority', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['document_type'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_asl_document_id' => Yii::t('app', 'Po Asl Document ID'),
            'po_asl_line_id' => Yii::t('app', 'Po Asl Line ID'),
            'document_type' => Yii::t('app', 'Document Type'),
            'document_header_id' => Yii::t('app', 'Document Header ID'),
            'document_line_id' => Yii::t('app', 'Document Line ID'),
            'priority' => Yii::t('app', 'Priority'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
