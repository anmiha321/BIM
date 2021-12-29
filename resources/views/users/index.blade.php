@extends('includes.header')
<?php
//$root_server = $_SERVER["DOCUMENT_ROOT"];
//include (''.$root_server.'/includes/header.php');
?>
@section('content')
    <div class="module sa">
        <div class="module__content sa__content">
            <div class="sa__head">
                <form action="#" class="sa__filters form">
                    <div class="sa__filter">
                        <div class="sa__input-wrapper form__input-wrapper ic_search"><input data-search type="text" name="fio_id" id="" class="sa__input form__input" placeholder="Поиск по ФИО или ID"></div>
                        <div class="sa__drop drop">
                            <p class="sa__drop-item drop__item">Петров Сергей<span class="sa__drop-span">id 787877889</span></p>
                            <p class="sa__drop-item drop__item">Савельев Николай<span class="sa__drop-span">id 787877889</span></p>
                            <p class="sa__drop-item drop__item">Савельев Николай<span class="sa__drop-span">id 787877889</span></p>
                        </div>
                    </div>
                    <div class="sa__filter">
                        <div class="sa__input-wrapper form__input-wrapper ic_search"><input data-search type="text" name="inn_tel" id="" class="sa__input form__input" placeholder="Поиск по ИНН или телефону"></div>
                        <div class="sa__drop drop">
                            <p class="sa__drop-item drop__item">+7 (999) 999-99-99</p>
                            <p class="sa__drop-item drop__item">+7 (999) 999-99-99</p>
                            <p class="sa__drop-item drop__item">+7 (000) 999-99-90</p>
                            <p class="sa__drop-item drop__item">589315452</p>
                        </div>
                    </div>
                    <div class="sa__filter">
                        <div class="sa__input-wrapper form__input-wrapper ic_arr_d"><input type="text" name="status" id="" class="sa__input form__input" placeholder="Сортировка по статусу"></div>
                        <div class="sa__drop drop">
                            <p class="sa__drop-item drop__item">Активный</p>
                            <p class="sa__drop-item drop__item">Архивный</p>
                        </div>
                    </div>
                </form>
                <a href="{{route('new-user')}}" class="sa__btn ic_add_p"><span class="sa__btn-span">Создать пользователя</span></a>
            </div>
            <div class="sa__main block">
                <div class="sa__tbody">
                    <div class="sa__cell sa__cell_id"><p class="sa__text text">ID</p></div>
                    <div class="sa__cell sa__cell_photo"><p class="sa__text text">Фото</p></div>
                    <div class="sa__cell sa__cell_fio"><p class="sa__text text">ФИО</p></div>
                    <div class="sa__cell sa__cell_status"><p class="sa__text text">Статус</p></div>
                    <div class="sa__cell sa__cell_create"><p class="sa__text text">Дата создания</p></div>
                    <div class="sa__cell sa__cell_inn"><p class="sa__text text">ИНН Организации <br> Название орг</p></div>
                    <div class="sa__cell sa__cell_login"><p class="sa__text text">Логин (телефон)</p></div>
                    <div class="sa__cell sa__cell_test"><p class="sa__text text">Тестовый доступ</p></div>
                    <div class="sa__cell sa__cell_auth"><p class="sa__text text">Дата/время <br> активности</p></div>
                    <div class="sa__cell sa__cell_control"><p class="sa__text text">Управление</p></div>
                    <div class="sa__cell sa__cell_ch-pass"></div>
                </div>
                <div id="users">
{{--                <div class="sa__row">--}}
{{--                    <div class="sa__cell sa__cell_id"><p class="sa__text text">0000001</p></div>--}}
{{--                    <div class="sa__cell sa__cell_photo"><div class="sa__photo"><img src="/uploads/units/2.png" alt="Пользователь" class="sa__img"></div></div>--}}
{{--                    <div class="sa__cell sa__cell_fio"><p class="sa__text text">Иванов Иван Иванович</p></div>--}}
{{--                    <div class="sa__cell sa__cell_status">--}}
{{--                        <p class="sa__text text ic_arr_d">Активный</p>--}}
{{--                        <div class="drop">--}}
{{--                            <p class="drop__item">Активный</p>--}}
{{--                            <p class="drop__item">Архивный</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="sa__cell sa__cell_create"><p class="sa__text text">01.01.2021</p></div>--}}
{{--                    <div class="sa__cell sa__cell_inn"><p class="sa__text text">7701215046 <br> ООО «ГИС»</p></div>--}}
{{--                    <div class="sa__cell sa__cell_login"><p class="sa__text text">8-999-888-77-66</p></div>--}}
{{--                    <div class="sa__cell sa__cell_test"><p class="sa__text text">Да</p></div>--}}
{{--                    <div class="sa__cell sa__cell_auth"><p class="sa__text text">02.10.2021 в 10:42</p></div>--}}
{{--                    <div class="sa__cell sa__cell_control"><p class="sa__text text ic_edit">Редактировать</p></div>--}}
{{--                    <div class="sa__cell sa__cell_ch-pass"><p class="sa__text text ic_lock">Изменить пароль</p></div>--}}
{{--                </div>--}}
{{--                <div class="sa__row">--}}
{{--                    <div class="sa__cell sa__cell_id"><p class="sa__text text">0000002</p></div>--}}
{{--                    <div class="sa__cell sa__cell_photo"><div class="sa__photo"><img src="/uploads/units/2.png" alt="Пользователь" class="sa__img"></div></div>--}}
{{--                    <div class="sa__cell sa__cell_fio"><p class="sa__text text">Иванов Иван Иванович</p></div>--}}
{{--                    <div class="sa__cell sa__cell_status">--}}
{{--                        <p class="sa__text text ic_arr_d">Активный</p>--}}
{{--                        <div class="drop">--}}
{{--                            <p class="drop__item">Активный</p>--}}
{{--                            <p class="drop__item">Архивный</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="sa__cell sa__cell_create"><p class="sa__text text">01.01.2021</p></div>--}}
{{--                    <div class="sa__cell sa__cell_inn"><p class="sa__text text">7701215046 <br> ООО «ГИС»</p></div>--}}
{{--                    <div class="sa__cell sa__cell_login"><p class="sa__text text">8-999-888-77-66</p></div>--}}
{{--                    <div class="sa__cell sa__cell_test"><p class="sa__text text">Да</p></div>--}}
{{--                    <div class="sa__cell sa__cell_auth"><p class="sa__text text">02.10.2021 в 10:42</p></div>--}}
{{--                    <div class="sa__cell sa__cell_control"><p class="sa__text text ic_edit">Редактировать</p></div>--}}
{{--                    <div class="sa__cell sa__cell_ch-pass"><p class="sa__text text ic_lock">Изменить пароль</p></div>--}}
{{--                </div>--}}
                </div>
            </div>
        </div>
    </div>
    <?php include(public_path() . '/includes/footer.blade.php');?>
