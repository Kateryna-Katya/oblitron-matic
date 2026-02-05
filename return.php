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
            <h1>Политика возврата средств</h1>
            
            <h2>Условия для оформления возврата</h2>
            <p>
                Вы можете претендовать на полный или частичный возврат средств в
                следующих ситуациях:
            </p>
            <ul>
                <li>
                    <strong>Несоответствие программы описанию:</strong> Если содержание
                    предоставленных образовательных материалов или экспертных сессий существенно отличается от программы,
                    заявленной на сайте <strong><?= $domainTitle ?></strong> на момент покупки.
                </li>
                <li>
                    <strong>Технические неисправности с нашей стороны:</strong> При
                    возникновении критических технических проблем на платформе
                    <strong><?= $fullDomain ?></strong>, которые делают доступ к обучающим модулям или AI-инструментам невозможным и не были
                    устранены нашей командой в разумные сроки.
                </li>
                <li>
                    <strong>Отказ в течение «периода охлаждения»:</strong> Если вы
                    решили отказаться от участия в программе в течение 14 (четырнадцати) календарных
                    дней с момента оплаты, при условии, что вы еще не получили доступ
                    к значительному объему материалов (см. раздел «Исключения»).
                </li>
            </ul>

            <h2>Процедура запроса на возврат</h2>
            <p>
                Чтобы инициировать процедуру возврата на платформе <strong><?= $domainTitle ?></strong>, пожалуйста, выполните
                следующие шаги:
            </p>
            <ol class="custom-list">
                <li>
                    Составьте письмо и отправьте его на наш официальный email:
                    <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>.
                </li>
                <li>
                    В теме письма обязательно укажите: «Запрос на возврат средств».
                </li>
                <li>
                    В теле письма предоставьте полную информацию: ваше имя и фамилию,
                    email, который использовался при регистрации, и точное название выбранного курса или программы.
                </li>
                <li>
                    Четко и подробно опишите причину, по которой вы запрашиваете
                    возврат, со ссылкой на один из пунктов наших условий.
                </li>
                <li>
                    После получения письма наша служба поддержки рассмотрит ваш запрос
                    и свяжется с вами для предоставления дальнейших инструкций в течение 3-х рабочих дней.
                </li>
            </ol>

            <h2>Сроки и способ возврата</h2>
            <p>
                После одобрения вашего запроса, возврат денежных средств будет
                произведен в течение 7–14 рабочих дней. Средства будут возвращены
                тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                может зависеть от регламента работы вашего банка или платежной системы во <strong>Франции</strong> или стране вашего пребывания.
            </p>

            <h2>Исключения и ограничения</h2>
            <p>Возврат средств не может быть осуществлен, если:</p>
            <ul>
                <li>
                    Запрос подан по истечении 14 календарных дней с момента оплаты.
                </li>
                <li>
                    Вы уже изучили, просмотрели или скачали более 50% материалов программы, независимо
                    от времени, прошедшего с момента покупки.
                </li>
                <li>
                    Причиной невозможности пройти обучение являются технические
                    проблемы на стороне пользователя (например, проблемы с интернет-соединением, несовместимость ПО или браузера).
                </li>
                <li>
                    Были нарушены другие условия Пользовательского соглашения <strong><?= $domainTitle ?></strong> с вашей
                    стороны.
                </li>
            </ul>

            <h2>Изменения в политике</h2>
            <p>
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в настоящую
                Политику возврата в соответствии с законодательством ЕС. Актуальная версия всегда доступна на этой
                странице <strong><?= $fullDomain ?></strong>.
            </p>

            <h2>Свяжитесь с нами</h2>
            <p>
                По всем вопросам, связанным с возвратом средств или условиями
                обучения, пожалуйста, обращайтесь в нашу службу поддержки:
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