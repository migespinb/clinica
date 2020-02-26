<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pieza */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pieza-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_pieza')->textInput() ?>

    <?= $form->field($model, 'nombre_pieza')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_pieza')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
