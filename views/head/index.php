<?php

/** @var yii\web\View $this */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = Yii::$app->name;


?>
<nav>
    <div class="program__add">
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
    <div class="modalwin creature">
        <?php $form = ActiveForm::begin(); ?>
            <?= $form->field($model, 'nameprogram');?>
            <?= $form->field($model, 'description')->textarea(['rows'=>7, 'maxlength' => 1024,]);?>
            <?= $form->field($model, 'subject');?>
            <div class="form-group">
                <?= Html::submitButton('Создать', ['class' => 'button',]); ?>
            </div>
        <?php ActiveForm::end() ?>

    </div>
</main>