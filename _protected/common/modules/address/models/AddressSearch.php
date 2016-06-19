<?php

namespace common\modules\address\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\address\models\Address;

/**
 * AddressSearch represents the model behind the search form about `common\modules\address\models\Address`.
 */
class AddressSearch extends Address
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address_id', 'mdm_tax_region_id', 'default_cb', 'rev_number', 'created_by', 'last_update_by', 'company_id'], 'integer'],
            [['type', 'address_name', 'description', 'phone', 'email', 'website', 'address', 'country', 'postal_code', 'status', 'usage_type', 'creation_date', 'last_update_date'], 'safe'],
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
        $query = Address::find();

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
            'address_id' => $this->address_id,
            'mdm_tax_region_id' => $this->mdm_tax_region_id,
            'default_cb' => $this->default_cb,
            'rev_number' => $this->rev_number,
            'created_by' => $this->created_by,
            'creation_date' => $this->creation_date,
            'last_update_by' => $this->last_update_by,
            'last_update_date' => $this->last_update_date,
            'company_id' => $this->company_id,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'address_name', $this->address_name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'usage_type', $this->usage_type]);

        return $dataProvider;
    }
}
