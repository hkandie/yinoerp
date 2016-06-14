<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_burden_costcode}}".
 *
 * @property string $prj_burden_costcode_id
 * @property string $costcode
 * @property string $description
 * @property integer $prj_exependiture_type_id
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjBurdenCostcode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_burden_costcode}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['costcode', 'created_by', 'last_update_by'], 'required'],
            [['prj_exependiture_type_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['costcode'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 255],
            [['costcode'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_burden_costcode_id' => Yii::t('app', 'Prj Burden Costcode ID'),
            'costcode' => Yii::t('app', 'Costcode'),
            'description' => Yii::t('app', 'Description'),
            'prj_exependiture_type_id' => Yii::t('app', 'Prj Exependiture Type ID'),
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
