<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_project_type_line}}".
 *
 * @property string $prj_project_type_line_id
 * @property integer $prj_project_type_header_id
 * @property integer $prj_category_header_id
 * @property integer $required_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjProjectTypeLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_project_type_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_project_type_header_id', 'prj_category_header_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_project_type_header_id', 'prj_category_header_id', 'required_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_project_type_line_id' => Yii::t('app', 'Prj Project Type Line ID'),
            'prj_project_type_header_id' => Yii::t('app', 'Prj Project Type Header ID'),
            'prj_category_header_id' => Yii::t('app', 'Prj Category Header ID'),
            'required_cb' => Yii::t('app', 'Required Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
