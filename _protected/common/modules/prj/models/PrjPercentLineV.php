<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_percent_line_v}}".
 *
 * @property string $prj_percent_line_id
 * @property integer $prj_percent_header_id
 * @property string $percent
 * @property string $comment
 * @property string $as_of_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $prj_project_line_id
 * @property integer $prj_project_header_id
 * @property string $task_number
 * @property string $task_name
 * @property integer $task_level_weight
 * @property string $parent_prj_task_num
 * @property string $description
 */
class PrjPercentLineV extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_percent_line_v}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_percent_line_id', 'prj_percent_header_id', 'created_by', 'last_update_by', 'prj_project_line_id', 'prj_project_header_id', 'task_level_weight'], 'integer'],
            [['percent'], 'number'],
            [['as_of_date', 'creation_date', 'last_update_date'], 'safe'],
            [['comment'], 'string', 'max' => 255],
            [['task_number', 'parent_prj_task_num'], 'string', 'max' => 25],
            [['task_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
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
            'percent' => Yii::t('app', 'Percent'),
            'comment' => Yii::t('app', 'Comment'),
            'as_of_date' => Yii::t('app', 'As Of Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'prj_project_line_id' => Yii::t('app', 'Prj Project Line ID'),
            'prj_project_header_id' => Yii::t('app', 'Prj Project Header ID'),
            'task_number' => Yii::t('app', 'Task Number'),
            'task_name' => Yii::t('app', 'Task Name'),
            'task_level_weight' => Yii::t('app', 'Task Level Weight'),
            'parent_prj_task_num' => Yii::t('app', 'Parent Prj Task Num'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
