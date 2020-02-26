<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Atiende;

/**
 * AtiendeSearch represents the model behind the search form of `app\models\Atiende`.
 */
class AtiendeSearch extends Atiende
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paciente', 'id_servicio', 'id_pieza', 'id_convenio', 'id_medio', 'id_clinica_atiende', 'dcto_atiende', 'valordcto_atiende', 'total_atiende'], 'integer'],
            [['fecha_atiende', 'descripcion_atiende', 'receta_atiende', 'proxcita_atiende', 'estado_atiende', 'usuario_atiende'], 'safe'],
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
        $query = Atiende::find();

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
            'id_paciente' => $this->id_paciente,
            'id_servicio' => $this->id_servicio,
            'id_pieza' => $this->id_pieza,
            'id_convenio' => $this->id_convenio,
            'id_medio' => $this->id_medio,
            'id_clinica_atiende' => $this->id_clinica_atiende,
            'fecha_atiende' => $this->fecha_atiende,
            'proxcita_atiende' => $this->proxcita_atiende,
            'dcto_atiende' => $this->dcto_atiende,
            'valordcto_atiende' => $this->valordcto_atiende,
            'total_atiende' => $this->total_atiende,
        ]);

        $query->andFilterWhere(['like', 'descripcion_atiende', $this->descripcion_atiende])
            ->andFilterWhere(['like', 'receta_atiende', $this->receta_atiende])
            ->andFilterWhere(['like', 'estado_atiende', $this->estado_atiende])
            ->andFilterWhere(['like', 'usuario_atiende', $this->usuario_atiende]);

        return $dataProvider;
    }
}
