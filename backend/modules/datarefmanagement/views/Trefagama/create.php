<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TrefAgama */

$this->title = 'Create Tref Agama';
$this->params['breadcrumbs'][] = ['label' => 'Tref Agamas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-agama-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
