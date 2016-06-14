<?php

namespace common\modules\bom\models;

use Yii;

/**
 * This is the model class for table "{{%bom_overhead}}".
 *
 * @property string $bom_overhead_id
 * @property string $overhead
 * @property string $description
 * @property integer $org_id
 * @property string $status
 * @property string $overhead_type
 * @property string $default_basis
 * @property integer $absorption_ac_id
 * @property integer $resource_assignment_id
 * @property integer $rate_assignment_id
 * @property integer $ef_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class BomOverhead extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%bom_overhead}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['overhead', 'description', 'org_id', 'overhead_type', 'absorption_ac_id', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'absorption_ac_id', 'resource_assignment_id', 'rate_assignment_id', 'ef_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['overhead', 'overhead_type', 'default_basis'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['overhead', 'org_id'], 'unique', 'targetAttribute' => ['overhead', 'org_id'], 'message' => 'The combination of Overhead and Org ID has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bom_overhead_id' => Yii::t('app', 'Bom Overhead ID'),
            'overhead' => Yii::t('app', 'Overhead'),
            'description' => Yii::t('app', 'Description'),
            'org_id' => Yii::t('app', 'Org ID'),
            'status' => Yii::t('app', 'Status'),
            'overhead_type' => Yii::t('app', 'Overhead Type'),
            'default_basis' => Yii::t('app', 'Default Basis'),
            'absorption_ac_id' => Yii::t('app', 'Absorption Ac ID'),
            'resource_assignment_id' => Yii::t('app', 'Resource Assignment ID'),
            'rate_assignment_id' => Yii::t('app', 'Rate Assignment ID'),
            'ef_id' => Yii::t('app', 'Ef ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
