<?php

namespace common\modules\tr\models;

use Yii;

/**
 * This is the model class for table "{{%tm_cargo}}".
 *
 * @property integer $id
 * @property string $user_id
 * @property string $cargo_id
 * @property string $from_company
 * @property string $from_street
 * @property integer $from_address_nr
 * @property string $from_zipcode
 * @property string $from_city
 * @property string $from_state
 * @property string $from_country
 * @property string $to_company
 * @property string $to_street
 * @property integer $to_address_nr
 * @property string $to_zipcode
 * @property string $to_city
 * @property string $to_state
 * @property string $to_country
 * @property string $arrival_date
 * @property string $price
 * @property string $currency
 * @property string $cargo_type
 * @property string $transport_type
 * @property string $weight
 * @property string $volume
 * @property string $length
 * @property string $height
 * @property string $width
 * @property integer $size
 * @property string $description
 * @property string $physical_state
 * @property string $notes
 * @property string $tx_date
 * @property string $weight_unit
 * @property string $volume_unit
 * @property string $length_unit
 * @property string $height_unit
 * @property string $width_unit
 * @property string $size_unit
 * @property integer $image_file_id
 * @property string $attach_id_values
 * @property integer $company_id
 */
class TmCargo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%tm_cargo}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['from_company', 'from_street', 'from_address_nr', 'from_zipcode', 'from_state', 'to_company', 'to_street', 'to_address_nr', 'to_zipcode', 'to_state', 'physical_state'], 'required'],
            [['from_address_nr', 'to_address_nr', 'size', 'image_file_id', 'company_id'], 'integer'],
            [['from_city', 'from_country', 'to_city', 'to_country', 'cargo_type', 'transport_type', 'weight', 'volume', 'description', 'notes'], 'string'],
            [['arrival_date', 'tx_date'], 'safe'],
            [['price'], 'number'],
            [['user_id', 'cargo_id', 'from_company', 'from_state', 'to_company', 'to_street', 'to_state', 'length', 'height', 'width'], 'string', 'max' => 20],
            [['from_street', 'to_zipcode'], 'string', 'max' => 15],
            [['from_zipcode'], 'string', 'max' => 10],
            [['currency', 'physical_state'], 'string', 'max' => 30],
            [['weight_unit', 'volume_unit', 'length_unit', 'height_unit', 'width_unit', 'size_unit'], 'string', 'max' => 50],
            [['attach_id_values'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'cargo_id' => Yii::t('app', 'Cargo ID'),
            'from_company' => Yii::t('app', 'From Company'),
            'from_street' => Yii::t('app', 'From Street'),
            'from_address_nr' => Yii::t('app', 'From Address Nr'),
            'from_zipcode' => Yii::t('app', 'From Zipcode'),
            'from_city' => Yii::t('app', 'From City'),
            'from_state' => Yii::t('app', 'From State'),
            'from_country' => Yii::t('app', 'From Country'),
            'to_company' => Yii::t('app', 'To Company'),
            'to_street' => Yii::t('app', 'To Street'),
            'to_address_nr' => Yii::t('app', 'To Address Nr'),
            'to_zipcode' => Yii::t('app', 'To Zipcode'),
            'to_city' => Yii::t('app', 'To City'),
            'to_state' => Yii::t('app', 'To State'),
            'to_country' => Yii::t('app', 'To Country'),
            'arrival_date' => Yii::t('app', 'Arrival Date'),
            'price' => Yii::t('app', 'Price'),
            'currency' => Yii::t('app', 'Currency'),
            'cargo_type' => Yii::t('app', 'Cargo Type'),
            'transport_type' => Yii::t('app', 'Transport Type'),
            'weight' => Yii::t('app', 'Weight'),
            'volume' => Yii::t('app', 'Volume'),
            'length' => Yii::t('app', 'Length'),
            'height' => Yii::t('app', 'Height'),
            'width' => Yii::t('app', 'Width'),
            'size' => Yii::t('app', 'Size'),
            'description' => Yii::t('app', 'Description'),
            'physical_state' => Yii::t('app', 'Physical State'),
            'notes' => Yii::t('app', 'Notes'),
            'tx_date' => Yii::t('app', 'Tx Date'),
            'weight_unit' => Yii::t('app', 'Weight Unit'),
            'volume_unit' => Yii::t('app', 'Volume Unit'),
            'length_unit' => Yii::t('app', 'Length Unit'),
            'height_unit' => Yii::t('app', 'Height Unit'),
            'width_unit' => Yii::t('app', 'Width Unit'),
            'size_unit' => Yii::t('app', 'Size Unit'),
            'image_file_id' => Yii::t('app', 'Image File ID'),
            'attach_id_values' => Yii::t('app', 'Attach Id Values'),
            'company_id' => Yii::t('app', 'Company ID'),
        ];
    }
    public static function get_transation_id() {
        $txid=TmCargo::find()->select("cargo_id")->order_by("cargo desc")->one();
        if ($txid) {
            $txid = $txid->transaction_id++;
            $c = substr($txid, strlen($txid) - 4);
            $c++;
            while (strpos($c, 'o') == true || strpos($c, '0') == true || strpos($c, 'O') == true || strpos($c, 'I') == true || strpos($c, '1') == true) {
                $c++;
            }
            $txid = "C" . date("yM") . $c;
        } else {
            $txid = "C" . date("yM") . "2" . "AAA";
        }

        return strtoupper($txid);
    }
}
