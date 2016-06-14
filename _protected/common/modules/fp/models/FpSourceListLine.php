<?php

namespace common\modules\fp\models;

use Yii;

/**
 * This is the model class for table "{{%fp_source_list_line}}".
 *
 * @property integer $fp_source_list_line_id
 * @property integer $fp_source_list_header_id
 * @property string $source_list_line_type
 * @property integer $source_list_id
 * @property string $description
 * @property string $total_original
 * @property integer $fp_consumption_id
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class FpSourceListLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%fp_source_list_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fp_source_list_header_id', 'source_list_id', 'fp_consumption_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['total_original'], 'number'],
            [['created_by', 'last_update_by'], 'required'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['source_list_line_type'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'fp_source_list_line_id' => Yii::t('app', 'Fp Source List Line ID'),
            'fp_source_list_header_id' => Yii::t('app', 'Fp Source List Header ID'),
            'source_list_line_type' => Yii::t('app', 'Source List Line Type'),
            'source_list_id' => Yii::t('app', 'Source List ID'),
            'description' => Yii::t('app', 'Description'),
            'total_original' => Yii::t('app', 'Total Original'),
            'fp_consumption_id' => Yii::t('app', 'Fp Consumption ID'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
