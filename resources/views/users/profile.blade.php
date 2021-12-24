@extends('includes.header')
<?php
//$root_server = $_SERVER["DOCUMENT_ROOT"];
//include (public_path(). '/includes/header.blade.php');
?>
@section('content')
<div class="module lk">
    <div class="module__content lk__content">
        <form action="#" name="lkForm" id="lkForm" class="lk__form form">
{{--            <div class="lk__data">--}}
{{--                <div class="lk__person">--}}
{{--                    <div class="lk__photo"><img src="/uploads/units/1.png" alt="Пользователь" class="lk__img"></div>--}}
{{--                    <div class="lk__info">--}}
{{--                        <p class="lk__name text"><span class="lk__bold">Евдокимов</span> <br> Артем Дмитриевич</p>--}}
{{--                        <p class="lk__name-company text ic_m_treat">ООО “ГИС”</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="lk__inputs">--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">Фамилия</p>--}}
{{--                        <input type="text" name="surname" class="form__input lk__input onlyAlpha" placeholder="Евдокимов" maxlength="30">--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">Имя</p>--}}
{{--                        <input type="text" name="name" class="form__input lk__input onlyAlpha" placeholder="Артем" maxlength="30">--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">Отчество</p>--}}
{{--                        <input type="text" name="patron" class="form__input lk__input onlyAlpha" placeholder="Дмитриевич" maxlength="30">--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper lk__input-wrapper_big">--}}
{{--                        <p class="lk__label smtext">Компания</p>--}}
{{--                        <input type="text" name="company" class="form__input lk__input" placeholder="ООО “ГИС”" maxlength="150">--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">Страна</p>--}}
{{--                        <div class="form__input-wrapper ic_arr_d"><input type="text" name="country" class="form__input lk__input onlyAlpha" placeholder="Россия" maxlength="30"></div>--}}
{{--                        <div class="drop">--}}
{{--                            <p class="drop__item">Россия</p>--}}
{{--                            <p class="drop__item">Страна1</p>--}}
{{--                            <p class="drop__item">Страна2</p>--}}
{{--                            <p class="drop__item">Страна3</p>--}}
{{--                            <p class="drop__item">Страна4</p>--}}
{{--                            <p class="drop__item">Страна5</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">Город</p>--}}
{{--                        <div class="form__input-wrapper ic_arr_d"><input type="text" name="city" class="form__input lk__input onlyAlpha" placeholder="Тюмень" maxlength="30"></div>--}}
{{--                        <div class="drop">--}}
{{--                            <p class="drop__item">Тюмень</p>--}}
{{--                            <p class="drop__item">Город1</p>--}}
{{--                            <p class="drop__item">Город2</p>--}}
{{--                            <p class="drop__item">Город3</p>--}}
{{--                            <p class="drop__item">Город4</p>--}}
{{--                            <p class="drop__item">Город5</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">Телефон</p>--}}
{{--                        <input type="tel" name="phone" class="form__input lk__input" placeholder="+7 (999) 999-99-99" maxlength="17">--}}
{{--                    </div>--}}
{{--                    <div class="lk__input-wrapper">--}}
{{--                        <p class="lk__label smtext">E-mail</p>--}}
{{--                        <input type="email" name="mail" class="form__input lk__input" placeholder="example@gmail.com" maxlength="30">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="lk-btns form__btns">--}}
{{--                <input type="submit" value="Сохранить" class="form__btn lk-btns__submit btn smtext">--}}
{{--                <div class="form__cancel smtext cancel">Отменить</div>--}}
{{--            </div>--}}
        </form>
        <div class="lk__company">
            <p class="lk__title ic_portfel text">Компания</p>
            <div class="lk__table">
                <div class="lk__row">
                    <p class="lk__heading ic_units smtext">Штат</p>
                    <p class="lk__text smtext">15 сотрудников</p>
                </div>
                <div class="lk__row lk__row_sub">
                    <div class="lk__col">
                        <p class="lk__heading lk__heading_exp ic_m_econ smtext">Расходы</p>
                        <div class="lk__subcol">
                            <p class="lk__text lk__text_exp smtext">Разовые</p>
                            <p class="lk__text lk__text_exp smtext">Постоянные</p>
                        </div>
                    </div>
                    <div class="lk__col">
                        <p class="lk__text lk__text_num smtext">652&nbsp;000&nbsp;&#8381;</p>
                        <p class="lk__text lk__text_num smtext">600&nbsp;000&nbsp;&#8381;</p>
                        <p class="lk__text lk__text_num smtext">52&nbsp;000&nbsp;&#8381;</p>
                    </div>
                </div>
                <div class="lk__row">
                    <p class="lk__heading ic_m_treat smtext">Система налогообложения</p>
                    <p class="lk__text smtext">Упрощенная</p>
                </div>
                <div class="lk__row">
                    <p class="lk__heading ic_chbox smtext">Тендерное сопровождение</p>
                    <p class="lk__text smtext">Подключено</p>
                </div>
            </div>
        </div>
        <nav class="lk__nav nav-lk">
            <div class="nav-lk__item"><p class="nav-lk__text text ic_lock">Изменить пароль</p></div>
            <div class="nav-lk__item"><a href="#" class="nav-lk__link text ic_mob">Мобильное приложение</a></div>
            <div class="nav-lk__item"><p class="nav-lk__text text ic_user">Аккаунт</p></div>
            <div class="nav-lk__item"><p class="nav-lk__text text ic_c_mark">Подписки</p></div>
            <div class="nav-lk__item"><a href="/modules/lk/data-company/" class="nav-lk__link text ic_portfel">Данные компании</a></div>
        </nav>
    </div>
</div>
<?php include (public_path(). '/includes/footer.blade.php');?>
@endsection
@section('profile')
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            fetchprofile();


        function fetchprofile() {
            $.ajax({
                type: "GET",
                url: "fetchprofile",
                dataType: "json",
                success: function (response) {
                    $('#lkForm').html("");
                    $.each(response, function (key, item) {
                        $('#lkForm').append('<div class="lk__data">\
                            <div class="lk__person">\
                            <div class="lk__photo"><img src="/uploads/units/'+item.units+'" alt="Пользователь" class="lk__img"></div>\
                        <div class="lk__info">\
                            <p class="lk__name text"><span class="lk__bold">'+item.surname+'</span> <br>'+item.name+' '+item.patronymic+'</p>\
                            <p class="lk__name-company text ic_m_treat">'+item.id_company+'</p>\
                        </div>\
                    </div>\
                        <div class="lk__inputs">\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">Фамилия</p>\
                                <input type="text" name="surname" class="form__input lk__input onlyAlpha" placeholder="'+item.surname+'" maxlength="30">\
                            </div>\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">Имя</p>\
                                <input type="text" name="name" class="form__input lk__input onlyAlpha" placeholder="'+item.name+'" maxlength="30">\
                            </div>\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">Отчество</p>\
                                <input type="text" name="patron" class="form__input lk__input onlyAlpha" placeholder="'+item.patronymic+'" maxlength="30">\
                            </div>\
                            <div class="lk__input-wrapper lk__input-wrapper_big">\
                                <p class="lk__label smtext">Компания</p>\
                                <input type="text" name="company" class="form__input lk__input" placeholder="'+item.id_company+'”" maxlength="150">\
                            </div>\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">Страна</p>\
                                <div class="form__input-wrapper ic_arr_d"><input type="text" name="country" class="form__input lk__input onlyAlpha" placeholder="'+item.countries.title+'" maxlength="30"></div>\
                                <div id="drop_county" class="drop">\
                                </div>\
                            </div>\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">Город</p>\
                                <div class="form__input-wrapper ic_arr_d"><input type="text" name="city" class="form__input lk__input onlyAlpha" placeholder="'+item.cities.title+'" maxlength="30"></div>\
                                <div id="drop_city" class="drop">\
                                </div>\
                            </div>\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">Телефон</p>\
                                <input type="tel" name="phone" class="form__input lk__input" placeholder="'+item.phone+'" maxlength="17">\
                            </div>\
                            <div class="lk__input-wrapper">\
                                <p class="lk__label smtext">E-mail</p>\
                                <input type="email" name="mail" class="form__input lk__input" placeholder="'+item.email+'" maxlength="30">\
                            </div>\
                        </div>\
                    </div>\
                        <div class="lk-btns form__btns">\
                            <input type="submit" value="Сохранить" class="form__btn lk-btns__submit btn smtext">\
                                <div class="form__cancel smtext cancel">Отменить</div>\
                        </div>')
                        $.each(response.country, function (key, item) {
                            $('#drop_county').append('<p class="drop__item">'+item.title+'</p>');
                        });
                        $.each(response.city, function (key, item) {
                            $('#drop_city').append(' <p class="drop__item">'+item.title+'</p>');
                        });
                    });


                }
            });
        }
        });
    </script>
@endsection
