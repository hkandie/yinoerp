<?php

namespace common\modules\mdm\models;

use Yii;

/**
 * This is the model class for table "{{%mdm_tax_rule}}".
 *
 * @property string $mdm_tax_rule_id
 * @property integer $org_id
 * @property integer $ship_to_region_id
 * @property string $op_tax_class
 * @property integer $weightage
 * @property integer $tax_code_id
 * @property string $ip_tax_class
 * @property integer $ship_from_region_id
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class MdmTaxRule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%mdm_tax_rule}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'weightage', 'tax_code_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'ship_to_region_id', 'weightage', 'tax_code_id', 'ship_from_region_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['op_tax_class', 'ip_tax_class', 'status'], 'string', 'max' => 25],
            [['weightage'], 'unique'],
            [['ship_to_region_id', 'tax_code_id'], 'unique', 'targetAttribute' => ['ship_to_region_id', 'tax_code_id'], 'message' => 'The combination of Ship To Region ID and Tax Code ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'mdm_tax_rule_id' => Yii::t('app', 'Mdm Tax Rule ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'ship_to_region_id' => Yii::t('app', 'Ship To Region ID'),
            'op_tax_class' => Yii::t('app', 'Op Tax Class'),
            'weightage' => Yii::t('app', 'Weightage'),
            'tax_code_id' => Yii::t('app', 'Tax Code ID'),
            'ip_tax_class' => Yii::t('app', 'Ip Tax Class'),
            'ship_from_region_id' => Yii::t('app', 'Ship From Region ID'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
