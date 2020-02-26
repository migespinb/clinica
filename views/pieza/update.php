<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pieza */

$this->title = 'Update Pieza: ' . $model->id_pieza;
$this->params['breadcrumbs'][] = ['label' => 'Piezas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pieza, 'url' => ['view', 'id' => $model->id_pieza]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pieza-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
