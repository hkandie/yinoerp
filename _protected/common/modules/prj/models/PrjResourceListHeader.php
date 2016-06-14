<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_resource_list_header}}".
 *
 * @property string $prj_resource_list_header_id
 * @property string $list_name
 * @property string $description
 * @property string $effective_from
 * @property string $effective_to
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjResourceListHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_resource_list_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['list_name', 'created_by', 'last_update_by'], 'required'],
            [['effective_from', 'effective_to', 'creation_date', 'last_update_date'], 'safe'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['list_name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 255],
            [['list_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_resource_list_header_id' => Yii::t('app', 'Prj Resource List Header ID'),
            'list_name' => Yii::t('app', 'List Name'),
            'description' => Yii::t('app', 'Description'),
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
