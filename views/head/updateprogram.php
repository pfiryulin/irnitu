<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
    <a href="<?=\yii\helpers\Url::to(['head/subjectadd', 'id' => $program->id])?>">Добавить предметы</a>
    <a href="<?=\yii\helpers\Url::to(['head/programcard', 'id' => $program->id])?>">Назад</a>
</nav>



<main>
    <div class="" id="">

        <?php $form = ActiveForm::begin([
            'id' =>'programAddForm',
        ]); ?>
        <?= $form->field($program, 'programname',);?>
        <?= $form->field($program, 'deskript',)->textarea(['rows'=>7,
            'maxlength' => 1024,
            'placeholder' => 'Введите описание программы. НЕ более 1024 символов']);?>
        <div class="form-group">
              <?= Html::submitButton('Изменить', ['class' => 'button',]); ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>


</main>