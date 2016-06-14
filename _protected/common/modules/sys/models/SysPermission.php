<?php

namespace common\modules\sys\models;

use Yii;

/**
 * This is the model class for table "{{%sys_permission}}".
 *
 * @property string $sys_permission_id
 * @property string $permision
 * @property string $description
 * @property string $class
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class SysPermission extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%sys_permission}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['permision', 'class', 'created_by', 'last_update_by'], 'required'],
            [['created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['permision'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 256],
            [['class'], 'string', 'max' => 100],
            [['permision', 'class'], 'unique', 'targetAttribute' => ['permision', 'class'], 'message' => 'The combination of Permision and Class has already been taken.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sys_permission_id' => Yii::t('app', 'Sys Permission ID'),
            'permision' => Yii::t('app', 'Permision'),
            'description' => Yii::t('app', 'Description'),
            'class' => Yii::t('app', 'Class'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
