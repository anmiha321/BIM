@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="ru" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta name="robots" content="noindex, nofollow" />
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>bimCraft</title>
    <meta name="description" content="description" />
    <meta name ="keywords" content="keywords" />
    <meta itemprop="name" content="bimCraft" />
    <meta itemprop="description" content="description" />
    <meta itemprop="image" content="{{asset('/css/img/view-min.png')}}"/>
    <link rel="icon" href="{{asset('/css/img/favicon/favicon.png')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/css/img/favicon/apple-touch-icon-180x180.png')}}"/>
    <meta name="theme-color" content="#767067" />
    <link rel="stylesheet"  href="{{asset('/css/style.css?_v=3a32e84984eac6bd87a747fae4115ae0')}}">
</head>
<body>
<div class="auth">
    <div class="auth__body">
        <div class="auth__left ibg">
            <img src="{{asset('/css/img/auth_fon.svg')}}" alt="Щит" title="Щит" class="auth__img">
        </div>
        <div class="auth__main">
            <div class="auth__content">
                <form method="POST" class="auth__form" action="{{ route('login') }}">
                    @csrf
                    <h1 class="auth__title title">Добро пожаловать <br> в систему.... (сформулировать) </h1>
                    <p class="auth__subtitle text">Для продолжения работы введите логин и пароль</p>
                    <div class="auth__inputs">
                        <label for="phone" class="auth__label"><span class="auth__label-span">Логин</span>
                            <input type="tel" name="phone" id="phone" class="auth__input lgtext" value="{{ old('phone') }}" placeholder="+7 (999) 999-99-99"></label>
                        <label for="password" class="auth__label">
                            <span class="auth__label-span">Пароль</span>
                            <div class="auth__input-wrapper">
                                <input type="password" name="password" id="password" class="auth__input lgtext"  placeholder="Пароль" required autocomplete="current-password">
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <p class="auth__icon ic_hide"></p>
                            </div>
                        </label>
                    </div>
                    <div class="auth__help">
                        <div class="auth__chbox chbox">
                            <input type="checkbox" name="remember" id="remember" class="chbox__input" {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="chbox__label">Запомнить меня</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="auth__forgot text" href="{{ route('password.request') }}">
                                {{ __('Не помню пароль') }}
                            </a>
                        @endif
                    </div>
                    <input type="submit" value="Войти в систему" class="auth__btn btn lgtext">
                </form>
                <footer class="auth__footer">
                    <div class="auth__ww">
                        <a href="https://ww.net.ru/" target="_blank" class="logoww"><img src="{{asset('/css/img/svg/a_logo.svg')}}" alt="ww" class="logoww__img">Система разработана в веб-студии WW</a>
                    </div>
                    <div class="auth__contacts">
                        <p class="auth__support">Техническая поддеркжа:</p>
                        <a href="tel:+73452514155" class="auth__link ic_a_call">+7 (3452) 51-41-55</a>
                        <a href="mailto:support@ww.net.ru" class="auth__link ic_a_mail">support@ww.net.ru</a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>
<div class="modal">
    <div id="popup-rec-pas" class="popup popup-auth">
        <div class="popup-auth__content">
            <div class="popup-auth__top">
                <p class="popup-auth__title title">Восстановление пароля</p>
                <p class="popup__close ic_close"></p>
            </div>
            <div class="">
                <p class="popup-auth__msg lgtext">В течении 30 секунд на Ваш телефон поступит звонок с номера 900. Пожалуйста, введите последние 4 цифры звонившего номера</p>
                <form action="#" name="rec_pass" class="popup-auth__form">
                    <div class="popup-auth__recovery">
                        <label for="four-num" class="popup-auth__label"><span class="popup-auth__label-span lgtext">Введите последние 4 цифры номера</span>
                            <input type="number" name="four_numbers" id="four-num" class="popup-auth__input lgtext" placeholder=""></label>
                        <input type="submit" value="Подтвердить" class="popup-auth__submit btn lgtext">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="popup-confirm-phone" class="popup popup-auth">
        <div class="popup-auth__content">
            <div class="popup-auth__top">
                <p class="popup-auth__title title">Подтверждение номера телефона</p>
                <p class="popup__close ic_close"></p>
            </div>
            <div class="">
                <p class="popup-auth__msg lgtext">В течении 30 секунд на Ваш телефон поступит звонок с номера 900. Пожалуйста, введите последние 4 цифры звонившего номера</p>
                <form action="#" name="rec_pass" class="popup-auth__form">
                    <div class="popup-auth__recovery">
                        <label for="four-num1" class="popup-auth__label"><span class="popup-auth__label-span lgtext">Введите последние 4 цифры номера</span>
                            <input type="number" name="four_numbers" id="four-num1" class="popup-auth__input lgtext" placeholder=""></label>
                        <input type="submit" value="Подтвердить" class="popup-auth__submit btn lgtext">
                    </div>
                    <div class="popup-auth__help">
                        <p class="popup-auth__err text">Неверный код?</p>
                        <p class="popup-auth__again text">Позвонить еще раз</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="popup-cong-rec-pass" class="popup popup-auth">
        <div class="popup-auth__content">
            <div class="popup-auth__top">
                <p class="popup-auth__title title">Поздравляем!</p>
                <p class="popup__close ic_close"></p>
            </div>
            <div class="">
                <p class="popup-auth__msg lgtext">Ваш пароль успешно изменен!</p>
                <div class="popup-auth__btn btn lgtext">Вернуться на страницу авторизации</div>
            </div>
        </div>
    </div>
    <div id="popup-cong-reg" class="popup popup-auth">
        <div class="popup-auth__content">
            <div class="popup-auth__top">
                <p class="popup-auth__title title">Поздравляем!</p>
                <p class="popup__close ic_close"></p>
            </div>
            <div class="">
                <p class="popup-auth__msg lgtext">Ваш запрос на регистрацию успешно отправлен. <br> Ожидайте смс-сообщения с данными для входа. <br><br>
                    Внимание! Ожижание сообщение может занимать от нескольких часов до 2-х дней</p>
                <div class="popup-auth__btn btn lgtext">Вернуться на страницу авторизации</div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('/js/script.js?_v=3a32e84984eac6bd87a747fae4115ae0')}}"></script>
</body>
</html>
@endsection
