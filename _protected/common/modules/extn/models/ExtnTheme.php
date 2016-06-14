<?php

namespace common\modules\extn\models;

use Yii;

/**
 * This is the model class for table "{{%extn_theme}}".
 *
 * @property string $extn_theme_id
 * @property string $theme_name
 * @property string $developer_name
 * @property string $developer_email
 * @property integer $enabled_cb
 * @property integer $default_cb
 * @property string $version_number
 * @property string $developer_details
 * @property string $path
 * @property string $dependent_class
 * @property integer $weight
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property integer $company_id
 */
class ExtnTheme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%extn_theme}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['theme_name', 'created_by', 'last_update_by'], 'required'],
            [['enabled_cb', 'default_cb', 'weight', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['creation_date', 'last_update_date'], 'safe'],
            [['theme_name'], 'string', 'max' => 100],
            [['developer_name', 'developer_email'], 'string', 'max' => 50],
            [['version_number'], 'string', 'max' => 25],
            [['developer_details', 'path', 'dependent_class'], 'string', 'max' => 255],
            [['theme_name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'extn_theme_id' => Yii::t('app', 'Extn Theme ID'),
            'theme_name' => Yii::t('app', 'Theme Name'),
            'developer_name' => Yii::t('app', 'Developer Name'),
            'developer_email' => Yii::t('app', 'Developer Email'),
            'enabled_cb' => Yii::t('app', 'Enabled Cb'),
            'default_cb' => Yii::t('app', 'Default Cb'),
            'version_number' => Yii::t('app', 'Version Number'),
            'developer_details' => Yii::t('app', 'Developer Details'),
            'path' => Yii::t('app', 'Path'),
            'dependent_class' => Yii::t('app', 'Dependent Class'),
            'weight' => Yii::t('app', 'Weight'),
            'created_by' => Yii::t('app', 'Created By'),
            'creation_date' => Yii::t('app', 'Creation Date'),
            'last_update_by' => Yii::t('app', 'Last Update By'),
            'last_update_date' => Yii::t('app', 'Last Update Date'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
}
