<?php
$urlServer = $_SERVER['SERVER_NAME'];
$urlPage = $_SERVER['REQUEST_URI'];
//$urlProt = $_SERVER['HTTPS'];


$title = 'bimCraft';
$description = 'description';
$keywords = 'keywords';
?>
    <!DOCTYPE html>
<html lang="ru" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta name="robots" content="noindex, nofollow"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <?php
    switch ($urlPage) {
        case '/pages/policy/policy.php':
        case '/pages/policy/personal.php':
        case '/pages/policy/cookie.php':
            return '<meta name="robots" content="noindex, nofollow" />';
    }
    $protocol = ((!empty($urlProt) && $urlProt != 'off') || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
    $url = $protocol . $urlServer . $urlPage;
    $urlend = strrpos($url, '?', -1);
    if ($urlend != false) {
        $url = substr($url, 0, $urlend);
    }
    if (mb_substr($url, -1) == '/') {
        $url = substr($url, 0, -1);
    }
    echo '<link rel="canonical" href="' . $url . '"/>';
    ?>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <title><?=$title?></title>
    <meta name="description" content="<?=$description?>"/>
    <meta name="keywords" content="<?=$keywords?>"/>

    <meta property="og:image" content="<?='https://' . $_SERVER['HTTP_HOST'] . '/css/img/view-min.svg';?>"/>
    <meta property="og:title" content="<?=$title?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$urlServer?>"/>
    <meta property="og:description " content="<?=$description?>"/>
    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:site_name" content="<?=$title?>"/>

    <meta itemprop="name" content="<?=$title?>"/>
    <meta itemprop="description" content="<?=$description?>"/>
    <meta itemprop="image" content="<?='https://' . $_SERVER['HTTP_HOST'] . '/css/img/view-min.svg';?>"/>

    <link rel="icon" href="/css/img/favicon/favicon.svg"/>
    <link rel="apple-touch-icon" sizes="180x180" href="/css/img/favicon/apple-touch-icon-180x180.svg"/>
    <meta name="theme-color" content="#767067"/>

    <link rel="stylesheet" href="/css/style.css">

</head>
<body>
<div class="wrapper">
    <header class="header">
        <div class="header__left menu">
            <div class="menu__top">
                <img src="/css/img/svg/logo.svg" alt="Логотип" class="menu__logo">
            </div>
            <div class="menu__body">
                <div class="menu__wrap">
                    <a href="/modules/brif/" class="menu__link ic_m_brif"><span class="menu__text text">Бриф</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/incoming/" class="menu__link ic_m_mail"><span
                            class="menu__text text">Входящие</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/lk/" class="menu__link ic_m_lk"><span
                            class="menu__text text">Личный кабинет</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/mp/" class="menu__link ic_m_mp"><span
                            class="menu__text text">Менеджер проектов</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/gip/" class="menu__link ic_m_gip"><span class="menu__text text">ГИП</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/corr/" class="menu__link ic_m_corr"><span
                            class="menu__text text">Корреспонденция</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/treat/" class="menu__link ic_m_treat"><span
                            class="menu__text text">Договоры</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/statistic/" class="menu__link ic_m_stat"><span
                            class="menu__text text">Статистика</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/economic/" class="menu__link ic_m_econ"><span
                            class="menu__text text">Экономика</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/files/" class="menu__link ic_m_files"><span
                            class="menu__text text">Файлы</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/conf/" class="menu__link ic_m_conf"><span
                            class="menu__text text">Конференция</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/ts/" class="menu__link ic_m_ts"><span class="menu__text text">Техническая поддержка</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/backdoor/" class="menu__link ic_m_back"><span
                            class="menu__text text">Backdoor</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/desktop/" class="menu__link ic_m_desk"><span
                            class="menu__text text">Рабочий стол</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/log/" class="menu__link ic_m_log"><span
                            class="menu__text text">Лог действий</span></a>
                </div>
                <div class="menu__wrap">
                    <a href="/modules/generation/" class="menu__link ic_m_gen"><span class="menu__text text">Генерация ИУЛ</span></a>
                </div>
            </div>
            <div class="menu__bottom">
                <p class="menu__hide text">Свернуть окно</p>
                <p class="menu__arrow ic_m_arr"></p>
            </div>
            <p class="header__exit-mobile text">Выйти</p>
        </div>
        <div class="header__top">
            <div class="header__title">
                <h2 class="header__heading heading">Личный кабинет</h2>
            </div>
            <div class="header__main">
                <div class="header__size ic_pr_bar" data-da=".header__left,560,2">
                    <div class="header__pbar pr-bar">
                        <div class="pr-bar__line">55%</div>
                    </div>
                </div>
                <div class="header__status">
                    <p class="header__project smtext">Активный проект</p>
                    <p class="header__balance smtext ic_m_econ">Баланс 12&nbsp;600&nbsp;&#8381;</p>
                </div>
                <div class="header__settings" data-da=".header__left,560,3">
                    <p class="header__btn header__btn_color ic_color"></p>
                    <p class="header__btn header__btn_bright ic_bright"></p>
                    <p class="header__btn header__btn_notify ic_notify" data-da=".header__mobile,991.98,last">
                        <span class="header__count">5</span>
                    </p>
                    <p class="header__btn header__btn_brif ic_m_brif"></p>
                    <div class="header__drop"></div>
                </div>
                <div class="header__person" data-da=".header__title,1440,1">
                    <div class="header__photo"><img src="/uploads/units/{{Auth::user()->image}}" alt="Человек" class="header__img"></div>
                    <div class="header__info">
                        <p class="header__name smtext">{{Auth::user()->surname}} {{Auth::user()->getNameInitials()}}. {{Auth::user()->getPatronymicInitials()}}.</p>
                        <p class="header__company smtext">{{Auth::user()->id_company}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__mobile">
            <div class="header__burger">
                <div class="burger"><span class="burger__span"></span></div>
            </div>
            <div class="header__plus circle"><p class="circle__btn ic_close"></p></div>
            <div class="header__mobsettings mobsettings"></div>
        </div>
    </header>
    @yield('content')
</div>
<script src="{{asset('/js/script.js')}}"></script>
@yield('profile')
