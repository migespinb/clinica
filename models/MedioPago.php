<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medio_pago".
 *
 * @property int $id_clinica_medio
 * @property int $id_medio
 * @property string $nombre_medio
 * @property string $validodesde_medio
 * @property string $validohasta_medio
 *
 * @property Atiende[] $atiendes
 */
class MedioPago extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medio_pago';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_medio'], 'required'],
            [['id_clinica_medio'], 'integer'],
            [['validodesde_medio', 'validohasta_medio'], 'safe'],
            [['nombre_medio'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_medio' => 'Id Clinica Medio',
            'id_medio' => 'Id Medio',
            'nombre_medio' => 'Nombre Medio',
            'validodesde_medio' => 'Validodesde Medio',
            'validohasta_medio' => 'Validohasta Medio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtiendes()
    {
        return $this->hasMany(Atiende::className(), ['id_medio' => 'id_medio']);
    }
}
