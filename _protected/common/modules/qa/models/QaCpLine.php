<?php

namespace common\modules\qa\models;

use Yii;

/**
 * This is the model class for table "{{%qa_cp_line}}".
 *
 * @property integer $qa_cp_line_id
 * @property integer $qa_cp_header_id
 * @property integer $qa_collection_element_header_id
 * @property string $description
 * @property integer $sequence
 * @property string $prompt
 * @property integer $mandatory_cb
 * @property integer $enabled_cb
 * @property integer $readonly_cb
 * @property integer $displayed_cb
 * @property integer $information_cb
 * @property string $dafault_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class QaCpLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%qa_cp_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['qa_cp_header_id', 'qa_collection_element_header_id', 'created_by', 'last_update_by'], 'required'],
            [['qa_cp_header_id', 'qa_collection_element_header_id', 'sequence', 'mandatory_cb', 'enabled_cb', 'readonly_cb', 'displayed_cb', 'information_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['prompt'], 'string', 'max' => 25],
            [['dafault_value'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'qa_cp_line_id' => Yii::t('app', 'Qa Cp Line ID'),
            'qa_cp_header_id' => Yii::t('app', 'Qa Cp Header ID'),
            'qa_collection_element_header_id' => Yii::t('app', 'Qa Collection Element Header ID'),
            'description' => Yii::t('app', 'Description'),
            'sequence' => Yii::t('app', 'Sequence'),
            'prompt' => Yii::t('app', 'Prompt'),
            'mandatory_cb' => Yii::t('app', 'Mandatory Cb'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'readonly_cb' => Yii::t('app', 'Readonly Cb'),
            'displayed_cb' => Yii::t('app', 'Displayed Cb'),
            'information_cb' => Yii::t('app', 'Information Cb'),
            'dafault_value' => Yii::t('app', 'Dafault Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
