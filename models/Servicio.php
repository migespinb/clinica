<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property int $id_clinica_servicio
 * @property int $id_servicio
 * @property string $nombre_servicio
 * @property int $valor_servicio
 * @property int $ofertadcto_servicio
 * @property string $validodesde_servicio
 * @property string $validohasta_servicio
 *
 * @property Asociado[] $asociados
 * @property Pieza[] $piezas
 * @property Atiende[] $atiendes
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_servicio', 'nombre_servicio', 'valor_servicio'], 'required'],
            [['id_clinica_servicio', 'valor_servicio', 'ofertadcto_servicio'], 'integer'],
            [['validodesde_servicio', 'validohasta_servicio'], 'safe'],
            [['nombre_servicio'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_servicio' => 'Id Clinica Servicio',
            'id_servicio' => 'Id Servicio',
            'nombre_servicio' => 'Nombre Servicio',
            'valor_servicio' => 'Valor Servicio',
            'ofertadcto_servicio' => 'Ofertadcto Servicio',
            'validodesde_servicio' => 'Validodesde Servicio',
            'validohasta_servicio' => 'Validohasta Servicio',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsociados()
    {
        return $this->hasMany(Asociado::className(), ['id_servicio' => 'id_servicio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPiezas()
    {
        return $this->hasMany(Pieza::className(), ['id_pieza' => 'id_pieza'])->viaTable('asociado', ['id_servicio' => 'id_servicio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtiendes()
    {
        return $this->hasMany(Atiende::className(), ['id_servicio' => 'id_servicio']);
    }
}
