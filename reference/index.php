<?php $city = 'Гатчино'; ?>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part1.php'); ?>
    <link rel="canonical" href="https://pereezdy-spb.ru/kvartirnyy-pereezd/"/>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part2.php'); ?>
    <img class="sofa" src="/images/header/sofa.png" alt="диван">
    <img class="man" src="/images/header/man.png" alt="грузчик">
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part3.php'); ?>
    <h1>Отзывы клиентов</h1>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part4.php'); ?>
    <div class="container client-reviews">
        <div class="row">
            <div id="clients-reviews" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#clients-reviews" data-slide-to="0" class="active"></li>
                    <li data-target="#clients-reviews" data-slide-to="1"></li>
                    <li data-target="#clients-reviews" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block" src="/images/client-reviews/otzyv_gbu-150x150.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/images/client-reviews/otz5561-150x150.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block" src="/images/client-reviews/shag-150x150.jpg" alt="Second slide">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'footer' . DIRECTORY_SEPARATOR . 'footer.php'); ?>