<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_expense_tpl_header}}".
 *
 * @property string $hr_expense_tpl_header_id
 * @property integer $bu_org_id
 * @property string $inactive_date
 * @property string $template_name
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrExpenseTplHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_expense_tpl_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'template_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['bu_org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['inactive_date', 'creation_date', 'last_update_date'], 'safe'],
            [['template_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_expense_tpl_header_id' => Yii::t('app', 'Hr Expense Tpl Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'inactive_date' => Yii::t('app', 'Inactive Date'),
            'template_name' => Yii::t('app', 'Template Name'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
