<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Articulos */

$this->title = 'Update Articulos: ' . $model->cod_articulo;
$this->params['breadcrumbs'][] = ['label' => 'Articulos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cod_articulo, 'url' => ['view', 'id' => $model->cod_articulo]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="articulos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
