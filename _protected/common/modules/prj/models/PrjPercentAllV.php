<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_percent_all_v}}".
 *
 * @property string $prj_percent_header_id
 * @property string $percent
 * @property string $description
 * @property string $as_of_date
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $project_number
 * @property string $project_description
 * @property integer $prj_project_header_id
 */
class PrjPercentAllV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_percent_all_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_percent_header_id', 'created_by', 'last_update_by', 'prj_project_header_id'], 'integer'],
            [['percent'], 'number'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 255],
            [['as_of_date', 'status'], 'string', 'max' => 25],
            [['project_number'], 'string', 'max' => 50],
            [['project_description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_percent_header_id' => Yii::t('app', 'Prj Percent Header ID'),
            'percent' => Yii::t('app', 'Percent'),
            'description' => Yii::t('app', 'Description'),
            'as_of_date' => Yii::t('app', 'As Of Date'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'project_number' => Yii::t('app', 'Project Number'),
            'project_description' => Yii::t('app', 'Project Description'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
        ];
    }
}
