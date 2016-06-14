<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace app\modules\crud\models\base;

use Yii;

/**
 * This is the base-model class for table "_session".
 *
 * @property string $id
 * @property integer $expire
 * @property resource $data
 * @property string $aliasModel
 */
abstract class Session extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '_session';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'expire', 'data'], 'required'],
            [['expire'], 'integer'],
            [['data'], 'string'],
            [['id'], 'string', 'max' => 64]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'expire' => Yii::t('app', 'Expire'),
            'data' => Yii::t('app', 'Data'),
        ];
    }


    
    /**
     * @inheritdoc
     * @return \app\models\query\SessionQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\SessionQuery(get_called_class());
    }


}