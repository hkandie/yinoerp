<?php

namespace common\modules\bc\models;

use Yii;

/**
 * This is the model class for table "{{%bc_label_format_header}}".
 *
 * @property integer $bc_label_format_header_id
 * @property string $label_type
 * @property string $format_name
 * @property string $disable_date
 * @property integer $default_cb
 * @property string $generator_class_name
 * @property string $generator_function_name
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BcLabelFormatHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bc_label_format_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['label_type', 'format_name', 'created_by', 'last_update_by'], 'required'],
            [['disable_date', 'creation_date', 'last_update_date'], 'safe'],
            [['default_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['label_type'], 'string', 'max' => 25],
            [['format_name', 'description'], 'string', 'max' => 256],
            [['generator_class_name', 'generator_function_name'], 'string', 'max' => 100],
            [['label_type', 'format_name'], 'unique', 'targetAttribute' => ['label_type', 'format_name'], 'message' => 'The combination of Label Type and Format Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bc_label_format_header_id' => Yii::t('app', 'Bc Label Format Header ID'),
            'label_type' => Yii::t('app', 'Label Type'),
            'format_name' => Yii::t('app', 'Format Name'),
            'disable_date' => Yii::t('app', 'Disable Date'),
            'default_cb' => Yii::t('app', 'Default Cb'),
            'generator_class_name' => Yii::t('app', 'Generator Class Name'),
            'generator_function_name' => Yii::t('app', 'Generator Function Name'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
