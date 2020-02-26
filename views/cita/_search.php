<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CitaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cita-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_cita') ?>

    <?= $form->field($model, 'id_cita') ?>

    <?= $form->field($model, 'id_paciente') ?>

    <?= $form->field($model, 'fsolicitud_cita') ?>

    <?= $form->field($model, 'motivo_cita') ?>

    <?php // echo $form->field($model, 'ftentativa_cita') ?>

    <?php // echo $form->field($model, 'especialista_cita') ?>

    <?php // echo $form->field($model, 'confirma_cita') ?>

    <?php // echo $form->field($model, 'asiste_cita') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
