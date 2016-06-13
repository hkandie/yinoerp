<?php

namespace common\modules\user\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\modules\user\models\Profile;

/**
 * ProfileSearch represents the model behind the search form about `common\modules\user\models\Profile`.
 */
class ProfileSearch extends Profile
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'bill_code', 'page_size', 'company_id', 'dept_id', 'active'], 'integer'],
            [['create_time', 'update_time', 'first_name', 'last_name', 'gender', 'level', 'phone', 'mobile', 'note', 'avatar', 'notifications', 'middle_name', 'title', 'address', 'location', 'town'], 'safe'],
            [['load_cost', 'seat_charge', 'daily_hours', 'min_hire_cost', 'max_hire_cost'], 'number'],
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
        $query = Profile::find();

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
            'user_id' => $this->user_id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
            'bill_code' => $this->bill_code,
            'page_size' => $this->page_size,
            'company_id' => $this->company_id,
            'dept_id' => $this->dept_id,
            'active' => $this->active,
            'load_cost' => $this->load_cost,
            'seat_charge' => $this->seat_charge,
            'daily_hours' => $this->daily_hours,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['>=', 'level', $this->level])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'notifications', $this->notifications])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'town', $this->town])        
             ->andFilterWhere(['>=', 'min_hire_cost', $this->min_hire_cost])
             ->andFilterWhere(['<=', 'max_hire_cost', $this->max_hire_cost]);

        return $dataProvider;
    }
}
