<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>

<nav>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['/supervisor']) ?>">Назад</a>
    </div>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['/supervisor/remarks']) ?>">Замечания</a>
    </div>
</nav>
<main>
    <section>

        <?php $form = ActiveForm::begin([
            'id' =>'programAddForm',


        ]); ?>


        <?= $form->field($model, 'programid',)->dropDownList($program,['id', 'programname']);?>
        <?= $form->field($model, 'subjectid',)->dropDownList($subject,['id', 'subjectname']);?>
        <?= $form->field($model, 'text',)->textarea([
                'row'=>7,
            'maxlength'=>1024,
            'placeholder'=>'введите не более 1024 символов',
            ]);?>



        <div class="form-group">
            <?= Html::submitButton('Отправить', ['class' => 'button',]); ?>
        </div>
        <?php ActiveForm::end() ?>

    </section>
</main>