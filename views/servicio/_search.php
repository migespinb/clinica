<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServicioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicio-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_servicio') ?>

    <?= $form->field($model, 'id_servicio') ?>

    <?= $form->field($model, 'nombre_servicio') ?>

    <?= $form->field($model, 'valor_servicio') ?>

    <?= $form->field($model, 'ofertadcto_servicio') ?>

    <?php // echo $form->field($model, 'validodesde_servicio') ?>

    <?php // echo $form->field($model, 'validohasta_servicio') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
