<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Atiende */

$this->title = 'Update Atiende: ' . $model->id_paciente;
$this->params['breadcrumbs'][] = ['label' => 'Atiendes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_paciente, 'url' => ['view', 'id_paciente' => $model->id_paciente, 'id_servicio' => $model->id_servicio, 'id_medio' => $model->id_medio, 'fecha_atiende' => $model->fecha_atiende]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="atiende-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
