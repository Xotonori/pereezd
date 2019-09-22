<?php $city = 'Гатчино'; ?>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part1.php'); ?>
    <link rel="canonical" href="https://pereezdy-spb.ru/kvartirnyy-pereezd/"/>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part2.php'); ?>
    <img class="sofa" src="/images/header/sofa.png" alt="диван">
    <img class="man" src="/images/header/man.png" alt="грузчик">
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part3.php'); ?>
    <h1>Отзывы физических лиц</h1>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part4.php'); ?>
    <div class="container client-reviews">
        <div class="row">
            <div class="carousel-container mx-auto">
                <!--modal-review-1-->
                <div class="modal fade" id="review-1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="review-full-img">
                                    <img class="d-block" src="/images/client-reviews/otzyv_gbu.jpg" alt="Отзыв 1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/modal-review-1-->
                <div id="client-reviews" class="carousel slide mx-auto mt-4 mb-4">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block" src="/images/client-reviews/otzyv_gbu.jpg" alt="Отзыв 1" data-toggle="modal" data-target="#review-1">
                        </div>
                    </div>
                    <a class="_carousel-control carousel-control-prev" href="#client-reviews" role="button" data-slide="prev">
                        <img src="/images/left-arrow-type1.png" alt="стрелка влево">
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="_carousel-control carousel-control-next" href="#client-reviews" role="button" data-slide="next">
                        <img src="/images/right-arrow-type1.png" alt="стрелка вправо">
                        <span class="sr-only">Next</span>
                    </a>
                    <ol class="carousel-indicators mx-auto">
                        <li data-target="#client-reviews" data-slide-to="0" class="active"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'footer' . DIRECTORY_SEPARATOR . 'footer.php'); ?>