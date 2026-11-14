<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UserBook;

/**
 * UserBookSearch represents the model behind the search form of `app\models\UserBook`.
 */
class UserBookSearch extends UserBook
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_user_book', 'id_user', 'id_book', 'id_status'], 'integer'],
            [['added_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = UserBook::find();

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
            'id_user_book' => $this->id_user_book,
            'id_user' => $this->id_user,
            'id_book' => $this->id_book,
            'id_status' => $this->id_status,
            'added_at' => $this->added_at,
        ]);

        return $dataProvider;
    }
}
