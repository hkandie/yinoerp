<?php

namespace common\modules\cc\models;

use Yii;

/**
 * This is the model class for table "{{%cc_co_line_value}}".
 *
 * @property integer $cc_co_line_value_id
 * @property integer $cc_co_line_id
 * @property integer $cc_co_template_line_id
 * @property string $field_value
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class CcCoLineValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%cc_co_line_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cc_co_line_id', 'created_by', 'last_update_by'], 'required'],
            [['cc_co_line_id', 'cc_co_template_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['field_value'], 'string', 'max' => 256],
            [['cc_co_line_id', 'cc_co_template_line_id'], 'unique', 'targetAttribute' => ['cc_co_line_id', 'cc_co_template_line_id'], 'message' => 'The combination of Cc Co Line ID and Cc Co Template Line ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cc_co_line_value_id' => Yii::t('app', 'Cc Co Line Value ID'),
            'cc_co_line_id' => Yii::t('app', 'Cc Co Line ID'),
            'cc_co_template_line_id' => Yii::t('app', 'Cc Co Template Line ID'),
            'field_value' => Yii::t('app', 'Field Value'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
