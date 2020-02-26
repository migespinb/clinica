<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pieza".
 *
 * @property int $id_clinica_pieza
 * @property int $id_pieza
 * @property string $nombre_pieza
 * @property string $descripcion_pieza
 *
 * @property Asociado[] $asociados
 * @property Servicio[] $servicios
 * @property Atiende[] $atiendes
 */
class Pieza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pieza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_pieza', 'nombre_pieza'], 'required'],
            [['id_clinica_pieza'], 'integer'],
            [['nombre_pieza'], 'string', 'max' => 120],
            [['descripcion_pieza'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_pieza' => 'Id Clinica Pieza',
            'id_pieza' => 'Id Pieza',
            'nombre_pieza' => 'Nombre Pieza',
            'descripcion_pieza' => 'Descripcion Pieza',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsociados()
    {
        return $this->hasMany(Asociado::className(), ['id_pieza' => 'id_pieza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicios()
    {
        return $this->hasMany(Servicio::className(), ['id_servicio' => 'id_servicio'])->viaTable('asociado', ['id_pieza' => 'id_pieza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtiendes()
    {
        return $this->hasMany(Atiende::className(), ['id_pieza' => 'id_pieza']);
    }
}
