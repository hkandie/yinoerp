<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_category_header}}".
 *
 * @property string $prj_category_header_id
 * @property string $category
 * @property string $description
 * @property integer $mandatory_cb
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $one_code_only_cb
 * @property integer $allow_percent_cb
 * @property integer $total_hundred_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjCategoryHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_category_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'created_by', 'last_update_by'], 'required'],
            [['mandatory_cb', 'one_code_only_cb', 'allow_percent_cb', 'total_hundred_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['category'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['category'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_category_header_id' => Yii::t('app', 'Prj Category Header ID'),
            'category' => Yii::t('app', 'Category'),
            'description' => Yii::t('app', 'Description'),
            'mandatory_cb' => Yii::t('app', 'Mandatory Cb'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'one_code_only_cb' => Yii::t('app', 'One Code Only Cb'),
            'allow_percent_cb' => Yii::t('app', 'Allow Percent Cb'),
            'total_hundred_cb' => Yii::t('app', 'Total Hundred Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
