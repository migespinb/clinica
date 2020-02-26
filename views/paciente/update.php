<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Paciente */

$this->title = 'Actualizar: ' . $model->nombre_paciente;
$this->params['breadcrumbs'][] = ['label' => 'Pacientes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rut_paciente, 'url' => ['view', 'id' => $model->id_paciente]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="paciente-update">

    <!-- <h1><?= Html::encode($this->title) ?></h1> -->

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
