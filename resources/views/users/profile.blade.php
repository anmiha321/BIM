@extends('includes.header')
<?php
//$root_server = $_SERVER["DOCUMENT_ROOT"];
//include (public_path(). '/includes/header.blade.php');
?>
@section('content')
    <div class="module lk">
        <div class="module__content lk__content" id="profile_box">
{{--            <form action="#" name="lkForm" id="lkForm" class="lk__form form">--}}
{{--                            <div class="lk__data">--}}
{{--                                <div class="lk__person">--}}
{{--                                    <div class="lk__photo"><img src="/uploads/units/1.png" alt="Пользователь" class="lk__img"></div>--}}
{{--                                    <div class="lk__info">--}}
{{--                                        <p class="lk__name text"><span class="lk__bold">Евдокимов</span> <br> Артем Дмитриевич</p>--}}
{{--                                        <p class="lk__name-company text ic_m_treat">ООО “ГИС”</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="lk__inputs">--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">Фамилия</p>--}}
{{--                                        <input type="text" name="surname" class="form__input lk__input onlyAlpha" placeholder="Евдокимов" maxlength="30">--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">Имя</p>--}}
{{--                                        <input type="text" name="name" class="form__input lk__input onlyAlpha" placeholder="Артем" maxlength="30">--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">Отчество</p>--}}
{{--                                        <input type="text" name="patron" class="form__input lk__input onlyAlpha" placeholder="Дмитриевич" maxlength="30">--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper lk__input-wrapper_big">--}}
{{--                                        <p class="lk__label smtext">Компания</p>--}}
{{--                                        <input type="text" name="company" class="form__input lk__input" placeholder="ООО “ГИС”" maxlength="150">--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">Страна</p>--}}
{{--                                        <div class="form__input-wrapper ic_arr_d"><input type="text" name="country" class="form__input lk__input onlyAlpha" placeholder="Россия" maxlength="30"></div>--}}
{{--                                        <div class="drop">--}}
{{--                                            <p class="drop__item">Россия</p>--}}
{{--                                            <p class="drop__item">Страна1</p>--}}
{{--                                            <p class="drop__item">Страна2</p>--}}
{{--                                            <p class="drop__item">Страна3</p>--}}
{{--                                            <p class="drop__item">Страна4</p>--}}
{{--                                            <p class="drop__item">Страна5</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">Город</p>--}}
{{--                                        <div class="form__input-wrapper ic_arr_d"><input type="text" name="city" class="form__input lk__input onlyAlpha" placeholder="Тюмень" maxlength="30"></div>--}}
{{--                                        <div class="drop">--}}
{{--                                            <p class="drop__item">Тюмень</p>--}}
{{--                                            <p class="drop__item">Город1</p>--}}
{{--                                            <p class="drop__item">Город2</p>--}}
{{--                                            <p class="drop__item">Город3</p>--}}
{{--                                            <p class="drop__item">Город4</p>--}}
{{--                                            <p class="drop__item">Город5</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">Телефон</p>--}}
{{--                                        <input type="tel" name="phone" class="form__input lk__input" placeholder="+7 (999) 999-99-99" maxlength="17">--}}
{{--                                    </div>--}}
{{--                                    <div class="lk__input-wrapper">--}}
{{--                                        <p class="lk__label smtext">E-mail</p>--}}
{{--                                        <input type="email" name="mail" class="form__input lk__input" placeholder="example@gmail.com" maxlength="30">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="lk-btns form__btns">--}}
{{--                                <input type="submit" value="Сохранить" class="form__btn lk-btns__submit btn smtext">--}}
{{--                                <div class="form__cancel smtext cancel">Отменить</div>--}}
{{--                            </div>--}}
{{--            </form>--}}
{{--            <div class="lk__company">--}}
{{--                <p class="lk__title ic_portfel text">Компания</p>--}}
{{--                <div class="lk__table">--}}
{{--                    <div class="lk__row">--}}
{{--                        <p class="lk__heading ic_units smtext">Штат</p>--}}
{{--                        <p class="lk__text smtext">15 сотрудников</p>--}}
{{--                    </div>--}}
{{--                    <div class="lk__row lk__row_sub">--}}
{{--                        <div class="lk__col">--}}
{{--                            <p class="lk__heading lk__heading_exp ic_m_econ smtext">Расходы</p>--}}
{{--                            <div class="lk__subcol">--}}
{{--                                <p class="lk__text lk__text_exp smtext">Разовые</p>--}}
{{--                                <p class="lk__text lk__text_exp smtext">Постоянные</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="lk__col">--}}
{{--                            <p class="lk__text lk__text_num smtext">652&nbsp;000&nbsp;&#8381;</p>--}}
{{--                            <p class="lk__text lk__text_num smtext">600&nbsp;000&nbsp;&#8381;</p>--}}
{{--                            <p class="lk__text lk__text_num smtext">52&nbsp;000&nbsp;&#8381;</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="lk__row">--}}
{{--                        <p class="lk__heading ic_m_treat smtext">Система налогообложения</p>--}}
{{--                        <p class="lk__text smtext">Упрощенная</p>--}}
{{--                    </div>--}}
{{--                    <div class="lk__row">--}}
{{--                        <p class="lk__heading ic_chbox smtext">Тендерное сопровождение</p>--}}
{{--                        <p class="lk__text smtext">Подключено</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <nav class="lk__nav nav-lk">--}}
{{--                <div class="nav-lk__item"><p class="nav-lk__text text ic_lock">Изменить пароль</p></div>--}}
{{--                <div class="nav-lk__item"><a href="#" class="nav-lk__link text ic_mob">Мобильное приложение</a></div>--}}
{{--                <div class="nav-lk__item"><p class="nav-lk__text text ic_user">Аккаунт</p></div>--}}
{{--                <div class="nav-lk__item"><p class="nav-lk__text text ic_c_mark">Подписки</p></div>--}}
{{--                <div class="nav-lk__item"><a href="{{route('data_company')}}" class="nav-lk__link text ic_portfel">Данные--}}
{{--                        компании</a></div>--}}
{{--            </nav>--}}
        </div>
    </div>
    <?php include(public_path() . '/includes/footer.blade.php');?>
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
                    success: function (data) {
                        $('#profile_box').html(data.profile);
                    }
                });
            }

            $(document).on('submit', '#lkForm', function (e) {
                e.preventDefault();
                var id = $('#id_edit').val();
                let EditFormData = new FormData($('#lkForm')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_profile/" + id,
                    data: EditFormData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            $('#update_msgList').html("");
                            $('#update_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_value) {
                                $('#update_msgList').append('<li>' + err_value +
                                    '</li>');
                            });
                            $('.update_student').text('Update');
                        } else {
                            alert('Данные обновленны успешно!')
                            $('#update_msgList').html("");

                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchprofile();
                        }
                    }
                });
            });
            $(document).on('submit', '#changePass', function (e) {
                e.preventDefault();
                var id = $('#id_edit').val();
                let EditFormData = new FormData($('#changePass')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_password_profile/" + id,
                    data: EditFormData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            $('#update_msgList').html("");
                            $('#update_msgList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_value) {
                                $('#update_msgList').append('<li>' + err_value +
                                    '</li>');
                            });
                            $('.update_student').text('Update');
                        } else {
                            $('#update_msgList').html("");

                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('#old_password').val('');
                            $('#password').val('');
                            $('#password_confirmation_edit-password').val('');
                            $('.modal').removeClass('active');
                            $('#popup-change-passw').removeClass('active');
                            fetchprofile();
                        }
                    }
                });

            });

            $(document).ready(function () {

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                    $.ajax({
                        type: "GET",
                        url: "fullinfo",
                        dataType: "json",
                        success: function (response) {
                            $('#popup-account__table').html("");
                            $.each(response, function (key, item) {
                                $('#popup-account__table').append('<div class="popup-account__row">\
                                    <p class="popup-account__left ic_user smtext">ФИО</p>\
                                <p class="popup-account__right smtext">' + item.surname + ' ' + item.name + ' ' + item.patronymic + '</p>\
                            </div>\
                                <div class="popup-account__row">\
                                    <p class="popup-account__left ic_mail smtext">E-mail</p>\
                                    <p class="popup-account__right smtext">' + item.email + '</p>\
                                </div>\
                                <div class="popup-account__row">\
                                    <p class="popup-account__left ic_call smtext">Телефон</p>\
                                    <p class="popup-account__right smtext">' + item.phone + '</p>\
                                </div>\
                                <div class="popup-account__row">\
                                    <p class="popup-account__left ic_earth smtext">Страна</p>\
                                    <p class="popup-account__right smtext">' + item.country + '</p>\
                                </div>\
                                <div class="popup-account__row">\
                                    <p class="popup-account__left ic_role smtext">Роль</p>\
                                    <p class="popup-account__right smtext">' + (item.role == 1 ? '<p class="popup-account__right smtext">Администратор</p>' : '<p class="popup-account__right smtext">Пользователь</p>') + '</p>\
                                </div>\
                                <div class="popup-account__row">\
                                    <p class="popup-account__left ic_cal smtext">Дата регистрации</p>\
                                    <p class="popup-account__right smtext">' + item.created_at + '</p>\
                                </div>\
                                <div class="popup-account__row">\
                                    <p class="popup-account__left ic_time smtext">Последняя активность</p>\
                                    <p class="popup-account__right smtext"><span class="popup-account__right-time">' + item.last_seen + '</p>\
                                </div>')
                            });


                        }
                    });

                });
        });
    </script>
@endsection
