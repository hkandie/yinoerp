<?php

namespace common\modules\user\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%_profile}}".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $create_time
 * @property string $update_time
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $level
 * @property string $mobile
 * @property integer $bill_code
 * @property string $note
 * @property string $avatar
 * @property integer $page_size
 * @property string $notifications
 * @property integer $company_id
 * @property integer $dept_id
 * @property integer $active
 * @property double $load_cost
 * @property double $seat_charge
 * @property double $daily_hours
 * @property string $assigned_ip
 * @property string $phone
 * @property string $user_language
 * @property integer $date_format
 * @property integer $hr_employee_id
 * @property integer $block_notif_count
 * @property integer $supplier_id
 * @property string $default_theme
 * @property integer $use_personal_db_cb
 * @property integer $ar_customer_id
 * @property integer $prices_dec
 * @property integer $qty_dec
 * @property integer $rates_dec
 * @property integer $percent_dec
 * @property integer $show_gl
 * @property integer $show_codes
 * @property integer $show_hints
 * @property string $last_visit_date
 * @property integer $query_size
 * @property integer $image_file_id
 * @property integer $pos
 * @property string $print_profile
 * @property integer $rep_popup
 * @property string $auth_provider_name
 * @property string $auth_provider_id
 * @property integer $status
 * @property integer $created_by
 * @property string $creation_date
 * @property integer $last_update_by
 * @property string $last_update_date
 * @property string $revision_enabled
 * @property integer $revision_number
 *
 * @property Users $user
 */
class Profile extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return static::getDb()->tablePrefix . '_profile';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['user_id', 'bill_code', 'page_size', 'company_id', 'dept_id', 'active', 'date_format', 'hr_employee_id', 'block_notif_count', 'supplier_id', 'use_personal_db_cb', 'ar_customer_id', 'prices_dec', 'qty_dec', 'rates_dec', 'percent_dec', 'show_gl', 'show_codes', 'show_hints', 'query_size', 'image_file_id', 'pos', 'rep_popup', 'status', 'created_by', 'last_update_by', 'revision_number'], 'integer'],
            [['create_time', 'update_time', 'last_visit_date', 'creation_date', 'last_update_date'], 'safe'],
            [['note'], 'string'],
            [['load_cost', 'seat_charge', 'daily_hours'], 'number'],
            [['first_name', 'last_name', 'gender', 'auth_provider_name', 'auth_provider_id'], 'string', 'max' => 255],
            [['level'], 'string', 'max' => 2],
            [['mobile', 'notifications'], 'string', 'max' => 12],
            [['avatar'], 'file', 'extensions' => 'jpg, jpeg, gif, png', 'skipOnEmpty' => true,
                'checkExtensionByMimeType' => true, 'on' => 'photo-upload'],
            [['assigned_ip', 'phone'], 'string', 'max' => 256],
            [['user_language'], 'string', 'max' => 20],
            [['default_theme'], 'string', 'max' => 50],
            [['print_profile'], 'string', 'max' => 30],
            [['revision_enabled'], 'string', 'max' => 1],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => Yii::t('user', 'ID'),
            'user_id' => Yii::t('user', 'User ID'),
            'create_time' => Yii::t('user', 'Create Time'),
            'update_time' => Yii::t('user', 'Update Time'),
            'first_name' => Yii::t('user', 'First Name'),
            'last_name' => Yii::t('user', 'Last Name'),
            'gender' => Yii::t('user', 'Gender'),
            'level' => Yii::t('user', 'Level'),
            'mobile' => Yii::t('user', 'Mobile'),
            'bill_code' => Yii::t('user', 'Bill Code'),
            'note' => Yii::t('user', 'Note'),
            'avatar' => Yii::t('user', 'Avatar'),
            'page_size' => Yii::t('user', 'Page Size'),
            'notifications' => Yii::t('user', 'Do you wish to recieve notifications'),
            'company_id' => Yii::t('user', 'Company'),
            'dept_id' => Yii::t('user', 'Dept ID'),
            'active' => Yii::t('user', 'Active'),
            'load_cost' => Yii::t('user', 'Load Cost'),
            'seat_charge' => Yii::t('user', 'Seat Charge'),
            'daily_hours' => Yii::t('user', 'Daily Hours'),
            'assigned_ip' => Yii::t('user', 'Assigned Ip'),
            'phone' => Yii::t('user', 'Phone'),
            'user_language' => Yii::t('user', 'User Language'),
            'date_format' => Yii::t('user', 'Date Format'),
            'hr_employee_id' => Yii::t('user', 'Employee Name'),
            'block_notif_count' => Yii::t('user', 'Block Notif Count'),
            'supplier_id' => Yii::t('user', 'Supplier Name'),
            'default_theme' => Yii::t('user', 'Default Theme'),
            'use_personal_db_cb' => Yii::t('user', 'Use Personal Db Cb'),
            'ar_customer_id' => Yii::t('user', 'Customer Name'),
            'prices_dec' => Yii::t('user', 'Prices Dec'),
            'qty_dec' => Yii::t('user', 'Qty Dec'),
            'rates_dec' => Yii::t('user', 'Rates Dec'),
            'percent_dec' => Yii::t('user', 'Percent Dec'),
            'show_gl' => Yii::t('user', 'Show Gl'),
            'show_codes' => Yii::t('user', 'Show Codes'),
            'show_hints' => Yii::t('user', 'Show Hints'),
            'last_visit_date' => Yii::t('user', 'Last Visit Date'),
            'query_size' => Yii::t('user', 'Query Size'),
            'image_file_id' => Yii::t('user', 'Image File ID'),
            'pos' => Yii::t('user', 'Pos'),
            'print_profile' => Yii::t('user', 'Print Profile'),
            'rep_popup' => Yii::t('user', 'Rep Popup'),
            'auth_provider_name' => Yii::t('user', 'Auth Provider Name'),
            'auth_provider_id' => Yii::t('user', 'Auth Provider ID'),
            'status' => Yii::t('user', 'Status'),
            'created_by' => Yii::t('user', 'Created By'),
            'creation_date' => Yii::t('user', 'Creation Date'),
            'last_update_by' => Yii::t('user', 'Last Update By'),
            'last_update_date' => Yii::t('user', 'Last Update Date'),
            'revision_enabled' => Yii::t('user', 'Revision Enabled'),
            'revision_number' => Yii::t('user', 'Revision Number'),
        ];
    }

    public function behaviors() {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'value' => function () {
                    return date("Y-m-d H:i:s");
                },
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => 'create_time',
                    ActiveRecord::EVENT_BEFORE_UPDATE => 'update_time',
                ],
            ],
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser() {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }

    public function setUser($userId) {
        $this->user_id = $userId;
        return $this;
    }

    public static function getGenderOption() {
        return [
            "M" => 'Male',
            "F" => 'Female',
            "0" => 'Not Applicable',
        ];
    }

    public static function getPageSize() {
        return [
            10 => '10 per page',
            15 => '15 per page',
            25 => '20 per page',
            30 => '30 per page',
            35 => '35 per page',
        ];
    }

    public static function getNotification() {
        return [
            1 => 'Yes',
            0 => 'No',
        ];
    }

    public static function getAvatar($imgName) {
        $dispImg = is_file(Yii::getAlias('@uploads') . '/user_images/' . $imgName) ? true : false;
        return Yii::getAlias('@uploads') . "/" . (($dispImg) ? $imgName : "no-photo.png");
    }

    public function getUserDetails() {
        return $this->hasOne(\common\modules\project\models\UserDetails::className(), ['user_id' => 'user_id']);
    }

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

}
