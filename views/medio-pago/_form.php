<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MedioPago */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medio-pago-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_clinica_medio')->textInput() ?>

    <?= $form->field($model, 'nombre_medio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'validodesde_medio')->textInput() ?>

    <?= $form->field($model, 'validohasta_medio')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
