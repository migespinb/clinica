<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AtiendeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="atiende-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_paciente') ?>

    <?= $form->field($model, 'id_servicio') ?>

    <?= $form->field($model, 'id_pieza') ?>

    <?= $form->field($model, 'id_convenio') ?>

    <?= $form->field($model, 'id_medio') ?>

    <?php // echo $form->field($model, 'id_clinica_atiende') ?>

    <?php // echo $form->field($model, 'fecha_atiende') ?>

    <?php // echo $form->field($model, 'descripcion_atiende') ?>

    <?php // echo $form->field($model, 'receta_atiende') ?>

    <?php // echo $form->field($model, 'proxcita_atiende') ?>

    <?php // echo $form->field($model, 'dcto_atiende') ?>

    <?php // echo $form->field($model, 'valordcto_atiende') ?>

    <?php // echo $form->field($model, 'total_atiende') ?>

    <?php // echo $form->field($model, 'estado_atiende') ?>

    <?php // echo $form->field($model, 'usuario_atiende') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
