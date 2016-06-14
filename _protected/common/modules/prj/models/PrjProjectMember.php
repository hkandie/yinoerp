<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_member}}".
 *
 * @property integer $prj_project_member_id
 * @property integer $prj_project_header_id
 * @property integer $user_id
 * @property integer $prj_role_id
 * @property string $description
 * @property string $start_date
 * @property string $end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectMember extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_member}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_header_id', 'user_id', 'prj_role_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['prj_project_header_id', 'user_id', 'prj_role_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['start_date', 'end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_member_id' => Yii::t('app', 'Prj Project Member ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'prj_role_id' => Yii::t('app', 'Prj Role ID'),
            'description' => Yii::t('app', 'Description'),
            'start_date' => Yii::t('app', 'Start Date'),
            'end_date' => Yii::t('app', 'End Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
