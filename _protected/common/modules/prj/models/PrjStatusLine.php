<?php

namespace common\modules\prj\models;

use Yii;

/**
 * This is the model class for table "{{%prj_status_line}}".
 *
 * @property integer $prj_status_line_id
 * @property integer $prj_status_header_id
 * @property string $action_code
 * @property integer $allow_cb
 * @property integer $default_cb
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class PrjStatusLine extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%prj_status_line}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prj_status_header_id', 'action_code', 'created_by', 'creation_date', 'last_update_by', 'last_update_date'], 'required'],
            [['prj_status_header_id', 'allow_cb', 'default_cb', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['action_code'], 'string', 'max' => 25],
            [['prj_status_header_id', 'action_code'], 'unique', 'targetAttribute' => ['prj_status_header_id', 'action_code'], 'message' => 'The combination of Prj Status Header ID and Action Code has already been taken.'],
            [['prj_status_header_id', 'default_cb'], 'unique', 'targetAttribute' => ['prj_status_header_id', 'default_cb'], 'message' => 'The combination of Prj Status Header ID and Default Cb has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prj_status_line_id' => Yii::t('app', 'Prj Status Line ID'),
            'prj_status_header_id' => Yii::t('app', 'Prj Status Header ID'),
            'action_code' => Yii::t('app', 'Action Code'),
            'allow_cb' => Yii::t('app', 'Allow Cb'),
            'default_cb' => Yii::t('app', 'Default Cb'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
