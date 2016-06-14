<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_percent_line}}".
 *
 * @property string $prj_percent_line_id
 * @property integer $prj_percent_header_id
 * @property integer $prj_project_header_id
 * @property string $description
 * @property integer $prj_project_line_id
 * @property string $percent
 * @property string $comment
 * @property string $as_of_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjPercentLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_percent_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_percent_header_id', 'prj_project_header_id', 'prj_project_line_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_percent_header_id', 'prj_project_header_id', 'prj_project_line_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['percent'], 'number'],
            [['as_of_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description', 'comment'], 'string', 'max' => 255],
            [['prj_project_header_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_percent_line_id' => Yii::t('app', 'Prj Percent Line ID'),
            'prj_percent_header_id' => Yii::t('app', 'Prj Percent Header ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'description' => Yii::t('app', 'Description'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'percent' => Yii::t('app', 'Percent'),
            'comment' => Yii::t('app', 'Comment'),
            'as_of_date' => Yii::t('app', 'As Of Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
