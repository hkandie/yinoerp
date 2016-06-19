<?php

namespace common\modules\tr\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\tr\models\TmTransport;

/**
 * TmTransportSearch represents the model behind the search form about `common\modules\tr\models\TmTransport`.
 */
class TmTransportSearch extends TmTransport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'company_id'], 'integer'],
            [['user_id', 'departure_date', 'arrival_date', 'startshipping_date', 'endshipping_date', 'from_city', 'from_country', 'to_city', 'to_country', 'currency', 'transport_type', 'container_type', 'weight', 'volume', 'length', 'height', 'width', 'airfreight_security', 'shipper', 'description', 'notes', 'tx_date', 'transport_ID', 'awb', 'airfreight_security_type'], 'safe'],
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
        $query = TmTransport::find();

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
            'departure_date' => $this->departure_date,
            'arrival_date' => $this->arrival_date,
            'startshipping_date' => $this->startshipping_date,
            'endshipping_date' => $this->endshipping_date,
            'price' => $this->price,
            'tx_date' => $this->tx_date,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'from_city', $this->from_city])
            ->andFilterWhere(['like', 'from_country', $this->from_country])
            ->andFilterWhere(['like', 'to_city', $this->to_city])
            ->andFilterWhere(['like', 'to_country', $this->to_country])
            ->andFilterWhere(['like', 'currency', $this->currency])
            ->andFilterWhere(['like', 'transport_type', $this->transport_type])
            ->andFilterWhere(['like', 'container_type', $this->container_type])
            ->andFilterWhere(['like', 'weight', $this->weight])
            ->andFilterWhere(['like', 'volume', $this->volume])
            ->andFilterWhere(['like', 'length', $this->length])
            ->andFilterWhere(['like', 'height', $this->height])
            ->andFilterWhere(['like', 'width', $this->width])
            ->andFilterWhere(['like', 'airfreight_security', $this->airfreight_security])
            ->andFilterWhere(['like', 'shipper', $this->shipper])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'notes', $this->notes])
            ->andFilterWhere(['like', 'transport_ID', $this->transport_ID])
            ->andFilterWhere(['like', 'awb', $this->awb])
            ->andFilterWhere(['like', 'airfreight_security_type', $this->airfreight_security_type]);

        return $dataProvider;
    }
}
