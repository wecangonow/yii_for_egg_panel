<?php
use yii\helpers\ArrayHelper;

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use app\models\Hosts;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Schedules */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="schedules-form">

	<?php $form = ActiveForm::begin([
            'layout' => 'horizontal',
            'fieldConfig' => [
                'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
                'horizontalCssClasses' => [
                    'label' => 'col-sm-4',
                    'offset' => 'col-sm-offset-4',
                    'wrapper' => 'col-sm-8',
                    'error' => '',
                    'hint' => '',
                ],
            ],
        ]);
    $items = ArrayHelper::map(Hosts::find()->asArray()->all(),'id','url');
    ?>

    <?//= $form->field($model, 'task_host_id')->textInput() ?>

    <?= $form->field($model, 'timeout')->textInput() ?>
    <?= $form->field($model, 'task_host_id')->dropDownList($items) ?>
    <?= $form->field($model, 'is_active')->radioList(['1'=>'是','0'=>'否']) ?>

    <?= $form->field($model, 'triggers')->textInput(['maxlength' => 1000]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
