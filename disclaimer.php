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
            <h1>Отказ от ответственности (Дисклеймер)</h1>

            <p>
                <strong>Общая информация:</strong> Все материалы, курсы, статьи и сведения,
                опубликованные на платформе <strong><?= $domainTitle ?></strong>, носят исключительно
                информационно-ознакомительный характер. Они не являются и не должны
                рассматриваться как персональная инвестиционная рекомендация,
                профессиональный юридический или финансовый совет, публичная оферта или призыв к совершению
                каких-либо финансовых операций.
            </p>

            <p>
                <strong>Отсутствие гарантий:</strong> Команда <strong><?= $domainTitle ?></strong> не дает никаких гарантий
                относительно точности, полноты или актуальности представленной информации. 
                Любые упоминания потенциального карьерного роста, программ пассивного дохода или прошлых
                результатов наших студентов не гарантируют аналогичных результатов в будущем. 
                Индивидуальные итоги вашей деятельности зависят от множества факторов, включая рыночные условия во Франции и ЕС, ваш личный опыт и приложенные усилия, и могут существенно
                отличаться от приведенных примеров.
            </p>

            <p>
                <strong>Ограничение ответственности:</strong> Администрация сайта <strong><?= $fullDomain ?></strong>,
                его владельцы и аффилированные лица не несут ответственности за
                любые прямые или косвенные убытки, решения или действия,
                предпринятые вами на основе информации с этого ресурса. Вся
                ответственность за использование предложенных методологий, AI-инструментов и возможные последствия
                лежит исключительно на пользователе. Контент платформы <strong><?= $domainTitle ?></strong> собирается из
                источников, которые считаются надежными и актуальными на момент публикации.
            </p>

            <p>
                <strong>Предупреждение о рисках:</strong> Любая деятельность, направленная на
                изменение профессионального статуса или внедрение новых технологических решений, сопряжена с
                определенным уровнем риска. Перед принятием
                любыых важных стратегических решений мы настоятельно рекомендуем провести
                собственное исследование и проконсультироваться с квалифицированным
                независимым специалистом в соответствующей области.
            </p>

            <p>
                <strong>Подтверждение пользователя:</strong> Продолжая использовать
                сайт <strong><?= $domainTitle ?></strong>, вы подтверждаете, что вам исполнилось 18 лет, вы
                действуете по собственной воле, полностью осознаете и принимаете все
                упомянутые риски и условия данного отказа от ответственности.
            </p>

            <div class="pages-footer" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(0,0,0,0.05);">
                <p style="font-size: 0.9rem; opacity: 0.7;">Последнее обновление: Февраль 2026</p>
            </div>
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