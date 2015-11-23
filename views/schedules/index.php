<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '定时任务列表';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="schedules-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('创建定时任务', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'taskid',
            'task_host_id',
            'timeout',
            'is_active',
            'triggers',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
