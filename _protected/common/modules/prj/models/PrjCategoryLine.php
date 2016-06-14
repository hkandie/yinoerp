<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_category_line}}".
 *
 * @property string $prj_category_line_id
 * @property integer $prj_category_header_id
 * @property string $category_code
 * @property string $effective_from
 * @property string $description
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjCategoryLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_category_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_category_header_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_category_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['category_code'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 255],
            [['prj_category_header_id', 'category_code'], 'unique', 'targetAttribute' => ['prj_category_header_id', 'category_code'], 'message' => 'The combination of Prj Category Header ID and Category Code has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_category_line_id' => Yii::t('app', 'Prj Category Line ID'),
            'prj_category_header_id' => Yii::t('app', 'Prj Category Header ID'),
            'category_code' => Yii::t('app', 'Category Code'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'description' => Yii::t('app', 'Description'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
