<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_list_line}}".
 *
 * @property integer $prj_burden_list_line_id
 * @property integer $prj_burden_list_header_id
 * @property integer $prj_burden_costcode_id
 * @property integer $bu_org_id
 * @property string $multiplier
 * @property integer $burden_value
 * @property string $formula
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenListLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_list_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_burden_list_header_id', 'prj_burden_costcode_id', 'effective_start_date', 'created_by', 'last_update_by'], 'required'],
            [['prj_burden_list_header_id', 'prj_burden_costcode_id', 'bu_org_id', 'burden_value', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['multiplier'], 'number'],
            [['formula'], 'string'],
            [['effective_start_date', 'effective_end_date', 'creation_date', 'last_update_date'], 'safe'],
            [['prj_burden_list_header_id', 'bu_org_id', 'multiplier', 'effective_start_date'], 'unique', 'targetAttribute' => ['prj_burden_list_header_id', 'bu_org_id', 'multiplier', 'effective_start_date'], 'message' => 'The combination of Prj Burden List Header ID, Bu Org ID, Multiplier and Effective Start Date has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_list_line_id' => Yii::t('app', 'Prj Burden List Line ID'),
            'prj_burden_list_header_id' => Yii::t('app', 'Prj Burden List Header ID'),
            'prj_burden_costcode_id' => Yii::t('app', 'Prj Burden Costcode ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'multiplier' => Yii::t('app', 'Multiplier'),
            'burden_value' => Yii::t('app', 'Burden Value'),
            'formula' => Yii::t('app', 'Formula'),
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
