<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Atiende */

$this->title = $model->id_paciente;
$this->params['breadcrumbs'][] = ['label' => 'Atiendes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="atiende-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_paciente' => $model->id_paciente, 'id_servicio' => $model->id_servicio, 'id_medio' => $model->id_medio, 'fecha_atiende' => $model->fecha_atiende], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_paciente' => $model->id_paciente, 'id_servicio' => $model->id_servicio, 'id_medio' => $model->id_medio, 'fecha_atiende' => $model->fecha_atiende], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_paciente',
            'id_servicio',
            'id_pieza',
            'id_convenio',
            'id_medio',
            'id_clinica_atiende',
            'fecha_atiende',
            'descripcion_atiende',
            'receta_atiende',
            'proxcita_atiende',
            'dcto_atiende',
            'valordcto_atiende',
            'total_atiende',
            'estado_atiende',
            'usuario_atiende',
        ],
    ]) ?>

</div>
