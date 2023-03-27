<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = Yii::$app->name;


?>

<nav>
    <a href="/?r=tutor">Вернуться</a>

        <a href="/web">На главную</a>

</nav>
<main>

    <sectio>
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'programid' )->dropDownList($program) ?>
            <?= $form->field($model, 'subjectid' )->dropDownList($subject)?>
            <?= $form->field($model, 'indikatorid' )->dropDownList($indikator)?>
            <?= $form->field($model, 'text' )->textarea(['rows'=>7,
                'maxlength' => 1024,
                'placeholder' => 'Введите описание программы. НЕ более 1024 символов']) ?>
            <?= $form->field($model, 'statusid')->hiddenInput(['value'=>'1'],);?>
        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'button',]); ?>
        </div>
        <?php ActiveForm::end();?>
    </sectio>
    <?php var_dump($model); ?>


</main>