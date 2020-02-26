<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pieza;

/**
 * PiezaSearch represents the model behind the search form of `app\models\Pieza`.
 */
class PiezaSearch extends Pieza
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_pieza', 'id_pieza'], 'integer'],
            [['nombre_pieza', 'descripcion_pieza'], 'safe'],
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
        $query = Pieza::find();

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
            'id_clinica_pieza' => $this->id_clinica_pieza,
            'id_pieza' => $this->id_pieza,
        ]);

        $query->andFilterWhere(['like', 'nombre_pieza', $this->nombre_pieza])
            ->andFilterWhere(['like', 'descripcion_pieza', $this->descripcion_pieza]);

        return $dataProvider;
    }
}
