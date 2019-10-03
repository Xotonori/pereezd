<div class="gradient"></div>
<img class="left-bush" data-src="/images/header/left-bush.png" alt="левый куст">
<img class="right-bush" data-src="/images/header/right-bush.png" alt="правый куст">
<div class="row justify-content-between">
    <a href="tel:+79618018881" class="phone text-left">+7 (961) 801-88-81</a>
    <nav class="navbar text-right">
        <div class="nav-item navbar-toggler toggler-example current-city"
             data-toggle="collapse" data-target="#current-city"
             aria-controls="wrap-current-city" aria-expanded="false"
             aria-label="Toggle navigation">
            <a class="nav-link text-left" href="#"><?php echo isset($city) ? $city : 'Санкт-Петербург'; ?></a>
            <img data-src="/images/header/city-triangle.png" alt="треугольник">
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