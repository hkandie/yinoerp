<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_item_revision}}".
 *
 * @property integer $inv_item_revision_id
 * @property string $revision_name
 * @property integer $item_id_m
 * @property string $description
 * @property integer $org_id
 * @property string $reason
 * @property string $eco_number
 * @property string $effective_start_date
 * @property string $effective_end_date
 * @property string $implementation_date
 * @property string $origination_date
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvItemRevision extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_item_revision}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['revision_name', 'item_id_m', 'org_id', 'implementation_date', 'origination_date', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['item_id_m', 'org_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['effective_start_date', 'effective_end_date', 'implementation_date', 'origination_date', 'creation_date', 'last_update_date'], 'safe'],
            [['revision_name'], 'string', 'max' => 10],
            [['description', 'reason'], 'string', 'max' => 256],
            [['eco_number'], 'string', 'max' => 50],
            [['revision_name', 'item_id_m', 'org_id'], 'unique', 'targetAttribute' => ['revision_name', 'item_id_m', 'org_id'], 'message' => 'The combination of Revision Name, Item Id M and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_item_revision_id' => Yii::t('app', 'Inv Item Revision ID'),
            'revision_name' => Yii::t('app', 'Revision Name'),
            'item_id_m' => Yii::t('app', 'Item Id M'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'reason' => Yii::t('app', 'Reason'),
            'eco_number' => Yii::t('app', 'Eco Number'),
            'effective_start_date' => Yii::t('app', 'Effective Start Date'),
            'effective_end_date' => Yii::t('app', 'Effective End Date'),
            'implementation_date' => Yii::t('app', 'Implementation Date'),
            'origination_date' => Yii::t('app', 'Origination Date'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
