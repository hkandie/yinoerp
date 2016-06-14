<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_value_group_line}}".
 *
 * @property string $sys_value_group_line_id
 * @property string $sys_value_group_header_id
 * @property string $code
 * @property string $code_value
 * @property string $description
 * @property string $account_qualifier
 * @property integer $allow_budgeting_cb
 * @property integer $allow_posting_cb
 * @property string $status
 * @property integer $parent_cb
 * @property integer $parent_line_id
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysValueGroupLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_value_group_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sys_value_group_header_id', 'code', 'code_value', 'description', 'created_by', 'last_update_by'], 'required'],
            [['sys_value_group_header_id', 'allow_budgeting_cb', 'allow_posting_cb', 'parent_cb', 'parent_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['code', 'code_value', 'account_qualifier', 'effective_start_date', 'effective_end_date'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['sys_value_group_header_id', 'code'], 'unique', 'targetAttribute' => ['sys_value_group_header_id', 'code'], 'message' => 'The combination of Sys Value Group Header ID and Code has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_value_group_line_id' => Yii::t('app', 'Sys Value Group Line ID'),
            'sys_value_group_header_id' => Yii::t('app', 'Sys Value Group Header ID'),
            'code' => Yii::t('app', 'Code'),
            'code_value' => Yii::t('app', 'Code Value'),
            'description' => Yii::t('app', 'Description'),
            'account_qualifier' => Yii::t('app', 'Account Qualifier'),
            'allow_budgeting_cb' => Yii::t('app', 'Allow Budgeting Cb'),
            'allow_posting_cb' => Yii::t('app', 'Allow Posting Cb'),
            'status' => Yii::t('app', 'Status'),
            'parent_cb' => Yii::t('app', 'Parent Cb'),
            'parent_line_id' => Yii::t('app', 'Parent Line ID'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
