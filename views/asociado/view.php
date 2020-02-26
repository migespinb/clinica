<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Asociado */

$this->title = $model->id_pieza;
$this->params['breadcrumbs'][] = ['label' => 'Asociados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="asociado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_pieza' => $model->id_pieza, 'id_servicio' => $model->id_servicio], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_pieza' => $model->id_pieza, 'id_servicio' => $model->id_servicio], [
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
            'id_pieza',
            'id_servicio',
            'id_clinica_asociado',
        ],
    ]) ?>

</div>
