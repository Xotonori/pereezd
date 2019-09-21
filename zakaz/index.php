<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part1.php'); ?>
<link rel="canonical" href="https://pereezdy-spb.ru/kvartirnyy-pereezd/"/>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part2.php'); ?>
<h1>Онлайн заказ</h1>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part3.php'); ?>

<main>
    <div class="container zakaz">
        <div class="row">
            <div class="col-12 paragraph">
                <p>Вы можете заказать переезд не только по телефону, но и с помощью онлайн-заявки. При заполнении полей рекомендуется указывать всю известную информацию о будущем переезде, поскольку это поможет нашим менеджерам точнее рассчитать сроки выполнения работы и общую стоимость услуг.</p>
                <p>Оформить заказ переезда на сайте можно в любое удобное для вас время. После отправки заполненной формы вам больше не придется ничего делать: получив заявку, наши специалисты сами свяжутся с вами. Такой заказ ни к чему вас не обязывает. После получения бесплатной консультации вы сможете решить, будете ли пользоваться нашими услугами.</p>
            </div>
            <div class="form-block mx-auto">
                <form action="" id="cforms2form" class="js-modal">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">ФИО</label>
                            <input type="text" class="form-control" name="name">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Телефон</label>
                            <input type="tel" class="form-control" name="tel" placeholder="+79210000000">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">E-mail</label>
                            <input type="tel" class="form-control" name="email">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Откуда переезжаем? город, ул, дом.</label>
                            <input type="tel" class="form-control" name="address_from">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Куда переезжаем? город, ул, дом.</label>
                            <input type="tel" class="form-control" name="address_to">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Описание перевозимых вещей</label>
                            <textarea class="form-control" rows="3" name="stuff"></textarea>
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Упаковываем мебель и орг. технику</label>
                            <input type="tel" class="form-control" name="wrap_up_furniture">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Откуда переезжаем какой этаж и наличие лифта</label>
                            <input type="tel" class="form-control" name="floor_from">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Куда переезжаем какой этаж и наличие лифта</label>
                            <input type="tel" class="form-control" name="floor_to">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Число, месяц и время переезда</label>
                            <input type="tel" class="form-control" name="date">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Расчет наличный или безналичный</label>
                            <input type="tel" class="form-control" name="cf2_field_11">
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Дополнительная информация</label>
                            <textarea class="form-control" rows="3" name="cf2_field_12"></textarea>
                            <small class="text-danger"></small>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Я принимаю <a href="/soglasie_na_sbor_dannih.pdf" target="blank">соглашение на обработку персональных данных</a></label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="send-button">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'footer' . DIRECTORY_SEPARATOR . 'footer.php'); ?>

