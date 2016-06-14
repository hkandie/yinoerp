<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_structure_header}}".
 *
 * @property string $prj_burden_structure_header_id
 * @property string $structure
 * @property string $structure_type
 * @property string $description
 * @property integer $allow_override_cb
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenStructureHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_structure_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['structure', 'created_by', 'last_update_by'], 'required'],
            [['allow_override_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['structure', 'structure_type'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['structure'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_structure_header_id' => Yii::t('app', 'Prj Burden Structure Header ID'),
            'structure' => Yii::t('app', 'Structure'),
            'structure_type' => Yii::t('app', 'Structure Type'),
            'description' => Yii::t('app', 'Description'),
            'allow_override_cb' => Yii::t('app', 'Allow Override Cb'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
