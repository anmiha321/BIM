@extends('includes.header')
<?php
//$root_server = $_SERVER["DOCUMENT_ROOT"];
//include (''.$root_server.'/includes/header.php');
?>
@section('content')
    <div class="module sa">
        <div class="module__content sa__content">
            <div class="new-user">
                <div class="new-user__content">
                    <div class="new-user__head module__head">
                        <p class="module__heading ic_add_p">Новый пользователь</p>
                    </div>
                    <form action="#" name="createUser" id="CreateForm" class="new-user__body form">
                        <div class="new-user__top">
                            <label for="photo-user-create" id="" class="new-user__add-photo add-photo">
                                <input type="file" name="image" id="photo-user-create" class="add-photo__input">
                                <img src="/css/img/svg/add_foto.svg" alt="" id="photo-user-show" class="add-photo__img">
                                <span class="add-photo__icon ic_photo"></span>
                            </label>
                            <div class="new-user__chbox">
                                <input type="checkbox" name="acssess_as" value="1" id="acssess_as" class="new-user__inp-chbox chios-inp">
                                <label for="acssess_as" class="new-user__label smtext chios-lab">Тестовый доступ к системе</label>
                            </div>
                        </div>
                        <div class="new-user__inputs">
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Фамилия</p>
                                <input type="text" name="surname" id="" class="form__input onlyAlpha" placeholder="Иванов" maxlength="30">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Имя</p>
                                <input type="text" name="name" id="" class="form__input onlyAlpha" placeholder="Артем" maxlength="30">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Отчество</p>
                                <input type="text" name="patronymic" id="" class="form__input onlyAlpha" placeholder="Дмитриевич" maxlength="30">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Название организации</p>
                                <input type="text" name="company" id="" class="form__input" placeholder="ИП Петров" maxlength="150">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">ИНН</p>
                                <input type="text" name="INN" id="" class="form__input numLength" placeholder="455216563" maxlength="12">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Телефон=логин</p>
                                <input type="tel" name="phone" id="" class="form__input" placeholder="+7 (999) 999-99-99" maxlength="17">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Роль</p>
                                <input type="text" name="role" id="" class="form__input" placeholder="Администратор" maxlength="30">
                            </div>
                        </div>
                        <div class="form__btns">
                            <input type="submit" value="Сохранить" id="add_user" class="new-user__submit form__btn btn smtext">
                            <div class="form__cancel smtext cancel">Отменить</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include(public_path() . '/includes/footer.blade.php');?>
@endsection
@section('new-user')
    <script>
        $('#photo-user-create').change(function(){

            let reader = new FileReader();

            reader.onload = (e) => {
                $('#photo-user-show').html("")
                $('#photo-user-show').attr('src', e.target.result);
                $(this).parent().css('border', 0);
            }

            reader.readAsDataURL(this.files[0]);

        });

        $(document).on('submit', '#CreateForm', function (e) {
            e.preventDefault();
            let CreateFormData = new FormData($('#CreateForm')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "POST",
                enctype: 'multipart/form-data',
                url: "{{ route('users.store') }}",
                data: CreateFormData,
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
                        alert('Пользователь создан успешно!')
                        document.location.href="users"
                    }
                }
            });
        });
    </script>
@endsection
