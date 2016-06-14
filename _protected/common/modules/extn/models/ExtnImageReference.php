<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_image_reference}}".
 *
 * @property string $extn_image_reference_id
 * @property integer $extn_image_id
 * @property string $reference_table
 * @property integer $reference_id
 * @property string $img_description1
 * @property string $img_description2
 * @property string $status
 * @property integer $company_id
 */
class ExtnImageReference extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_image_reference}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['extn_image_id', 'reference_table', 'reference_id'], 'required'],
            [['extn_image_id', 'reference_id', 'company_id'], 'integer'],
            [['reference_table'], 'string', 'max' => 50],
            [['img_description1', 'img_description2'], 'string', 'max' => 255],
            [['status'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_image_reference_id' => Yii::t('app', 'Extn Image Reference ID'),
            'extn_image_id' => Yii::t('app', 'Extn Image ID'),
            'reference_table' => Yii::t('app', 'Reference Table'),
            'reference_id' => Yii::t('app', 'Reference ID'),
            'img_description1' => Yii::t('app', 'Img Description1'),
            'img_description2' => Yii::t('app', 'Img Description2'),
            'status' => Yii::t('app', 'Status'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
