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
    <div class="" id="">

        <?php $form = ActiveForm::begin([
            'id' =>'programAddForm',
        ]); ?>
        <?= $form->field($program, 'programname',);?>
        <?= $form->field($program, 'deskript',)->textarea(['rows'=>7,
            'maxlength' => 1024,
            'placeholder' => 'Введите описание программы. НЕ более 1024 символов']);?>

        <table>
            <tr>
                <th></th>
                <th>Предмет</th>
                <th>Знания</th>
                <th>Умения</th>
                <th>Навыки</th>
            </tr>
            <?php

            if(!$programSubjectList) {
                echo'У программы нет предметов, пожалуйста выберете необходимые';
                foreach ($subjectList as $sublist) { ?>
                <tr>
                    <td><input type="checkbox" value="<?= $sublist->id ?>"></td>
                    <td><?= $sublist->subjectname ?></td>
                    <td><?= $sublist->knowledge ?></td>
                    <td><?= $sublist->skill ?></td>
                    <td><?= $sublist->competency ?></td>
                </tr>


               <?php }
            }
            echo'<p>Список предметов:</p>';
            foreach ($programSubjectList as $sublist){
                ?>
                <tr>
                    <td><input type="checkbox" value="<?= $sublist->subjects->id ?>"></td>
                    <td><?= $sublist->subjects->subjectname ?></td>
                    <td><?= $sublist->subjects->knowledge ?></td>
                    <td><?= $sublist->subjects->skill ?></td>
                    <td><?= $sublist->subjects->competency ?><</td>
                </tr>


            <?php
                }

            ?>
        </table>


        <div class="form-group">
              <?= Html::submitButton('Изменить', ['class' => 'button',]); ?>
        </div>
        <?php ActiveForm::end(); ?>

    </div>





    <?php

    foreach ($subjectList as $sublist) { ?>

        <input type="checkbox" value="<?= $sublist->id ?>"><lable><?= $sublist->subjectname ?></lable><br>



    <?php }


            ?>

<inpit type="checkbox">пиво</inpit>
</main>