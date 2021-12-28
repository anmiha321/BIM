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
                    <form action="#" name="createUser" id="" class="new-user__body form">
                        <div class="new-user__top">
                            <label for="photo-user-create" id="" class="new-user__add-photo add-photo">
                                <input type="file" name="user_photo" id="photo-user-create" class="add-photo__input">
                                <span class="add-photo__span ic_add_f"></span>
                                <span class="add-photo__icon ic_photo"></span>
                            </label>
                            <div class="new-user__chbox">
                                <input type="checkbox" name="new_projects" id="new-projects" class="new-user__inp-chbox chios-inp"></input>
                                <label for="new-projects" class="new-user__label smtext chios-lab">Тестовый доступ к системе</label>
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
                                <input type="text" name="patron" id="" class="form__input onlyAlpha" placeholder="Дмитриевич" maxlength="30">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Название организации</p>
                                <input type="text" name="company" id="" class="form__input" placeholder="ИП Петров" maxlength="150">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">ИНН</p>
                                <input type="text" name="inn" id="" class="form__input numLength" placeholder="455216563" maxlength="12">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Телефон=логин</p>
                                <input type="tel" name="phone" id="" class="form__input" placeholder="+7 (999) 999-99-99" maxlength="17">
                            </div>
                            <div class="new-user__input-wrapper">
                                <p class="form__label smtext form__label">Роль</p>
                                <input type="text" name="role" id="" class="form__input onlyAlpha" placeholder="Администратор" maxlength="30">
                            </div>
                        </div>
                        <div class="form__btns">
                            <input type="submit" value="Сохранить" class="new-user__submit form__btn btn smtext">
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
            }

            reader.readAsDataURL(this.files[0]);

        });
    </script>
@endsection
