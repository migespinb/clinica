<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paciente".
 *
 * @property int $id_clinica_paciente
 * @property int $id_paciente
 * @property int $id_comuna
 * @property int $id_region
 * @property string $rut_paciente
 * @property string $nombre_paciente
 * @property string $fnacimiento_paciente
 * @property string $sexo_paciente
 * @property string $alergias_paciente
 * @property string $telefono_paciente
 * @property string $telefono2_paciente
 * @property string $email_paciente
 * @property string $direccion_paciente
 * @property string $comentario_paciente
 *
 * @property Atiende[] $atiendes
 * @property Cita[] $citas
 * @property Documento[] $documentos
 * @property Mail[] $mails
 * @property Region $region
 * @property Comuna $comuna
 */
class Paciente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'paciente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_clinica_paciente', 'id_comuna', 'id_region', 'nombre_paciente'], 'required'],
            [['id_clinica_paciente', 'id_comuna', 'id_region'], 'integer'],
            [['fnacimiento_paciente'], 'safe'],
            [['rut_paciente'], 'string', 'max' => 10],
            [['nombre_paciente', 'direccion_paciente'], 'string', 'max' => 120],
            [['sexo_paciente'], 'string', 'max' => 15],
            [['alergias_paciente'], 'string', 'max' => 300],
            [['telefono_paciente', 'telefono2_paciente'], 'string', 'max' => 12],
            [['email_paciente'], 'string', 'max' => 100],
            [['comentario_paciente'], 'string', 'max' => 500],
            [['id_region'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['id_region' => 'id_region']],
            [['id_comuna'], 'exist', 'skipOnError' => true, 'targetClass' => Comuna::className(), 'targetAttribute' => ['id_comuna' => 'id_comuna']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_clinica_paciente' => 'ID clinica',
            'id_paciente' => 'ID paciente',
            'id_comuna' => 'Comuna',
            'id_region' => 'Región',
            'rut_paciente' => 'R.U.N',
            'nombre_paciente' => 'Nombre',
            'fnacimiento_paciente' => 'Fecha nacimiento',
            'sexo_paciente' => 'Sexo',
            'alergias_paciente' => 'Alergias',
            'telefono_paciente' => 'Teléfono',
            'telefono2_paciente' => 'Teléfono 2',
            'email_paciente' => 'Email',
            'direccion_paciente' => 'Dirección',
            'comentario_paciente' => 'Comentario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAtiendes()
    {
        return $this->hasMany(Atiende::className(), ['id_paciente' => 'id_paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCitas()
    {
        return $this->hasMany(Cita::className(), ['id_paciente' => 'id_paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentos()
    {
        return $this->hasMany(Documento::className(), ['id_paciente' => 'id_paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMails()
    {
        return $this->hasMany(Mail::className(), ['id_paciente' => 'id_paciente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Region::className(), ['id_region' => 'id_region']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComuna()
    {
        return $this->hasOne(Comuna::className(), ['id_comuna' => 'id_comuna']);
    }

    public function getClinica()
    {
        return $this->hasOne(Clinica::className(), ['id_clinica' => 'id_clinica_paciente']);
    }
}
