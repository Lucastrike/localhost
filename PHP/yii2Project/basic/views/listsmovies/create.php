<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Listsmovies */

$this->title = 'Create Listsmovies';
$this->params['breadcrumbs'][] = ['label' => 'Listsmovies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="listsmovies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
