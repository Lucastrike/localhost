<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Lists;
use app\models\Movies;

/* @var $this yii\web\View */
/* @var $model app\models\Listsmovies */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="listsmovies-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_lists')->dropDownList(ArrayHelper::map(Lists::find()->all(),'id','type'),['prompt'=>'Selecciona Tipo']
    )?>

    

    <?= $form->field($model, 'id_users')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
