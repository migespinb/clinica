<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Servicio */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="servicio-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_servicio')->textInput() ?>

    <?= $form->field($model, 'nombre_servicio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valor_servicio')->textInput() ?>

    <?= $form->field($model, 'ofertadcto_servicio')->textInput() ?>

    <?= $form->field($model, 'validodesde_servicio')->textInput() ?>

    <?= $form->field($model, 'validohasta_servicio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
