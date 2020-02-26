<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PacienteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paciente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_clinica_paciente') ?>

    <?= $form->field($model, 'id_paciente') ?>

    <?= $form->field($model, 'id_comuna') ?>

    <?= $form->field($model, 'id_region') ?>

    <?= $form->field($model, 'rut_paciente') ?>

    <?php // echo $form->field($model, 'nombre_paciente') ?>

    <?php // echo $form->field($model, 'fnacimiento_paciente') ?>

    <?php // echo $form->field($model, 'sexo_paciente') ?>

    <?php // echo $form->field($model, 'alergias_paciente') ?>

    <?php // echo $form->field($model, 'telefono_paciente') ?>

    <?php // echo $form->field($model, 'telefono2_paciente') ?>

    <?php // echo $form->field($model, 'email_paciente') ?>

    <?php // echo $form->field($model, 'direccion_paciente') ?>

    <?php // echo $form->field($model, 'comentario_paciente') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
