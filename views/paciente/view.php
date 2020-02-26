<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Paciente */

$this->title = $model->nombre_paciente;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="paciente-view">


    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id_paciente], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id_clinica_paciente',
            // 'id_paciente',
            'rut_paciente',
            'nombre_paciente',
            'fnacimiento_paciente:date',
            'sexo_paciente',
            'alergias_paciente',
            'telefono_paciente',
            'telefono2_paciente',
            'email_paciente:email',
            [   'attribute'=>'id_region',
                'value'=>$model->region->nom_region],
            [   'attribute'=>'id_comuna',
                'value'=>$model->comuna->nom_comuna],
            'direccion_paciente',
            'comentario_paciente',
        ],
    ]) ?>

</div>
