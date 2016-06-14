<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_grade}}".
 *
 * @property integer $hr_grade_id
 * @property string $grade
 * @property integer $hr_element_entry_tpl_header_id
 * @property string $description
 * @property integer $rank
 * @property string $inactive_date
 * @property string $alt_name
 * @property string $alt_description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrGrade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_grade}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['grade', 'created_by', 'last_update_by'], 'required'],
            [['hr_element_entry_tpl_header_id', 'rank', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['inactive_date', 'creation_date', 'last_update_date'], 'safe'],
            [['grade', 'alt_name'], 'string', 'max' => 50],
            [['description', 'alt_description'], 'string', 'max' => 255],
            [['grade'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_grade_id' => Yii::t('app', 'Hr Grade ID'),
            'grade' => Yii::t('app', 'Grade'),
            'hr_element_entry_tpl_header_id' => Yii::t('app', 'Hr Element Entry Tpl Header ID'),
            'description' => Yii::t('app', 'Description'),
            'rank' => Yii::t('app', 'Rank'),
            'inactive_date' => Yii::t('app', 'Inactive Date'),
            'alt_name' => Yii::t('app', 'Alt Name'),
            'alt_description' => Yii::t('app', 'Alt Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
