<?php

/** @var yii\web\View $this */

use app\models\Subjects;

$this->title = Yii::$app->name;


?>
<main>

    <h2><?= $program->programname; ?></h2>
    <a href="/web/?r=head">Вернуться к программам</a>
    <section class="subject__list">
        <article class="susubject__list-head item">
            <div>Предмет</div>
            <div>Знания</div>
            <div>Умения</div>
            <div>Навыки</div>
        </article>

        <?php
        if (isset($subid)){
            foreach ($subid as $sub ){?>
            <article class="susubject__list item">
                <div>

                    <?= $sub->subjects->subjectname; ?>

                </div>
                <div>
                    <?= $sub->subjects->knowledge; ?>
                    <div class="item__button button">
                        Редактировать
                    </div>
                </div>
                <div>
                    <?= $sub->subjects->skill;?>
                    <div class="item__button button">
                        Редактировать
                    </div>
                </div>
                <div>
                    <?= $sub->subjects->competency; ?>
                    <div class="item__button button">
                        Редактировать
                    </div>
                </div>
        </article>
      <?php
                }
            }
        else{
            echo "Предметы не назначены";
        }
        ?>
    </section>

<div class="modalwin">

</div>


</main>

