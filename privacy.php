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
            <h1>Политика конфиденциальности</h1>

            <p>
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                образовательных услуг и доступа к платформе, так и для других взаимодействий в электронном
                формате, а также при участии клиентов в экспертных программах и акциях, оказывая
                техническую поддержку и информационное сопровождение.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения Политики конфиденциальности. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц, которые имеют свои
                собственные положения. В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за содержание и соблюдение
                конфиденциальности любой сторонней компании. Предоставляя свои данные, вы даете полное согласие
                на их обработку способами, предусмотренными настоящей Политикой.
            </p>

            <h2>Порядок сбора, хранения и уничтожения персональных данных</h2>
            <p>
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к образовательной платформе,
                участия в практических сессиях, получения аналитических отчетов по внедрению AI и других инноваций. Для
                предотвращения утечки данных мы используем полный комплекс мер информационной безопасности в соответствии с GDPR.
            </p>

            <p>
                Максимальный срок хранения персональных данных составляет 75
                лет с даты получения информации. В остальных случаях компания хранит данные клиента до
                завершения своей деятельности или до момента официального отзыва согласия пользователем.
            </p>

            <p>
                Уничтожение, обезличивание или блокирование данных осуществляется для исключения возможности
                их дальнейшей обработки, если цель сбора была достигнута или по запросу клиента.
            </p>

            <p>
                <strong><?= $domainTitle ?></strong> собирает данные в следующих категориях:
            </p>

            <h2>Техническая информация:</h2>
            <ul>
                <li>время доступа и IP-адрес;</li>
                <li>источники обращения на интернет-ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>Интернет-страницы, посещаемые пользователем;</li>
                <li>просмотры информационных и рекламных блоков;</li>
                <li>иная техническая информация, предоставляемая браузером;</li>
                <li>номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <p>
                При регистрации или заполнении форм обратной связи мы собираем информацию, 
                необходимую для аутентификации и персонализации услуг:
            </p>
            <ul>
                <li>имя пользователя;</li>
                <li>e-mail и номер телефона для оперативной связи;</li>
            </ul>

            <h2>Информация о действиях пользователя:</h2>
            <ul>
                <li>информация о соглашениях и контрактах между клиентом и <strong><?= $domainTitle ?></strong>;</li>
                <li>данные о запросах, отправленных через формы на сайте;</li>
                <li>сведения о полученных консультациях и пройденных программах обучения;</li>
                <li>произведенные платежи и иная финансовая информация, предусмотренная действующим законодательством ЕС.</li>
            </ul>

            <h2>Цели обработки персональных данных клиентов:</h2>
            <ul>
                <li>предоставление образовательных услуг и доступа к аналитической платформе;</li>
                <li>учет пожеланий при разработке новых технологических решений и учебных модулей;</li>
                <li>информирование об акциях, скидках и новых материалах через e-mail;</li>
                <li>обеспечение качественной экспертной поддержки пользователей.</li>
            </ul>

            <h2>
                <strong><?= $domainTitle ?></strong> не предоставляет данные клиентов третьим лицам, за исключением:
            </h2>
            <ul>
                <li>получения прямого согласия пользователя на такую передачу;</li>
                <li>по требованию компетентных органов Франции в соответствии с законодательством;</li>
                <li>случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2>Использование файлов cookie и точечных маркеров</h2>
            <p>
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Франция), 
                чтобы сделать использование <strong><?= $fullDomain ?></strong> максимально эффективным. Точечные маркеры 
                используются для статистического анализа посещений. Вы можете в любое время отключить Cookies в настройках своего браузера.
            </p>

            <h2>Права пользователя в отношении персональных данных</h2>
            <p>
                Если вы хотите отредактировать свои данные или полностью прекратить их обработку в соответствии с нормами GDPR, 
                пожалуйста, свяжитесь с командой <strong><?= $domainTitle ?></strong> по адресу: 
                <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
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