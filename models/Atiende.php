<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atiende".
 *
 * @property int $id_paciente
 * @property int $id_servicio
 * @property int $id_pieza
 * @property int $id_convenio
 * @property int $id_medio
 * @property int $id_clinica_atiende
 * @property string $fecha_atiende
 * @property string $descripcion_atiende
 * @property string $receta_atiende
 * @property string $proxcita_atiende
 * @property int $dcto_atiende
 * @property int $valordcto_atiende
 * @property int $total_atiende
 * @property string $estado_atiende
 * @property string $usuario_atiende
 *
 * @property Paciente $paciente
 * @property Servicio $servicio
 * @property Pieza $pieza
 * @property Convenio $convenio
 * @property MedioPago $medio
 */
class Atiende extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'atiende';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_paciente', 'id_servicio', 'id_medio', 'fecha_atiende', 'total_atiende'], 'required'],
            [['id_paciente', 'id_servicio', 'id_pieza', 'id_convenio', 'id_medio', 'id_clinica_atiende', 'dcto_atiende', 'valordcto_atiende', 'total_atiende'], 'integer'],
            [['fecha_atiende', 'proxcita_atiende'], 'safe'],
            [['descripcion_atiende', 'receta_atiende'], 'string', 'max' => 300],
            [['estado_atiende'], 'string', 'max' => 50],
            [['usuario_atiende'], 'string', 'max' => 100],
            [['id_paciente', 'id_servicio', 'id_medio', 'fecha_atiende'], 'unique', 'targetAttribute' => ['id_paciente', 'id_servicio', 'id_medio', 'fecha_atiende']],
            [['id_paciente'], 'exist', 'skipOnError' => true, 'targetClass' => Paciente::className(), 'targetAttribute' => ['id_paciente' => 'id_paciente']],
            [['id_servicio'], 'exist', 'skipOnError' => true, 'targetClass' => Servicio::className(), 'targetAttribute' => ['id_servicio' => 'id_servicio']],
            [['id_pieza'], 'exist', 'skipOnError' => true, 'targetClass' => Pieza::className(), 'targetAttribute' => ['id_pieza' => 'id_pieza']],
            [['id_convenio'], 'exist', 'skipOnError' => true, 'targetClass' => Convenio::className(), 'targetAttribute' => ['id_convenio' => 'id_convenio']],
            [['id_medio'], 'exist', 'skipOnError' => true, 'targetClass' => MedioPago::className(), 'targetAttribute' => ['id_medio' => 'id_medio']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_paciente' => 'Id Paciente',
            'id_servicio' => 'Id Servicio',
            'id_pieza' => 'Id Pieza',
            'id_convenio' => 'Id Convenio',
            'id_medio' => 'Id Medio',
            'id_clinica_atiende' => 'Id Clinica Atiende',
            'fecha_atiende' => 'Fecha Atiende',
            'descripcion_atiende' => 'Descripcion Atiende',
            'receta_atiende' => 'Receta Atiende',
            'proxcita_atiende' => 'Proxcita Atiende',
            'dcto_atiende' => 'Dcto Atiende',
            'valordcto_atiende' => 'Valordcto Atiende',
            'total_atiende' => 'Total Atiende',
            'estado_atiende' => 'Estado Atiende',
            'usuario_atiende' => 'Usuario Atiende',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaciente()
    {
        return $this->hasOne(Paciente::className(), ['id_paciente' => 'id_paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getServicio()
    {
        return $this->hasOne(Servicio::className(), ['id_servicio' => 'id_servicio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPieza()
    {
        return $this->hasOne(Pieza::className(), ['id_pieza' => 'id_pieza']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConvenio()
    {
        return $this->hasOne(Convenio::className(), ['id_convenio' => 'id_convenio']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMedio()
    {
        return $this->hasOne(MedioPago::className(), ['id_medio' => 'id_medio']);
    }
}
