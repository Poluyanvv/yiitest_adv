<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Categories;

/**
 * searchCategory represents the model behind the search form about `common\models\Category`.
 */
class SearchCategory extends Categories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_parent_cat'], 'integer'],
            [['cat_title', 'cat_descr', 'img_cat'], 'safe'],
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
        $query = Categories::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'id_parent_cat' => $this->id_parent_cat,
        ]);

        $query->andFilterWhere(['like', 'cat_title', $this->cat_title])
            ->andFilterWhere(['like', 'cat_descr', $this->cat_descr])
            ->andFilterWhere(['like', 'img_cat', $this->img_cat]);

        return $dataProvider;
    }
}
