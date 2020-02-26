<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_cita')->textInput() ?>

    <?= $form->field($model, 'id_paciente')->textInput() ?>

    <?= $form->field($model, 'fsolicitud_cita')->textInput() ?>

    <?= $form->field($model, 'motivo_cita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ftentativa_cita')->textInput() ?>

    <?= $form->field($model, 'especialista_cita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'confirma_cita')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asiste_cita')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
