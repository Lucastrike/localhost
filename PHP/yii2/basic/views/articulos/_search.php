<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ArticulosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="articulos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cod_articulo') ?>

    <?= $form->field($model, 'articulo') ?>

    <?= $form->field($model, 'precio') ?>

    <?= $form->field($model, 'stock') ?>

    <?= $form->field($model, 'cod_categoria') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
