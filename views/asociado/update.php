<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asociado */

$this->title = 'Update Asociado: ' . $model->id_pieza;
$this->params['breadcrumbs'][] = ['label' => 'Asociados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pieza, 'url' => ['view', 'id_pieza' => $model->id_pieza, 'id_servicio' => $model->id_servicio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asociado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
