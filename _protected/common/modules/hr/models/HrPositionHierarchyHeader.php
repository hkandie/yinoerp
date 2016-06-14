<?php

namespace common\modules\hr\models;

use Yii;

/**
 * This is the model class for table "{{%hr_position_hierarchy_header}}".
 *
 * @property integer $hr_position_hierarchy_header_id
 * @property integer $starting_position_id
 * @property string $hierarchy_name
 * @property string $description
 * @property string $revision
 * @property string $effective_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class HrPositionHierarchyHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%hr_position_hierarchy_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['starting_position_id', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['starting_position_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_date', 'creation_date', 'last_update_date'], 'safe'],
            [['hierarchy_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['revision'], 'string', 'max' => 12],
            [['starting_position_id'], 'unique'],
            [['starting_position_id', 'hierarchy_name'], 'unique', 'targetAttribute' => ['starting_position_id', 'hierarchy_name'], 'message' => 'The combination of Starting Position ID and Hierarchy Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hr_position_hierarchy_header_id' => Yii::t('app', 'Hr Position Hierarchy Header ID'),
            'starting_position_id' => Yii::t('app', 'Starting Position ID'),
            'hierarchy_name' => Yii::t('app', 'Hierarchy Name'),
            'description' => Yii::t('app', 'Description'),
            'revision' => Yii::t('app', 'Revision'),
            'effective_date' => Yii::t('app', 'Effective Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
