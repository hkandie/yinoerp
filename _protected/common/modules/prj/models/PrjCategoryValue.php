<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_category_value}}".
 *
 * @property string $prj_category_value_id
 * @property integer $prj_project_header_id
 * @property integer $prj_category_line_id
 * @property string $reference_table
 * @property integer $reference_id
 * @property integer $company_id
 */
class PrjCategoryValue extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_category_value}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_header_id', 'prj_category_line_id'], 'required'],
            [['prj_project_header_id', 'prj_category_line_id', 'reference_id', 'company_id'], 'integer'],
            [['reference_table'], 'string', 'max' => 100],
            [['prj_project_header_id', 'reference_table', 'reference_id'], 'unique', 'targetAttribute' => ['prj_project_header_id', 'reference_table', 'reference_id'], 'message' => 'The combination of Prj Project Header ID, Reference Table and Reference ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_category_value_id' => Yii::t('app', 'Prj Category Value ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_category_line_id' => Yii::t('app', 'Prj Category Line ID'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
