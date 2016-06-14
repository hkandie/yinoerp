<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_element_history_header}}".
 *
 * @property string $hr_element_history_header_id
 * @property integer $hr_element_entry_header_id
 * @property string $archive_date
 * @property integer $hr_employee_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrElementHistoryHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_element_history_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_element_entry_header_id', 'archive_date', 'created_by', 'last_update_by'], 'required'],
            [['hr_element_entry_header_id', 'hr_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['archive_date', 'creation_date', 'last_update_date'], 'safe'],
            [['hr_element_entry_header_id', 'archive_date'], 'unique', 'targetAttribute' => ['hr_element_entry_header_id', 'archive_date'], 'message' => 'The combination of Hr Element Entry Header ID and Archive Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_element_history_header_id' => Yii::t('app', 'Hr Element History Header ID'),
            'hr_element_entry_header_id' => Yii::t('app', 'Hr Element Entry Header ID'),
            'archive_date' => Yii::t('app', 'Archive Date'),
            'hr_employee_id' => Yii::t('app', 'Hr Employee ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
