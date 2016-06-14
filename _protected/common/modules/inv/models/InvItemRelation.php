<?php

namespace common\modules\inv\models;

use Yii;

/**
 * This is the model class for table "{{%inv_item_relation}}".
 *
 * @property string $inv_item_relation_id
 * @property string $relation_type
 * @property integer $from_item_id_m
 * @property integer $to_item_id_m
 * @property integer $org_id
 * @property string $from_date
 * @property string $to_date
 * @property string $description
 * @property integer $planning_cb
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class InvItemRelation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%inv_item_relation}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['relation_type', 'from_item_id_m', 'to_item_id_m', 'created_by', 'last_update_by'], 'required'],
            [['from_item_id_m', 'to_item_id_m', 'org_id', 'planning_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['from_date', 'to_date', 'creation_date', 'last_update_date'], 'safe'],
            [['relation_type', 'status'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['to_item_id_m', 'description'], 'unique', 'targetAttribute' => ['to_item_id_m', 'description'], 'message' => 'The combination of To Item Id M and Description has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inv_item_relation_id' => Yii::t('app', 'Inv Item Relation ID'),
            'relation_type' => Yii::t('app', 'Relation Type'),
            'from_item_id_m' => Yii::t('app', 'From Item Id M'),
            'to_item_id_m' => Yii::t('app', 'To Item Id M'),
            'org_id' => Yii::t('app', 'Org ID'),
            'from_date' => Yii::t('app', 'From Date'),
            'to_date' => Yii::t('app', 'To Date'),
            'description' => Yii::t('app', 'Description'),
            'planning_cb' => Yii::t('app', 'Planning Cb'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
