<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_count_abc_ref}}".
 *
 * @property integer $inv_count_abc_ref_id
 * @property integer $inv_count_header_id
 * @property string $class_code
 * @property integer $count_per_year
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvCountAbcRef extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_count_abc_ref}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['inv_count_header_id', 'class_code', 'count_per_year', 'created_by', 'last_update_by'], 'required'],
            [['inv_count_header_id', 'count_per_year', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['class_code'], 'string', 'max' => 2],
            [['inv_count_header_id', 'class_code'], 'unique', 'targetAttribute' => ['inv_count_header_id', 'class_code'], 'message' => 'The combination of Inv Count Header ID and Class Code has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_count_abc_ref_id' => Yii::t('app', 'Inv Count Abc Ref ID'),
            'inv_count_header_id' => Yii::t('app', 'Inv Count Header ID'),
            'class_code' => Yii::t('app', 'Class Code'),
            'count_per_year' => Yii::t('app', 'Count Per Year'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
