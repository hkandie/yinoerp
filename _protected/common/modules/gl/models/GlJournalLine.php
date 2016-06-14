<?php

namespace common\modules\gl\models;

use Yii;

/**
 * This is the model class for table "{{%gl_journal_line}}".
 *
 * @property integer $gl_journal_line_id
 * @property integer $gl_journal_header_id
 * @property integer $line_num
 * @property string $status
 * @property string $line_type
 * @property string $description
 * @property integer $code_combination_id
 * @property string $total_dr
 * @property string $total_cr
 * @property string $total_ac_dr
 * @property string $total_ac_cr
 * @property string $reference_type
 * @property string $reference_key_name
 * @property string $reference_key_value
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class GlJournalLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%gl_journal_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['gl_journal_header_id', 'line_num', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['gl_journal_header_id', 'line_num', 'code_combination_id', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'string'],
            [['total_dr', 'total_cr', 'total_ac_dr', 'total_ac_cr'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['line_type', 'reference_type', 'reference_key_value'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['reference_key_name'], 'string', 'max' => 50],
            [['gl_journal_header_id', 'line_num'], 'unique', 'targetAttribute' => ['gl_journal_header_id', 'line_num'], 'message' => 'The combination of Gl Journal Header ID and Line Num has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'gl_journal_line_id' => Yii::t('app', 'Gl Journal Line ID'),
            'gl_journal_header_id' => Yii::t('app', 'Gl Journal Header ID'),
            'line_num' => Yii::t('app', 'Line Num'),
            'status' => Yii::t('app', 'Status'),
            'line_type' => Yii::t('app', 'Line Type'),
            'description' => Yii::t('app', 'Description'),
            'code_combination_id' => Yii::t('app', 'Code Combination ID'),
            'total_dr' => Yii::t('app', 'Total Dr'),
            'total_cr' => Yii::t('app', 'Total Cr'),
            'total_ac_dr' => Yii::t('app', 'Total Ac Dr'),
            'total_ac_cr' => Yii::t('app', 'Total Ac Cr'),
            'reference_type' => Yii::t('app', 'Reference Type'),
            'reference_key_name' => Yii::t('app', 'Reference Key Name'),
            'reference_key_value' => Yii::t('app', 'Reference Key Value'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
