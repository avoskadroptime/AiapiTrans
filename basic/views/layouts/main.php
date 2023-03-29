<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header >
    <div class="navbar">
        <?php  NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.svg', ['class' => 'img-class', 'style' => 'height: 50px;']) . 'Aiapi Trans',
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'wrapper  navbar-expand-md navbar-light fixed-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => 'Главная', 'url' => ['/site/index']],
                ['label' => 'О компании', 'url' => ['/site/about']],
                ['label' => 'Услуги', 'url' => ['/site/services']],
                ['label' => 'Документы', 'url' => ['/site/documents']],
                ['label' => 'Контакты', 'url' => ['/site/contact']],
            ],
        ]);
        ?></div>
    <div class="contacts">
        <div class="phone_numb">+ 7 (800) 555-38-5</div>
        <div class="mail">Aiapi_trans@gmail.com</div>
    </div>
</header>


<main role="main" class="">
    <div class="intro <?=Yii::$app->controller->action->id?>">
        <div class="head wrapper">
            <h1 class="head_h1">Международная транспортировка грузов</h1>
            <p class="head_txt">Европа, Китай, СНГ и многие другие направления</p>
            <a class="button head_butt" href='#'>Узнать услуги</a>
        </div>

    </div>
    <div class="pere1"></div>
    <div >
        <div class="">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        </div>
        <?= $content ?>
    </div>

</main>

<footer class="">

    <div class="footer_info wrapper">
        <div class="Foo_Left">
            <h2 class="FooH2">Остались вопросы?</h2>
            <div class="FooTxt">Отправьте заявку, и наш оператор скоро вам перезвонит</div>

            <form class="footer_form" action="#">
                <div class="form1str">
                    <div class="form-group">
                        <input type="text" class="formName form-cont" id="name" required>
                        <label for="name">Имя</label>
                    </div>
                    <div class="form-group">
                        <input type="text" class="formPhone form-cont" id="email" required>
                        <label for="email">Телефон</label>
                    </div>
                </div>

                <div class="form-group">
                    <textarea class="form2str form-cont" id="txt" ></textarea>
                    <label for="txt">Сообщение</label>
                </div>
                <button type="submit" class="formButt button" href="#">Отправить</button>
            </form>
        </div>
        <div class="Foo_Right">
            <div class="footer_plane"><?= Html::img('@web/images/PLANE.png') ?></div>
            <div class="footer_nav">
                <ul >
                    <li><a href="../site/index.php">Главная</a></li>
                    <li><a href="../site/about.php">О компании</a></li>
                    <li><a href="../site/services.php">Услуги</a></li>
                    <li><a href="../site/documents.php">Документы</a></li>
                    <li><a href="../site/contact.php">Контакты</a></li>
                </ul>
            </div>
            <div class="Foo_contacts">
                <p>+ 7 (800) 555-38-5</p>
                <p style="font-size: 15px">Aiapi_trans@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
        <div class="wrapper">
            <div class="BF_txt">© 2023 Международная транспортно-логистическая компания <b>AIAPI TRANS</b></div>
            <div>В этом сайте использованы изображения от<b> @freepik, @frimufilms, @aleksandarlittlewolf, @onlyyouqj </b> из сайта Freepik и от <b>Andy Li</b> из сайта Unsplash </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
