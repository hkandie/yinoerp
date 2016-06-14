<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_report_path}}".
 *
 * @property integer $extn_report_path_id
 * @property integer $extn_report_id
 * @property string $column_name
 * @property string $path
 * @property string $description
 * @property integer $company_id
 */
class ExtnReportPath extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_report_path}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['extn_report_id', 'column_name', 'path'], 'required'],
            [['extn_report_id', 'company_id'], 'integer'],
            [['column_name'], 'string', 'max' => 100],
            [['path', 'description'], 'string', 'max' => 255],
            [['extn_report_id', 'column_name'], 'unique', 'targetAttribute' => ['extn_report_id', 'column_name'], 'message' => 'The combination of Extn Report ID and Column Name has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_report_path_id' => Yii::t('app', 'Extn Report Path ID'),
            'extn_report_id' => Yii::t('app', 'Extn Report ID'),
            'column_name' => Yii::t('app', 'Column Name'),
            'path' => Yii::t('app', 'Path'),
            'description' => Yii::t('app', 'Description'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
