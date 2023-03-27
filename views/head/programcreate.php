<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <a href="<?= \yii\helpers\Url::to(['/head']) ?>">Вернуться к программам</a>
</nav>
<main>
    <div>

        <?php $form = ActiveForm::begin([
            'id' =>'programAddForm',
            'options'=>['method'=> 'get'],
        ]); ?>
        <?= $form->field($programtable, 'programname',);?>
        <?= $form->field($programtable, 'deskript',)->textarea(['rows'=>7,
            'maxlength' => 1024,
            'placeholder' => 'Введите описание программы. НЕ более 1024 символов']);?>


        <div class="form-group">
            <?= Html::submitButton('Создать', ['class' => 'button',]); ?>
        </div>
        <?php ActiveForm::end() ?>

    </div>


</main>