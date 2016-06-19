<?php

namespace common\modules\tr\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\tr\models\TmCargo;

/**
 * TmCargoSearch represents the model behind the search form about `common\modules\tr\models\TmCargo`.
 */
class TmCargoSearch extends TmCargo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'from_address_nr', 'to_address_nr', 'size', 'image_file_id', 'company_id'], 'integer'],
            [['user_id', 'cargo_id', 'from_company', 'from_street', 'from_zipcode', 'from_city', 'from_state', 'from_country', 'to_company', 'to_street', 'to_zipcode', 'to_city', 'to_state', 'to_country', 'arrival_date', 'currency', 'cargo_type', 'transport_type', 'weight', 'volume', 'length', 'height', 'width', 'description', 'physical_state', 'notes', 'tx_date', 'weight_unit', 'volume_unit', 'length_unit', 'height_unit', 'width_unit', 'size_unit', 'attach_id_values'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TmCargo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'from_address_nr' => $this->from_address_nr,
            'to_address_nr' => $this->to_address_nr,
            'arrival_date' => $this->arrival_date,
            'price' => $this->price,
            'size' => $this->size,
            'tx_date' => $this->tx_date,
            'image_file_id' => $this->image_file_id,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'cargo_id', $this->cargo_id])
            ->andFilterWhere(['like', 'from_company', $this->from_company])
            ->andFilterWhere(['like', 'from_street', $this->from_street])
            ->andFilterWhere(['like', 'from_zipcode', $this->from_zipcode])
            ->andFilterWhere(['like', 'from_city', $this->from_city])
            ->andFilterWhere(['like', 'from_state', $this->from_state])
            ->andFilterWhere(['like', 'from_country', $this->from_country])
            ->andFilterWhere(['like', 'to_company', $this->to_company])
            ->andFilterWhere(['like', 'to_street', $this->to_street])
            ->andFilterWhere(['like', 'to_zipcode', $this->to_zipcode])
            ->andFilterWhere(['like', 'to_city', $this->to_city])
            ->andFilterWhere(['like', 'to_state', $this->to_state])
            ->andFilterWhere(['like', 'to_country', $this->to_country])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'cargo_type', $this->cargo_type])
            ->andFilterWhere(['like', 'transport_type', $this->transport_type])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'volume', $this->volume])
            ->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'physical_state', $this->physical_state])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'weight_unit', $this->weight_unit])
            ->andFilterWhere(['like', 'volume_unit', $this->volume_unit])
            ->andFilterWhere(['like', 'length_unit', $this->length_unit])
            ->andFilterWhere(['like', 'height_unit', $this->height_unit])
            ->andFilterWhere(['like', 'width_unit', $this->width_unit])
            ->andFilterWhere(['like', 'size_unit', $this->size_unit])
            ->andFilterWhere(['like', 'attach_id_values', $this->attach_id_values]);

        return $dataProvider;
    }
}
