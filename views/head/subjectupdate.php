<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
    <a href="<?=\yii\helpers\Url::to(['/head/subjects'])?>">Назад</a>
</nav>
<main>
<?php
    $form = ActiveForm::begin([
        'id' => 'programAddForm',
    ]);?>
        <?= $form->field($subjects, 'subjectname')->input('text',['value'=>$subjects->subjectname,]) ?>
        <?= $form->field($subjects, 'knowledge')->textarea([
            'row'=>7,
            'maxlength' => 1024,
            'value'=>$subjects->knowledge,]) ?>
        <?= $form->field($subjects, 'skill')->textarea([
            'row'=>7,
            'maxlength' => 1024,
            'value'=>$subjects->skill,]) ?>
        <?= $form->field($subjects, 'competency')->textarea([
            'row'=>7,
            'maxlength' => 1024,
            'value'=>$subjects->competency,]) ?>
        <div class="form-group">
            <?= Html::submitButton('Изменить', ['class' => 'button',]); ?>
        </div>
    <?php ActiveForm::end(); ?>
</main>


