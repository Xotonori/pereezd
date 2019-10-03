<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part1.php'); ?>
<meta name="description" itemprop="description" content="Калькулятор стоимости услуг по переезду от компании Переезд Без Хлопот в Санкт-Петербурге"/>
<meta name="keywords" itemprop="keywords" content="" />
<title>Калькулятор переезда</title>

<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part2.php'); ?>
<!--<img class="sofa" src="/images/header/sofa.png" alt="диван">-->
<!--<img class="man" src="/images/header/man.png" alt="грузчик">-->
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part3.php'); ?>
<h1>Калькулятор переезда</h1>
<?php include_once  ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header' . DIRECTORY_SEPARATOR . 'header-part4.php'); ?>

<script type='text/javascript' src='https://pereezdy-spb.ru/wp-includes/js/jquery/jquery.js?ver=1.11.2'></script>
<main class="calculyator">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="_header-3 text-center"><span class="important">Калькулятор</span> переезда</h2>
                <div class="calculator-box entry-content">
                    <div id="wrapper">
                        <div class="toggle-menu"><span></span><span></span><span></span></div>
                        <div id="header">
                            <div class="paperm">
                                <div class="shadbg"></div>
                                <div class="dbg">
                                    <div class="mcont calculator clearfix">
                                        <div class="col col1">
                                            <div class="titol fleft w160">
                                                <div class="number">1</div>
                                                <p>Выбор автомобиля</p></div>
                                            <div class="clear"></div>
                                            <p><label style="float: left; margin-right: 15px; margin-left: 10px;"> <b>Выберите автомобиль</b> <select id="avto" tabindex="2" style="width: 290px;" class="chzn-select avto_select" data-placeholder="Порядок"><option cost_mkad="16" hour="3" cost="450" tonaj="1.5 тонны" pic="/calc/img/prev_3_price.png" value="8">Газель-фургон</option><option cost_mkad="20" hour="4" cost="500" tonaj="1.5 тонны" pic="/calc/img/prev_next_price.png" value="11">Газель NEXT</option><option cost_mkad="18" hour="5" cost="550" tonaj="2.5 тонны" pic="/calc/img/prev_5_price.png" value="4">Газель удлиненная</option><option cost_mkad="26" hour="5" cost="800" tonaj="5 тонн" pic="/calc/img/prev_7_price.png" value="7">Mercedes с гидролопатой</option><option cost_mkad="26" hour="6" cost="850" tonaj="5 тонн" pic="/calc/img/prev_16_price.png" value="9">Mercedes с металлической будкой</option><option cost_mkad="30" hour="7" cost="900" tonaj="10 тонн" pic="/calc/img/prev_man_price.png" value="10">MAN с металлической будкой</option></select> </label></p>
                                            <div class="avto-cont"><img src="/images/calc/prev_3_price.png" alt="Выбранная машина для перевозки"></div>
                                            <table>
                                                <tbody><tr>
                                                    <td><label style="margin-right: 26px; float: left; margin-left: 10px;margin-top:15px"><b>Время работы</b><span class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" id="avto_time" min="3" style="width: 40px; margin-left: 24px;" value="3" class="inp-txt check only_int" type="text"> </span><span class="smallio"> ч. + 1ч. подача</span></label> <label style="margin-left: 20px;margin-top:15px"><b>Выезд за КАД</b> <span class="inp-incr"><a class="up"></a><a class="down"></a> <input id="avto_mkad" min="0" style="width: 58px; margin-left: 19px;" value="0" class="inp-txt check only_int" type="text"> </span></label><label style="margin-right: 123px; float: left; margin-left: 10px;display:none"><b>Количество</b> <span class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" id="avto_count" min="0" style="width: 40px; margin-left: 35px;display:none" value="1" class="inp-txt check only_int" type="text"> </span> </label><label style="display:none"><b>Пропуск в центр</b> <input disabled="disabled" id="avto_center" type="checkbox"> </label> </td>
                                                </tr>
                                                </tbody></table></div>
                                        <div class="col col2 human-bg">
                                            <div class="titol fleft w150">
                                                <div class="number">2</div>
                                                <p>Услуги грузчиков</p></div>
                                            <div class="clear"></div>
                                            <p><label style="float: left; margin-right: 122px; margin-left: 10px;"><b>Кол. грузчиков</b> <span style="margin-left: 23px;" class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" cost="350" id="man_count" min="0" style="width: 40px;" value="0" class="inp-txt check only_int" type="text"> </span> </label> <label><b>Время работы</b> <span class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" id="man_time" min="4" style="width: 40px; margin-left: 10px;" value="4" class="inp-txt check only_int" type="text"> </span> ч. </label></p></div>
                                        <div class="col col5 human-bg">
                                            <div style="margin-bottom: 33px;" class="titol titol3">
                                                <div class="number">3</div>
                                                <p>Упаковочный материал</p></div>
                                            <p><label style="float: left; margin-right: 95px; margin-left: 10px;"><b>Коробки</b> <span style="margin-left: 60px;" class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" cost="70" id="pack_box" min="0" style="width: 40px;" value="0" class="inp-txt check only_int" type="text"> </span> шт.</label> <label><b>Возд.-пуз. пленка</b> <span class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" cost="375" id="pack_plenka" min="0" style="width: 40px;" value="0" class="inp-txt check only_int" type="text"> </span> рул.(1,5*10м)</label> <label style="float: left; margin-right: 111px; margin-left: 10px;"><b>Скотч </b> <span style="margin-left: 73px;" class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" cost="50" id="scotch" min="0" style="width: 40px;" value="0" class="inp-txt check only_int" type="text"> </span> шт.</label> <label><b>Стрейч-пленка</b> <span class="inp-incr"><a class="up"></a><a class="down"></a> <input readonly="readonly" cost="350" id="streich" min="0" style="width: 40px;" value="0" class="inp-txt check only_int" type="text"> </span>рулон </label></p></div>
                                        <p></p>
                                        <div class="col col3">
                                            <div class="titol fleft w150">
                                                <div class="number">4</div>
                                                <p>Итого</p></div>
                                            <div class="clear"></div>
                                            <p style="margin-left: 10px;"><b id="itogo_avto">Газель-фургон 1.5 тонны 1 шт.</b> на <span id="itogo_avto_time">3</span> ч.<span id="itogo_avto_mkad"></span><span id="itogo_avto_center"></span></p>
                                            <p style="margin-left: 10px;"><b>Грузчики <span id="itogo_man_count">0</span> чел. </b>на <span id="itogo_man_time">4</span> ч.</p>
                                            <p style="margin-left: 10px;"><b>Упаковочный материал</b> коробки: <span id="itogo_pack_box">0</span> шт. &nbsp;&nbsp;&nbsp; в/п пленка: <span id="itogo_pack_plenka">0</span> рул.&nbsp;&nbsp;&nbsp;  скотч: <span id="itogo_scotch">0</span> шт. &nbsp;&nbsp;&nbsp; стрейч-пленка: <span id="itogo_streich">0</span> рул.</p>
                                            <p style="margin-top: 15px; width: 200px; float: left; margin-left: 10px;" class="big-price cufon"><span id="itogo">1800</span> руб.</p>
                                            <p><!--<button class="bbutt submitt" style="float: left;" _mce_style="float: left;">ЗАКАЗАТЬ ПЕРЕЕЗД</button> <button class="clr-butt" title="Очистить"></button>--></p></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p><!-- #header--></p>
                    <p>&nbsp;</p>
                    <p><!-- #wrapper --></p>
                    <div id="tmp" style="display: none;"></div>
                    <p><script type="text/javascript"></script><br>
                        <script type="text/javascript">
                            // <![CDATA[$(".chzn-select").chosen(); // ]]&gt;
                        </script></p>
                    <p></p><p></p>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="/js/calc.js"></script>
<?php include_once ($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'footer' . DIRECTORY_SEPARATOR . 'footer.php'); ?>

