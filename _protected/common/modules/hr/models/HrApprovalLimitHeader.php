<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_approval_limit_header}}".
 *
 * @property string $hr_approval_limit_header_id
 * @property integer $bu_org_id
 * @property string $limit_name
 * @property string $description
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrApprovalLimitHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_approval_limit_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bu_org_id', 'limit_name', 'created_by', 'last_update_by'], 'required'],
            [['bu_org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['limit_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 25],
            [['limit_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_approval_limit_header_id' => Yii::t('app', 'Hr Approval Limit Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'limit_name' => Yii::t('app', 'Limit Name'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
