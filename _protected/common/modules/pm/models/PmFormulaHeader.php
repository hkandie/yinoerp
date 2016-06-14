<?php

namespace common\modules\pm\models;

use Yii;

/**
 * This is the model class for table "{{%pm_formula_header}}".
 *
 * @property string $pm_formula_header_id
 * @property integer $org_id
 * @property string $formula_name
 * @property string $type
 * @property string $revision
 * @property string $comment
 * @property string $status
 * @property string $description
 * @property integer $owner_employee_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PmFormulaHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pm_formula_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'formula_name', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'owner_employee_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['formula_name'], 'string', 'max' => 50],
            [['type'], 'string', 'max' => 15],
            [['revision', 'status'], 'string', 'max' => 20],
            [['comment'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 256],
            [['org_id', 'formula_name'], 'unique', 'targetAttribute' => ['org_id', 'formula_name'], 'message' => 'The combination of Org ID and Formula Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pm_formula_header_id' => Yii::t('app', 'Pm Formula Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'formula_name' => Yii::t('app', 'Formula Name'),
            'type' => Yii::t('app', 'Type'),
            'revision' => Yii::t('app', 'Revision'),
            'comment' => Yii::t('app', 'Comment'),
            'status' => Yii::t('app', 'Status'),
            'description' => Yii::t('app', 'Description'),
            'owner_employee_id' => Yii::t('app', 'Owner Employee ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
