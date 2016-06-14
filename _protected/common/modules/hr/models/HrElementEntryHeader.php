<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_element_entry_header}}".
 *
 * @property string $hr_element_entry_header_id
 * @property integer $hr_employee_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrElementEntryHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_element_entry_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['hr_employee_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_element_entry_header_id' => Yii::t('app', 'Hr Element Entry Header ID'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
