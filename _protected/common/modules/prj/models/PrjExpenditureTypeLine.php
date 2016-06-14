<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_expenditure_type_line}}".
 *
 * @property string $prj_expenditure_type_line_id
 * @property integer $prj_expenditure_type_header_id
 * @property integer $bu_org_id
 * @property string $effective_from
 * @property string $description
 * @property string $effective_to
 * @property integer $uom_id
 * @property string $currency
 * @property string $rate
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjExpenditureTypeLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_expenditure_type_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_expenditure_type_header_id', 'created_by', 'last_update_by'], 'required'],
            [['prj_expenditure_type_header_id', 'bu_org_id', 'uom_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['rate'], 'number'],
            [['description'], 'string', 'max' => 255],
            [['currency'], 'string', 'max' => 25],
            [['prj_expenditure_type_header_id', 'bu_org_id'], 'unique', 'targetAttribute' => ['prj_expenditure_type_header_id', 'bu_org_id'], 'message' => 'The combination of Prj Expenditure Type Header ID and Bu Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_expenditure_type_line_id' => Yii::t('app', 'Prj Expenditure Type Line ID'),
            'prj_expenditure_type_header_id' => Yii::t('app', 'Prj Expenditure Type Header ID'),
            'bu_org_id' => Yii::t('app', 'Bu Org ID'),
            'effective_from' => Yii::t('app', 'Effective From'),
            'description' => Yii::t('app', 'Description'),
            'effective_to' => Yii::t('app', 'Effective To'),
            'uom_id' => Yii::t('app', 'Uom ID'),
            'currency' => Yii::t('app', 'Currency'),
            'rate' => Yii::t('app', 'Rate'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
