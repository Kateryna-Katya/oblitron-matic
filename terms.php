<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $domainTitle ?> — Инновации на пальцах
    </title>
    <link rel="icon" href="img/favicon.svg" type="image/svg+xml">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/lucide@latest"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>

            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#about" class="nav__link">О платформе</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#tech" class="nav__link">Технологии</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--header">Связаться</a>

            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

<main>
    <section class="pages">
        <div class="container">
            <h1>Условия использования</h1>

            <p>
                Добро пожаловать на сайт <strong><?= $domainTitle ?></strong>! Настоящие Условия использования
                (далее — «Условия» или «Соглашение») представляют собой юридически
                обязывающий договор между вами (далее — «Пользователь») и <strong><?= $domainTitle ?></strong>
                (далее — «Компания», «мы», «нас»). Пожалуйста, внимательно
                ознакомьтесь с ними. Используя наш сайт и любые связанные с ним
                услуги, вы подтверждаете свое полное и безоговорочное согласие с
                данными Условиями. Если вы не согласны, вы должны немедленно
                прекратить использование сайта.
            </p>

            <h2>1. Предмет Соглашения</h2>
            <p>
                Компания предоставляет Пользователю доступ к использованию сайта
                <strong><?= $fullDomain ?></strong> и его функционала, включая, но не ограничиваясь: доступ к
                инновационным образовательным материалам, курсам, экспертным консультациям и другим инструментам 
                профессионального развития (далее — «Услуги»). Настоящее Соглашение регулирует все аспекты
                взаимодействия Пользователя с платформой.
            </p>

            <h2>2. Обязанности и права Пользователя</h2>
            <p>
                Вы обязуетесь использовать сайт исключительно в законных и личных
                некоммерческих целях. При использовании платформы <strong><?= $domainTitle ?></strong>
                <strong>запрещается</strong>:
            </p>
            <ul>
                <li>
                    Публиковать, передавать или распространять любую информацию,
                    которая является незаконной, вредоносной, клеветнической,
                    нарушает авторские права или разжигает ненависть.
                </li>
                <li>
                    Предпринимать любые действия, которые могут нарушить нормальную
                    работу сайта, его безопасность или привести к перегрузке
                    цифровой инфраструктуры <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Использовать автоматизированные скрипты (ботов) для сбора
                    информации или иного взаимодействия с сайтом без нашего
                    предварительного письменного разрешения.
                </li>
                <li>
                    Выдавать себя за другое лицо или предоставлять недостоверную
                    информацию о себе при регистрации на курсы или консультации.
                </li>
            </ul>

            <h2>3. Интеллектуальная собственность</h2>
            <p>
                Весь контент, размещенный на сайте <strong><?= $fullDomain ?></strong>, включая тексты, графику,
                изображения, видео, логотипы и программный код (далее — «Контент»), является объектом интеллектуальной
                собственности Компании или ее партнеров. Вам предоставляется ограниченная
                лицензия на доступ и использование Контента в личных целях для профессионального развития. 
                Любое копирование, воспроизведение или распространение Контента без предварительного 
                письменного разрешения правообладателя строго запрещено.
            </p>

            <h2>4. Ограничение ответственности и отказ от гарантий</h2>
            <p>
                Услуги и все материалы на сайте предоставляются по принципу «как
                есть» (as is). Мы не даем никаких гарантий, что сайт будет работать бесперебойно, 
                без ошибок или что его контент является абсолютно точным в контексте динамически 
                меняющегося рынка во Франции и странах ЕС.
            </p>
            <p>
                Компания не несет ответственности за любые прямые или косвенные
                убытки, которые могут возникнуть у Пользователя в результате использования 
                или невозможности использования платформы <strong><?= $domainTitle ?></strong>. 
                Это также относится к любому контенту сторонних ресурсов, ссылки на которые 
                могут быть размещены на нашем сайте.
            </p>

            <h2>5. Изменения в Условиях использования</h2>
            <p>
                Мы оставляем за собой право в любое время изменять или дополнять настоящие Условия. 
                Все изменения вступают в силу с момента их публикации на этой странице. 
                Ваше дальнейшее использование сайта <strong><?= $fullDomain ?></strong> после внесения 
                изменений означает ваше автоматическое согласие с новой редакцией Условий.
            </p>

            <h2>6. Разрешение споров</h2>
            <p>
                Все споры и разногласия стороны будут стремиться разрешить путем конструктивных переговоров.
                В случае если согласие не будет достигнуто, спор подлежит рассмотрению в соответствии 
                с действующим законодательством по месту регистрации Компании во <strong>Франции</strong>.
            </p>

            <h2>7. Контактная информация</h2>
            <p>
                Если у вас возникли вопросы, связанные с настоящими Условиями,
                пожалуйста, свяжитесь с нами по электронной почте:
                <br><br>
                Email: <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a><br>
                Телефон: <a href="tel:+33189480983">+33 1 89 48 09 83</a>
            </p>
        </div>
    </section>
</main>


   <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                <p class="footer__desc">Платформа года для тех, кто хочет приручить технологии будущего уже сегодня.</p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#about">О платформе</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#tech">Технологии</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <div class="footer__contact-item">
                    <i data-lucide="phone" class="icon-sm"></i>
                    <span>+33 1 89 48 09 83</span>
                </div>
                <div class="footer__contact-item">
                    <i data-lucide="mail" class="icon-sm"></i>
                    <span>hello@
                        <?= $fullDomain ?>
                    </span>
                </div>
                <div class="footer__contact-item">
                    <i data-lucide="map-pin" class="icon-sm"></i>
                    <span>24 Rue du Faubourg Saint-Honoré, 75008 Paris, France</span>
                </div>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно только в странах ЕС.
            </p>
        </div>
    </footer>
<div class="mobile-overlay">
    <nav class="mobile-nav">
        <ul class="mobile-nav__list">
            <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
            <li><a href="./#about" class="mobile-nav__link">О платформе</a></li>
            <li><a href="./#courses" class="mobile-nav__link">Курсы</a></li>
            <li><a href="./#tech" class="mobile-nav__link">Технологии</a></li>
            <li><a href="./#faq" class="mobile-nav__link">FAQ</a></li>
            <li><a href="./#contact" class="btn btn--primary">Начать сейчас</a></li>
        </ul>
    </nav>
</div>

<div id="cookie-popup" class="cookie-popup">
    <div class="cookie-popup__content">
        <i data-lucide="cookie" class="cookie-popup__icon"></i>
        <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie
                политике</a>.</p>
        <button id="cookie-accept" class="btn btn--header">Принять</button>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="script.js"></script>
</body>

</html>