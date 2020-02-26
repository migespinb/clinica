<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MedioPago */

$this->title = 'Update Medio Pago: ' . $model->id_medio;
$this->params['breadcrumbs'][] = ['label' => 'Medio Pagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_medio, 'url' => ['view', 'id' => $model->id_medio]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="medio-pago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
