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
            <h1>Политика касаемо обработки персональных данных</h1>

            <h2>1. Общие положения</h2>
            <p>
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных.
            </p>
            <p>
                1.1. Важнейшей целью и условием осуществления своей деятельности
                Оператор считает соблюдение прав и свобод человека и гражданина при
                обработке его персональных данных, в том числе защиты прав на
                неприкосновенность частной жизни, личную и семейную тайну.
            </p>
            <p>
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>2. Основные понятия, используемые в Политике</h2>
            <ul>
                <li>
                    <strong>Веб-сайт</strong> — совокупность графических и
                    информационных материалов, а также программ для ЭВМ и баз данных,
                    обеспечивающих их доступность в сети интернет по сетевому адресу
                    <strong><?= $fullDomain ?></strong>.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к определенному или определяемому
                    Пользователю веб-сайта.
                </li>
                <li>
                    <strong>Обработка персональных данных</strong> — любое действие
                    (операция) или совокупность действий (операций), совершаемых с
                    использованием средств автоматизации или без использования таких
                    средств с персональными данными.
                </li>
                <li>
                    <strong>Безопасность персональных данных</strong> — защищенность
                    персональных данных от неправомерного или случайного доступа к
                    ним, уничтожения, изменения или блокирования в соответствии с GDPR.
                </li>
                <li>
                    <strong>Согласие</strong> — добровольное, информированное и
                    сознательное выражение воли Пользователя на обработку его
                    персональных данных.
                </li>
            </ul>

            <h2>3. Данные, которые мы обрабатываем</h2>
            <p>Оператор может обрабатывать следующие категории данных:</p>
            <ul>
                <li>
                    <strong>Персональные данные, предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Фамилия, имя, отчество;</li>
                        <li>Адрес электронной почты (Email);</li>
                        <li>Номера телефонов (валидация по стандартам Франции и ЕС).</li>
                    </ul>
                </li>
                <li>
                    <strong>Данные, собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Также на сайте происходит сбор и обработка обезличенных данных
                            о посетителях (в т.ч. файлов «cookie») с помощью сервисов
                            интернет-статистики (Google Аналитика и других). Эти данные включают 
                            IP-адрес, тип браузера и время доступа.
                        </li>
                    </ul>
                </li>
            </ul>
            <p>
                Вышеперечисленные данные далее по тексту Политики <strong><?= $domainTitle ?></strong> объединены общим
                понятием Персональные данные.
            </p>

            <h2>4. Цели обработки персональных данных</h2>
            <ul>
                <li>
                    Идентификация Пользователя для предоставления доступа к образовательным материалам
                    и сервисам платформы.
                </li>
                <li>
                    Установление с Пользователем обратной связи, включая направление
                    уведомлений, запросов, касающихся использования сайта, обработку
                    запросов и заявок на обучение.
                </li>
                <li>
                    Заключение и исполнение соглашений на предоставление экспертных и AI-услуг в ЕС.
                </li>
                <li>
                    Информирование Пользователя посредством отправки электронных писем. 
                    Пользователь всегда может отказаться от рассылок, направив
                    Оператору письмо на адрес
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    с пометкой «Отказ от уведомлений».
                </li>
                <li>
                    Улучшение качества работы сайта и глубокая аналитика его использования.
                </li>
            </ul>

            <h2>5. Правовые основания обработки персональных данных</h2>
            <p>
                Оператор обрабатывает персональные данные Пользователя только на
                законных основаниях:
            </p>
            <ul>
                <li>
                    При наличии добровольного согласия Пользователя, выраженного 
                    путем заполнения форм на сайте <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    При условии соблюдения требований регламента GDPR для пользователей из Франции и стран Европы.
                </li>
            </ul>

            <h2>6. Порядок сбора, хранения и безопасности данных</h2>
            <ul>
                <li>
                    Оператор принимает все возможные правовые, организационные и технические меры для
                    защиты данных от неправомерного доступа в соответствии с нормами французского законодательства и GDPR.
                </li>
                <li>
                    Персональные данные Пользователя никогда не будут переданы третьим лицам, 
                    за исключением случаев, предусмотренных законом (например, официальный запрос властей).
                </li>
                <li>
                    Срок обработки персональных данных является неограниченным, пока Пользователь не отзовет согласие.
                    Пользователь может в любой момент отозвать свое согласие, направив 
                    Оператору уведомление на email 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <h2>7. Заключительные положения</h2>
            <ul>
                <li>
                    Пользователь может получить разъяснения по любым вопросам, обратившись к 
                    Оператору по электронной почте 
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    Актуальная версия Политики <strong><?= $domainTitle ?></strong> находится в свободном 
                    доступе на сайте <strong><?= $fullDomain ?></strong>.
                </li>
            </ul>
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