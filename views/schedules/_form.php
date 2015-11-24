<?php
use yii\helpers\ArrayHelper;

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use app\models\Hosts;
use app\models\Files;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Tabs;
?>
<div class="schedules-form">
	<?php $form = ActiveForm::begin([
            //'layout' => 'horizontal',
            //'fieldConfig' => [
            //    'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            //    'horizontalCssClasses' => [
            //        'label' => 'col-sm-4',
            //        'offset' => 'col-sm-offset-4',
            //        'wrapper' => 'col-sm-8',
            //        'error' => '',
            //        'hint' => '',
            //    ],
            //],
        ]);
    $items = ArrayHelper::map(Hosts::find()->asArray()->all(),'id','url');
    $file_items = ArrayHelper::map(Files::find()->asArray()->all(),'id','url');
    ?>
    <?= $form->field($model, 'name')->textInput() ?>
    <?= $form->field($model, 'timeout')->textInput() ?>
    <?= $form->field($model, 'task_file_id')->dropDownList($file_items) ?>
    <?= $form->field($model, 'task_host_id')->dropDownList($items) ?>
    <?= $form->field($model, 'is_active')->radioList(['1'=>'是','0'=>'否']) ?>
    <?= Tabs::widget([
        'items' => [
            [
                'label' => '程序启动',
                'content' => $this->render('boot'),
                'options' => ['id' => 'boot'],
                'active' => true
            ],
            [
                'label' => '每日',
                'content' => $this->render('daily'),
                'options' => ['id' => 'daily'],
            ],
            [
                'label' => '每周',
                'content' => $this->render('weekly'),
                'options' => ['id' => 'weekly'],
            ],
            [
                'label' => '每月',
                'content' => $this->render('monthly'),
                'options' => ['id' => 'monthly'],
            ]
        ]]);
    ?>

    <?= $form->field($model, 'triggers')->textArea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
