<?php

namespace common\modules\option\models;

use Yii;

/**
 * This is the model class for table "{{%option_detail}}".
 *
 * @property string $option_detail_id
 * @property string $option_header_id
 * @property string $option_line_id
 * @property string $option_detail_value
 * @property string $description
 * @property integer $efid
 * @property string $status
 * @property string $rev_enabled
 * @property integer $rev_number
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 *
 * @property OptionHeader $optionHeader
 */
class OptionDetail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%option_detail}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_header_id', 'option_line_id', 'option_detail_value', 'created_by', 'last_update_by'], 'required'],
            [['option_header_id', 'option_line_id', 'efid', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status', 'rev_enabled'], 'string'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['option_detail_value'], 'string', 'max' => 256],
            [['description'], 'string', 'max' => 255],
            [['option_line_id', 'option_detail_value'], 'unique', 'targetAttribute' => ['option_line_id', 'option_detail_value'], 'message' => 'The combination of Option Line ID and Option Detail Value has already been taken.'],
            [['option_header_id'], 'exist', 'skipOnError' => true, 'targetClass' => OptionHeader::className(), 'targetAttribute' => ['option_header_id' => 'option_header_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'option_detail_id' => Yii::t('app', 'Option Detail ID'),
            'option_header_id' => Yii::t('app', 'Option Header ID'),
            'option_line_id' => Yii::t('app', 'Option Line ID'),
            'option_detail_value' => Yii::t('app', 'Option Detail Value'),
            'description' => Yii::t('app', 'Description'),
            'efid' => Yii::t('app', 'Efid'),
            'status' => Yii::t('app', 'Status'),
            'rev_enabled' => Yii::t('app', 'Rev Enabled'),
            'rev_number' => Yii::t('app', 'Rev Number'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOptionHeader()
    {
        return $this->hasOne(OptionHeader::className(), ['option_header_id' => 'option_header_id']);
    }
}
