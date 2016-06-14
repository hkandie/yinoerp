<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_milestone}}".
 *
 * @property string $prj_milestone_id
 * @property integer $prj_project_header_id
 * @property integer $prj_project_line_id
 * @property string $status
 * @property string $comment
 * @property integer $signoff_cb
 * @property string $revenue_amount
 * @property string $invoice_amount
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjMilestone extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_milestone}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_header_id', 'prj_project_line_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_project_header_id', 'prj_project_line_id', 'signoff_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['revenue_amount'], 'number'],
            [['invoice_amount', 'creation_date', 'last_update_date'], 'safe'],
            [['status'], 'string', 'max' => 25],
            [['comment'], 'string', 'max' => 255],
            [['prj_project_line_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_milestone_id' => Yii::t('app', 'Prj Milestone ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'status' => Yii::t('app', 'Status'),
            'comment' => Yii::t('app', 'Comment'),
            'signoff_cb' => Yii::t('app', 'Signoff Cb'),
            'revenue_amount' => Yii::t('app', 'Revenue Amount'),
            'invoice_amount' => Yii::t('app', 'Invoice Amount'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
