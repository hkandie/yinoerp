<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_status_next}}".
 *
 * @property integer $prj_status_next_id
 * @property integer $prj_status_header_id
 * @property string $status_name
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjStatusNext extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_status_next}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_status_header_id', 'status_name', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['prj_status_header_id', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['status_name'], 'string', 'max' => 25],
            [['prj_status_header_id', 'status_name'], 'unique', 'targetAttribute' => ['prj_status_header_id', 'status_name'], 'message' => 'The combination of Prj Status Header ID and Status Name has already been taken.'],
            [['prj_status_header_id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_status_next_id' => Yii::t('app', 'Prj Status Next ID'),
            'prj_status_header_id' => Yii::t('app', 'Prj Status Header ID'),
            'status_name' => Yii::t('app', 'Status Name'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
