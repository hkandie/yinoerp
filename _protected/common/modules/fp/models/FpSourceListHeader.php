<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_source_list_header}}".
 *
 * @property integer $fp_source_list_header_id
 * @property integer $org_id
 * @property string $source_list
 * @property string $description
 * @property string $status
 * @property string $source_list_type
 * @property integer $ar_customer_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 */
class FpSourceListHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_source_list_header}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['org_id', 'description', 'created_by', 'last_update_by'], 'required'],
            [['org_id', 'ar_customer_id', 'created_by', 'last_update_by'], 'integer'],
            [['status'], 'string'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['source_list'], 'string', 'max' => 25],
            [['description'], 'string', 'max' => 256],
            [['source_list_type'], 'string', 'max' => 50],
            [['org_id', 'source_list'], 'unique', 'targetAttribute' => ['org_id', 'source_list'], 'message' => 'The combination of Org ID and Source List has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_source_list_header_id' => Yii::t('app', 'Fp Source List Header ID'),
            'org_id' => Yii::t('app', 'Org ID'),
            'source_list' => Yii::t('app', 'Source List'),
            'description' => Yii::t('app', 'Description'),
            'status' => Yii::t('app', 'Status'),
            'source_list_type' => Yii::t('app', 'Source List Type'),
            'ar_customer_id' => Yii::t('app', 'Ar Customer ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
        ];
    }
}
