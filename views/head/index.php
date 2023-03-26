<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <div class="program__add" id="programAdd">
        Создать программу
    </div>
    <div class="program__add">
        Создать предмет
    </div>
    <div class="program__add">
        Рекомендации
    </div>
    <div class="program__add">
        Замечания
    </div>

</nav>


<!--    <button id="btn-alert" class="btn btn-primary">Alert me!</button>-->

<main>

    <section class="program__list">
        <?php
            if(isset($program)){
                foreach ($program as $prog){?>
        <article class="program__list-head item">
            <div class="program__name">
                <a href="<?= \yii\helpers\Url::to(['head/programcard', 'id' => $prog->id]) ?>"><?=$prog->programname?></a>
            </div>
            <div class="program__description">
                <?= $prog->deskript ?>
            </div>
        </article>
                <?php }
            }
            else{
                echo "У вас нет учебных программ";
            }
        ?>


    </section>
    <div class="modalwin creature" id="programAddWin">
        <div class="close" id="closeWin">
            Закрыть
        </div>
        <?php $form = ActiveForm::begin([
                'id' =>'programAddForm',
        ]); ?>
            <?= $form->field($programtable, 'programname',);?>
            <?= $form->field($programtable, 'deskript',)->textarea(['rows'=>7,
                'maxlength' => 1024,
                'placeholder' => 'Введите описание программы. НЕ более 1024 символов']);?>
            <div class="form-group">
                <?= Html::submitButton('Создать', ['class' => 'button',]); ?>
            </div>

        <?php ActiveForm::end() ?>
        <?php
            if(Yii::$app->session->hasFlash('success')){?>
                <div class="modalwin--message">
                    <?= Yii::$app->session->getFlash('success');?>
                </div>

           <?php }
        ?>

    </div>
</main>
