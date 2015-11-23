<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Schedules */

$this->title = '创建定时任务';
$this->params['breadcrumbs'][] = ['label' => '定时任务列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedules-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
