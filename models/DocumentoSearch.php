<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Documento;

/**
 * DocumentoSearch represents the model behind the search form of `app\models\Documento`.
 */
class DocumentoSearch extends Documento
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_documento', 'id_documento', 'id_paciente'], 'integer'],
            [['fecha_documento', 'nombre_documento', 'ubicacion_documento'], 'safe'],
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
        $query = Documento::find();

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
            'id_clinica_documento' => $this->id_clinica_documento,
            'id_documento' => $this->id_documento,
            'id_paciente' => $this->id_paciente,
            'fecha_documento' => $this->fecha_documento,
        ]);

        $query->andFilterWhere(['like', 'nombre_documento', $this->nombre_documento])
            ->andFilterWhere(['like', 'ubicacion_documento', $this->ubicacion_documento]);

        return $dataProvider;
    }
}
