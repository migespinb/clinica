<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documento".
 *
 * @property int $id_clinica_documento
 * @property int $id_documento
 * @property int $id_paciente
 * @property string $fecha_documento
 * @property string $nombre_documento
 * @property string $ubicacion_documento
 *
 * @property Paciente $paciente
 */
class Documento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'documento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_documento', 'id_paciente'], 'required'],
            [['id_clinica_documento', 'id_paciente'], 'integer'],
            [['fecha_documento'], 'safe'],
            [['nombre_documento'], 'string', 'max' => 200],
            [['ubicacion_documento'], 'string', 'max' => 300],
            [['id_paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Paciente::className(), 'targetAttribute' => ['id_paciente' => 'id_paciente']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_documento' => 'Id Clinica Documento',
            'id_documento' => 'Id Documento',
            'id_paciente' => 'Id Paciente',
            'fecha_documento' => 'Fecha Documento',
            'nombre_documento' => 'Nombre Documento',
            'ubicacion_documento' => 'Ubicacion Documento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Paciente::className(), ['id_paciente' => 'id_paciente']);
    }
}
