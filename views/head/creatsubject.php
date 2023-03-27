<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
    <a href="<?=\yii\helpers\Url::to(['head/programcard', 'id' => $program->id])?>">Назад</a>
</nav>
<main>
    <?php
    $form = ActiveForm::begin([
        'id' => 'programAddForm',
    ]);?>
    <?= $form->field($model, 'subjectname')->input('text',) ?>
    <?= $form->field($model, 'knowledge')->textarea([
        'row'=>7,
        'maxlength' => 1024,
        'placeholder'=>'введите не более 1024 символов']) ?>
    <?= $form->field($model, 'skill')->textarea([
        'row'=>7,
        'maxlength' => 1024,
        'placeholder'=>'введите не более 1024 символов']) ?>
    <?= $form->field($model, 'competency')->textarea([
        'row'=>7,
        'maxlength' => 1024,
        'placeholder'=>'введите не более 1024 символов']) ?>
    <div class="form-group">
        <?= Html::submitButton('Изменить', ['class' => 'button',]); ?>
    </div>
    <?php ActiveForm::end(); ?>
</main>



