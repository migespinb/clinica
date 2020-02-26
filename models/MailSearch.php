<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Mail;

/**
 * MailSearch represents the model behind the search form of `app\models\Mail`.
 */
class MailSearch extends Mail
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_mail', 'id_mail', 'id_cita', 'id_paciente'], 'integer'],
            [['tipo_mail', 'fecha_mail', 'motivo_mail', 'mensaje_mail', 'estado_mail'], 'safe'],
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
        $query = Mail::find();

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
            'id_clinica_mail' => $this->id_clinica_mail,
            'id_mail' => $this->id_mail,
            'id_cita' => $this->id_cita,
            'id_paciente' => $this->id_paciente,
            'fecha_mail' => $this->fecha_mail,
        ]);

        $query->andFilterWhere(['like', 'tipo_mail', $this->tipo_mail])
            ->andFilterWhere(['like', 'motivo_mail', $this->motivo_mail])
            ->andFilterWhere(['like', 'mensaje_mail', $this->mensaje_mail])
            ->andFilterWhere(['like', 'estado_mail', $this->estado_mail]);

        return $dataProvider;
    }
}
