<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_position_hierarchy_line}}".
 *
 * @property integer $hr_position_hierarchy_line_id
 * @property string $hr_position_hierarchy_header_id
 * @property string $position_id
 * @property string $description
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPositionHierarchyLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_position_hierarchy_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hr_position_hierarchy_header_id', 'position_id', 'description', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['hr_position_hierarchy_header_id', 'position_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['description'], 'string', 'max' => 256],
            [['hr_position_hierarchy_header_id', 'position_id'], 'unique', 'targetAttribute' => ['hr_position_hierarchy_header_id', 'position_id'], 'message' => 'The combination of Hr Position Hierarchy Header ID and Position ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_position_hierarchy_line_id' => Yii::t('app', 'Hr Position Hierarchy Line ID'),
            'hr_position_hierarchy_header_id' => Yii::t('app', 'Hr Position Hierarchy Header ID'),
            'position_id' => Yii::t('app', 'Position ID'),
            'description' => Yii::t('app', 'Description'),
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
