<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_abc_assignment_header}}".
 *
 * @property integer $inv_abc_assignment_header_id
 * @property string $abc_assignment_name
 * @property integer $inv_abc_valuation_id
 * @property integer $org_id
 * @property string $description
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvAbcAssignmentHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_abc_assignment_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['abc_assignment_name', 'inv_abc_valuation_id', 'org_id', 'created_by', 'last_update_by'], 'required'],
            [['inv_abc_valuation_id', 'org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['abc_assignment_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['abc_assignment_name', 'org_id'], 'unique', 'targetAttribute' => ['abc_assignment_name', 'org_id'], 'message' => 'The combination of Abc Assignment Name and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_abc_assignment_header_id' => Yii::t('app', 'Inv Abc Assignment Header ID'),
            'abc_assignment_name' => Yii::t('app', 'Abc Assignment Name'),
            'inv_abc_valuation_id' => Yii::t('app', 'Inv Abc Valuation ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'description' => Yii::t('app', 'Description'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
