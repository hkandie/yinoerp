<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_mrp_lowlevel_code}}".
 *
 * @property integer $fp_mrp_lowlevel_code_id
 * @property integer $org_id
 * @property integer $item_id_m
 * @property integer $level
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpMrpLowlevelCode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_mrp_lowlevel_code}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'item_id_m', 'level', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'item_id_m', 'level', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['item_id_m'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_mrp_lowlevel_code_id' => Yii::t('app', 'Fp Mrp Lowlevel Code ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'level' => Yii::t('app', 'Level'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
