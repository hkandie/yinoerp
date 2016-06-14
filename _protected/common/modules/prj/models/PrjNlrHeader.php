<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_nlr_header}}".
 *
 * @property string $prj_nlr_header_id
 * @property string $resource_name
 * @property integer $prj_expenditure_type_id
 * @property string $description
 * @property integer $equipment_cb
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjNlrHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_nlr_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['resource_name', 'prj_expenditure_type_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_expenditure_type_id', 'equipment_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['resource_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['resource_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_nlr_header_id' => Yii::t('app', 'Prj Nlr Header ID'),
            'resource_name' => Yii::t('app', 'Resource Name'),
            'prj_expenditure_type_id' => Yii::t('app', 'Prj Expenditure Type ID'),
            'description' => Yii::t('app', 'Description'),
            'equipment_cb' => Yii::t('app', 'Equipment Cb'),
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
