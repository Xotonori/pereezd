<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
<link rel="stylesheet" href="/css/style.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="//www.youtube.com/player_api"></script>
</head>
<body>
<header class="__header container-fluid">
    <!--Navbar-->
    <nav class="navbar row">
        <!-- Navbar brand -->
        <a class="col-10 logo" href="/">
            <img src="/images/header/logo.png" alt="логотип">
        </a>
        <div class="col-2 d-flex justify-content-end align-items-center __nav">
            <img class="_24-hours" src="/images/header/time-work.png" alt="24 часа">

            <!-- Collapse button -->
            <button class="navbar-toggler toggler-example burger-menu" type="button" data-toggle="collapse"
                    data-target="#main-menu" aria-controls="main-menu"
                    aria-expanded="false" aria-label="Toggle navigation">
                <img src="/images/header/burger-menu.png" alt="логотип">
            </button>
        </div>
        <!-- Collapsible content -->
        <div class="collapse navbar-collapse main-menu" id="main-menu">
            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link text-center" href="/about">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="/cars">Автопарк</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="/price">Цены</a>
                </li>

                <!--Services-menu--->
                <nav class="navbar">
                    <li class="nav-item navbar-toggler toggler-example services-menu w-100" data-toggle="collapse"
                        data-target="#services-menu" aria-controls="wrap-services-menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <a class="nav-link text-center" href="#">Услуги</a>
                    </li>
                    <div class="collapse navbar-collapse wrap-services-menu" id="services-menu">
                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">
                            <nav class="navbar">
                                <li class="nav-item navbar-toggler toggler-example relocation w-100"
                                    data-toggle="collapse" data-target="#relocation"
                                    aria-controls="wrap-relocation" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <a class="nav-link text-center" href="#">Переезды</a>
                                </li>
                                <div class="collapse navbar-collapse wrap-relocation" id="relocation">
                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/ofisnyy-pereezd">Переезд офиса</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/kvartirnyy-pereezd">Переезд квартиры</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-sklada">Переезд склада</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd_magazina">Переезд магазина</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-predpriyatiya">Переезд предприятия</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-zavoda">Переезд завода</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-vystavki">Переезд выставки</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-banka">Переезд банка</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-po-oblasti">Пререзды по области</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-mezhgorod">Междугородний переезд</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/dachnyy-pereezd">Дачный переезд</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-deshevo">Эконом переезд</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/vip-pereezd">VIP переезд</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <nav class="navbar">
                                <li class="nav-item navbar-toggler toggler-example loaders w-100"
                                    data-toggle="collapse" data-target="#loaders"
                                    aria-controls="wrap-loaders" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <a class="nav-link text-center" href="#">Грузчики</a>
                                </li>
                                <div class="collapse navbar-collapse wrap-loaders" id="loaders">
                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/loaders">Услуги грузчиков</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/sborka_i_razborka_mebeli">Сборка и разборка мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/razgruzka_fur/">Разгрузка фур</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perestanovka-mebeli">Перестановка мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/pereezd-s-gruzchikami">Переезд с грузчиками</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/kvartirniy_pereezd_s_gruzchikami">Квартирный переезд с грузчиками</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/utilizatsiya-musora">Вынос строительного мусора</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <nav class="navbar">
                                <li class="nav-item navbar-toggler toggler-example carrier w-100"
                                    data-toggle="collapse" data-target="#carrier"
                                    aria-controls="wrap-carrier" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <a class="nav-link text-center" href="#">Перевозчики</a>
                                </li>
                                <div class="collapse navbar-collapse wrap-carrier" id="carrier">
                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka-mebeli">Перевозка мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka-bytovoy-tekhniki">Перевозка бытовой техники</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka-veshej">Перевозка личных вещей</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/utilizatsiya-mebeli">Вывоз старой мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/gazel-dlya-pereezda">Заказать Газель</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/expedirovanie-gruzov">Экспедирование грузов</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/poputniy-gruz">Попутный груз</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka-divana">Перевозка дивана</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <nav class="navbar">
                                <li class="nav-item navbar-toggler toggler-example rigging w-100"
                                    data-toggle="collapse" data-target="#rigging"
                                    aria-controls="wrap-rigging" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <a class="nav-link text-center" href="#">Такелаж</a>
                                </li>
                                <div class="collapse navbar-collapse wrap-rigging" id="rigging">
                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/takelaj">Такелажные работы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka_pianino">Перевозка пианино</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka-royalya">Перевозка рояля</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka_seyfov">Перевозка сейфов</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/perevozka-bankomatov">Перевозка банкоматов</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <nav class="navbar">
                                <li class="nav-item navbar-toggler toggler-example storage w-100"
                                    data-toggle="collapse" data-target="#storage"
                                    aria-controls="wrap-storage" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <a class="nav-link text-center" href="#">Хранение</a>
                                </li>
                                <div class="collapse navbar-collapse wrap-storage" id="storage">
                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/vremennoe-hranenie">Временное хранение</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/vremennoe-hranenie-veschey">Хранение вещей</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/hranenie-mebeli">Хранение мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/hranenie-na-vremya-remonta">Хранение на время ремонта</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/hranenie-na-vremya-pereezda">Хранение на время переезда</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/skladi">Наши склады</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/individualnoe-hranenie">Индивидуальное хранение</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                            <nav class="navbar">
                                <li class="nav-item navbar-toggler toggler-example packaging w-100"
                                    data-toggle="collapse" data-target="#packaging"
                                    aria-controls="wrap-packaging" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <a class="nav-link text-center" href="#">Упаковка</a>
                                </li>
                                <div class="collapse navbar-collapse wrap-packaging" id="packaging">
                                    <!-- Links -->
                                    <ul class="navbar-nav mr-auto">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/upakovochnye-materialy">Упаковочные материалы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/streich-plenka">Стрейч пленка</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/vozdushno-puzyrchataya-plenka">Воздушно-пузырчатая пленка</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/kartonnye-korobki">Картонные коробки</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/skotch-upakovochnyj">Скотч упаковочный</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </ul>
                    </div>
                </nav>
                <!--/ .Services-menu--->

                <li class="nav-item">
                    <a class="nav-link text-center" href="/calculyator">Калькулятор</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="/zakaz">Онлайн заказ</a>
                </li>

                <!--Reviews--->
                <nav class="navbar">
                    <li class="nav-item navbar-toggler toggler-example reviews w-100"
                        data-toggle="collapse" data-target="#reviews"
                        aria-controls="wrap-reviews" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <a class="nav-link text-center" href="#">Отзывы</a>
                    </li>
                    <div class="collapse navbar-collapse wrap-reviews" id="reviews">
                        <!-- Links -->
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link text-center" href="/individual_reference">Отзывы от физ.лиц</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="/reference">Отзывы от компаний</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="/video_reference">Видео отзывы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="/turnir-azbuki-sporta">Благотворительность</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--/ .Reviews--->

                <li class="nav-item">
                    <a class="nav-link text-center" href="/contacts">Контакты</a>
                </li>
            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->

    <div class="container-fluid header-main-theme">


