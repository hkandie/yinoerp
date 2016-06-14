<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_document_sequence}}".
 *
 * @property string $sys_document_sequence_id
 * @property integer $bu_org_id
 * @property string $entry_type
 * @property string $pre_fix
 * @property string $seq_separator
 * @property integer $next_number
 * @property string $document_type
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysDocumentSequence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_document_sequence}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'entry_type', 'document_type', 'start_date', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'next_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['entry_type', 'pre_fix'], 'string', 'max' => 25],
            [['seq_separator'], 'string', 'max' => 10],
            [['document_type'], 'string', 'max' => 50],
            [['bu_org_id', 'next_number', 'document_type'], 'unique', 'targetAttribute' => ['bu_org_id', 'next_number', 'document_type'], 'message' => 'The combination of Bu Org ID, Next Number and Document Type has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_document_sequence_id' => Yii::t('app', 'Sys Document Sequence ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'entry_type' => Yii::t('app', 'Entry Type'),
            'pre_fix' => Yii::t('app', 'Pre Fix'),
            'seq_separator' => Yii::t('app', 'Seq Separator'),
            'next_number' => Yii::t('app', 'Next Number'),
            'document_type' => Yii::t('app', 'Document Type'),
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
