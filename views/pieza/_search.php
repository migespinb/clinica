<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PiezaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pieza-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_clinica_pieza') ?>

    <?= $form->field($model, 'id_pieza') ?>

    <?= $form->field($model, 'nombre_pieza') ?>

    <?= $form->field($model, 'descripcion_pieza') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
