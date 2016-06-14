<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_program_status}}".
 *
 * @property integer $sys_program_status_id
 * @property string $status
 * @property integer $company_id
 */
class SysProgramStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_program_status}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id'], 'integer'],
            [['status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_program_status_id' => Yii::t('app', 'Sys Program Status ID'),
            'status' => Yii::t('app', 'Status'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
