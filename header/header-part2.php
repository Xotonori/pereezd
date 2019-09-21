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
        <div class="col-2 d-flex justify-content-end align-items-center">
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
                    <a class="nav-link text-center" href="#">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Автопарк</a>
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
                                            <a class="nav-link text-center" href="#">Переезд офиса</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="/kvartirnyy-pereezd">Переезд квартиры</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд склада</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд магазина</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд предприятия</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд завода</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд выставки</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд банка</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Пререзды по области</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Междугородний переезд</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Дачный переезд</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Эконом переезд</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">VIP переезд</a>
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
                                            <a class="nav-link text-center" href="#">Услуги грузчиков</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Сборка и разборка мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Разгрузка фур</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перестановка мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Переезд с грузчиками</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Квартирный переезд с грузчиками</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Вынос строительного мусора</a>
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
                                            <a class="nav-link text-center" href="#">Перевозка мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка бытовой техники</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка личных вещей</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Вывоз старой мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Заказать Газель</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Экспедирование грузов</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Попутный груз</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка дивана</a>
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
                                            <a class="nav-link text-center" href="#">Такелажные работы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка пианино</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка рояля</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка сейфов</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Перевозка банкоматов</a>
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
                                            <a class="nav-link text-center" href="#">Временное хранение</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Хранение вещей</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Хранение мебели</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Хранение на время ремонта</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Хранение на время переезда</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Наши склады</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Индивидуальное хранение</a>
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
                                            <a class="nav-link text-center" href="#">Упаковочные материалы</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Стрейч пленка</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Воздушно-пузырчатая пленка</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Картонные коробки</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="#">Скотч упаковочный</a>
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
                                <a class="nav-link text-center" href="#">Отзывы от физ.лиц</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="#">Отзывы от компаний</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="#">Видео отзывы</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-center" href="#">Благотворительность</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!--/ .Reviews--->

                <li class="nav-item">
                    <a class="nav-link text-center" href="#">Контакты</a>
                </li>
            </ul>
            <!-- Links -->
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->

    <div class="container-fluid header-main-theme">
        <img class="sofa" src="/images/header/sofa.png" alt="диван">
        <div class="gradient"></div>
        <img class="left-bush" src="/images/header/left-bush.png" alt="левый куст">
        <img class="right-bush" src="/images/header/right-bush.png" alt="правый куст">
        <img class="man" src="/images/header/man.png" alt="грузчик">
        <div class="row justify-content-between">
            <a href="tel:+79618018881" class="phone text-left">+7 (961) 801-88-81</a>
            <nav class="navbar text-right">
                <div class="nav-item navbar-toggler toggler-example current-city"
                     data-toggle="collapse" data-target="#current-city"
                     aria-controls="wrap-current-city" aria-expanded="false"
                     aria-label="Toggle navigation">
                    <a class="nav-link text-left" href="#"><?php echo $city ?: 'Санкт-Петербург'; ?></a>
                    <img src="/images/header/city-triangle.png" alt="треугольник">
                </div>
                <div class="collapse navbar-collapse wrap-current-city" id="current-city">
                    <!-- Links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/">Санкт-Петербург</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/vsevolgsk">Всеволжск</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/gatchina">Гатчина</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/kolpino">Колпино</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/krasnoe-selo">Красное село</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/lomonosov">Ломоносов</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/pavlovsk">Павловск</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/petergof">Петергоф</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/pushkin">Пушкин</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-left" href="/sestroreck">Сестрорецк</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
