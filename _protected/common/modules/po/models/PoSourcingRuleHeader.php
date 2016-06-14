<?php

namespace common\modules\po\models;

use Yii;

/**
 * This is the model class for table "{{%po_sourcing_rule_header}}".
 *
 * @property integer $po_sourcing_rule_header_id
 * @property string $sourcing_rule
 * @property string $description
 * @property string $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PoSourcingRuleHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%po_sourcing_rule_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sourcing_rule', 'description', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['sourcing_rule', 'status'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'po_sourcing_rule_header_id' => Yii::t('app', 'Po Sourcing Rule Header ID'),
            'sourcing_rule' => Yii::t('app', 'Sourcing Rule'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
