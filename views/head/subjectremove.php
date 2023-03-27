<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
    <a href="<?=\yii\helpers\Url::to(['head/subjectadd', 'id' => $program->id])?>">Добавить предметы</a>
    <a href="<?=\yii\helpers\Url::to(['head/subjectremove', 'id' => $program->id])?>">Удалить предметы</a>
    <a href="<?=\yii\helpers\Url::to(['head/programcard', 'id' => $program->id])?>">Назад</a>
</nav>

<main>

    <h2>Добавьте предметы в программу <?= $program->programname; ?></h2>





    <div>
        <?php $form = ActiveForm::begin([
            'id' =>'programAddForm',


        ]); ?>


        <?= $form->field($bundle, 'programid',)->hiddenInput(['value'=>$program->id],)->label(false,);?>
        <?= $form->field($bundle, 'subjectid',)->checkboxList($subject,['separator'=>'<br>'])->label(false);?>



        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'button',]); ?>
        </div>
        <?php ActiveForm::end() ?>


    </div>


</main>