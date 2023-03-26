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
        <a href="">Предметы</a>
    </div>
    <div class="program__add">
        <a href="<?= \yii\helpers\Url::to(['head/recommendations']) ?>"> Рекомендации  </a> <span><?= $recomendlen; ?> </span>
    </div>
    <div class="program__add">
        Замечания
    </div>
    <div>
        <a href="/web">На главную</a>
    </div>

</nav>

<div class="modalwin--message">
    <?=
        Yii::$app->session->getFlash('success');

    ?>
</div>


<main>
    <section class="program__list">
        <table>
            <?php
            if(isset($program)){
            foreach ($program as $prog){?>
            <tr>
                <td><a href="<?= \yii\helpers\Url::to(['head/programcard', 'id' => $prog->id]) ?>"><?=$prog->programname?></a></td>
                <td><?= $prog->deskript ?></td>
                <td>
                    <div class="item__button button">
                        Редактировать
                    </div>
                </td>
            </tr>
            <?php }
            }
            else{
            echo "У вас нет учебных программ";
            }
            ?>
        </table>


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

    </div>

    <div class="modalwin creature" id="subjectAddWin">
        <div class="close" id="closeWin">
            Закрыть
        </div>

    </div>
</main>
