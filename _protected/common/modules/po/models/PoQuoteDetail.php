<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_quote_detail}}".
 *
 * @property integer $po_quote_detail_id
 * @property integer $po_quote_header_id
 * @property integer $po_quote_line_id
 * @property integer $po_rfq_detail_id
 * @property string $requirement_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoQuoteDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_quote_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['po_quote_header_id', 'po_quote_line_id', 'po_rfq_detail_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['po_quote_header_id', 'po_quote_line_id', 'po_rfq_detail_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['requirement_value'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['po_quote_line_id', 'po_rfq_detail_id'], 'unique', 'targetAttribute' => ['po_quote_line_id', 'po_rfq_detail_id'], 'message' => 'The combination of Po Quote Line ID and Po Rfq Detail ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_quote_detail_id' => Yii::t('app', 'Po Quote Detail ID'),
            'po_quote_header_id' => Yii::t('app', 'Po Quote Header ID'),
            'po_quote_line_id' => Yii::t('app', 'Po Quote Line ID'),
            'po_rfq_detail_id' => Yii::t('app', 'Po Rfq Detail ID'),
            'requirement_value' => Yii::t('app', 'Requirement Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