@endsection
@section('users')
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            fetchusers();

            function fetchusers(query = '') {
                $.ajax({
                    type: "GET",
                    data: {query: query},
                    url: "search",
                    dataType: "json",
                    success: function (data) {
                        $('#users').html(data.users);
                    }
                });
            }

            $(document).on('keyup', '#search', function () {
                var query = $(this).val();
                fetchusers(query);
            });


            $(document).on('click', '#edit_pass', function (e) {
                e.preventDefault();
                var user_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/edit_user/" + user_id,
                    success: function (response) {
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('.modal').modal('hide');
                        } else {
                            $('#user_id').val(user_id);
                        }

                    }
                });
                $('.popup__close').find('input').val('');
            });

            $(document).on('click', '#edit_user', function (e) {
                e.preventDefault();
                var user_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/edit_user/" + user_id,
                    success: function (response) {
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('.modal').modal('hide');
                        } else {
                            $('#edit_user_id').val(user_id);
                            $('#edit_user_image').attr("src", '/uploads/units/' + response.user.image);
                            $('#surname_edit').val(response.user.surname);
                            $('#name_edit').val(response.user.name);
                            $('#patronymic_edit').val(response.user.patronymic);
                            $('#emai_edit').val(response.user.email);
                            $('#phone_edit').val(response.user.phone);
                            $('#expirience_edit').val(response.user.experience);
                        }

                    }
                });
                $('.popup__close').find('input').val('');
            });

            $(document).on('submit', '#saChangePass', function (e) {
                e.preventDefault();
                var id = $('#user_id').val();
                let UpdateFormData = new FormData($('#saChangePass')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_password/" + id,
                    data: UpdateFormData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // console.log(response);
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
                            $('#saChangePass').find('input').val('');
                            alert('Пароль изменен успешно!')
                            $('.modal').removeClass('active');
                            $('#popup-sa-ch-pass').removeClass('active');
                            $('#change_password_save').val('Сохранить');
                            fetchusers();
                        }
                    }
                });
            });

            $(document).on('submit', '#popupInfoUnit', function (e) {
                e.preventDefault();
                var id = $('#edit_user_id').val();
                let UpdateFormData = new FormData($('#popupInfoUnit')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_user/" + id,
                    data: UpdateFormData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // console.log(response);
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
                            $('.update_student').text('Update');
                            $('.modal').removeClass('active');
                            $('#popup-info-unit').removeClass('active');
                            fetchusers();
                        }
                    }
                });
            });
        });
    </script>
@endsection
