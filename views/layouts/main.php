<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\PublicAsset;
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<nav class="navbar main-menu navbar-default">
    <div class="container">
        <div class="menu-content">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="public/images/logo.jpg" alt=""></a>
            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav text-uppercase">
                    <li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Главная</a>

                    </li>
                </ul>
                <div class="i_con">
                    <ul class="nav navbar-nav text-uppercase">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="<?= Url::toRoute(['auth/login'])?>">Войти</a></li>
                            <li><a href="<?= Url::toRoute(['auth/signup'])?>">Регистрация</a></li>
                        <?php else: ?>
                            <?= Html::beginForm(['/auth/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->name . ')',
                                ['class' => 'btn btn-link logout', 'style'=>"padding-top:10px;"]
                            )
                            . Html::endForm() ?>
                        <?php endif;?>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
    </div>
    <!-- /.container-fluid -->
</nav>


<?= $content ?>


<footer class="footer-widget-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <aside class="footer-widget">
                    <div class="about-img"><img src="/public/images/logo2.png" alt=""></div>
                    <div class="about-content">Блог-платформа для ведения онлайн дневников.
                    </div>
                    <div class="address">
                        <h4 class="text-uppercase">Контакты</h4>

                        <p>Город Казань, Кремлёвская 35</p>

                        <p>Телефон: +79586233340</p>

                    </div>
                </aside>
            </div>

            <div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Отзывы</h3>

                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!--Indicator-->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Здесь расположены отзывы о сайте.</p>
                                    </div>
                                    <div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <!--<div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>CEO, ReadyTheme</h4>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="single-review">
                                    <div class="review-text">
                                        <p>Отзыв.</p>
                                    </div>
                                    <!--<div class="author-id">
                                        <img src="/public/images/author.png" alt="">

                                        <div class="author-text">
                                            <h4>Sophia</h4>

                                            <h4>CEO, ReadyTheme</h4>-->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </aside>
            </div>
            <!--<div class="col-md-4">
                <aside class="footer-widget">
                    <h3 class="widget-title text-uppercase">Пост</h3>


                    <div class="custom-post">
                        <div>
                            <a href="#"><img src="/public/images/footer-img.png" alt=""></a>
                        </div>
                        <div>
                            <a href="#" class="text-uppercase">Заголовок</a>
                            <span class="p-date">14 May 2020</span>
                        </div>
                    </div>
                </aside>
            </div>-->
        </div>
    </div>
    <!--<div class="footer-copy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">&copy; 2015 <a href="#">Treasure PRO, </a> Built with <i
                                class="fa fa-heart"></i> by <a href="#">Rahim</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
</footer>
<!-- js files -->
<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.stickit.min.js"></script>
<script type="text/javascript" src="assets/js/menu.js"></script>
<script type="text/javascript" src="assets/js/scripts.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
