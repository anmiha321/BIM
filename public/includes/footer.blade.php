<footer class="footer">

</footer>
<div class="modal">
    <div id="popup-add-doc" class="popup popup-add-doc">
        <div class="popup-add-doc__content">
            <div class="popup-add-doc__head"><p data-close class="popup-add-doc__close popup__close ic_close"></p></div>
            <div class="popup-add-doc__main">
                <form action="#" class="popup-add-doc__body">
                    <p class="popup-add-doc__icon ic_add_f"></p>
                    <p class="popup-add-doc__title title">Перетащите изображение сюда</p>
                    <p class="popup-add-doc__text text">или нажмите на кнопку</p>
                    <label class="popup-add-doc__btn">
                        <input type="file" name="add_doc" id="" class="popup-add-doc__file">
                        Выбрать файл
                    </label>
                </form>
            </div>
        </div>
    </div>
    <div id="popup-arch-units" class="popup popup-arch-units">
    </div>
    <div id="popup-info-unit" class="popup popup-info-unit">
        <div class="popup-arch-units__content">
            <div class="popup__head">
                <p class="popup__title lgtext ic_m_lk">Информация о сотруднике</p>
                <p data-close class="popup-arch-units__close popup__close ic_close"></p>
            </div>
            <div class="popup__main">
                <form action="#" name="popupInfoUnit" id="user_edit_form" class="popup__form form">
                    <div class="popup__photo">
                        <img src="" alt="Пользователь" id="photo-worker-show_edit" class="popup__img">
                        <label for="image_worker_edit" class="popup__add-photo add-photo">
                            <input type="file" name="image_worker_edit" id="image_worker_edit" class="add-photo__input">
                            <span class="add-photo__icon ic_photo"></span>
                        </label>
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Фамилия</p>
                        <input type="hidden" name="id_of_worker" class="form__input " id="edit_worker_id">
                        <input data-aplha type="text" name="surname_worker_edit" id="surname_worker_edit" class="form__input " placeholder="Артем"
                               maxlength="30">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Имя</p>
                        <input data-aplha type="text" name="name_worker_edit" id="name_worker_edit" class="form__input " placeholder="Артем"
                               maxlength="30">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Отчество</p>
                        <input data-aplha type="text" name="patronymic_worker_edit" id="patronymic_worker_edit" class="form__input " placeholder="Дмитриевич"
                               maxlength="30">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">E-mail</p>
                        <input type="email" name="email_worker_edit" id="email_worker_edit" class="form__input" placeholder="example@gmail.com"
                               maxlength="40">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Телефон=логин</p>
                        <input type="tel" name="phone_worker_edit" id="phone_worker_edit" class="form__input" placeholder="+7 (999) 999-99-99"
                               maxlength="17">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Проектируемые разделы</p>
                        <input data-aplha type="text" name="designed_sections_edit" id="designed_sections_edit" class="form__input " placeholder="XYZ7965305k"
                               maxlength="60">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Должность</p>
                        <input data-aplha type="text" name="experience_worker_edit" id="experience_worker_edit" class="form__input " placeholder=""
                               maxlength="60">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Оклад</p>
                        <input type="text" name="salary_worker_edit" id="salary_worker_edit" class="popup-info-unit__salary form__input"
                               placeholder="75 000 руб" maxlength="20">
                    </div>
                    <div class="popup__btns form__btns">
                        <button type="submit" class="popup__btn">Сохранить</button>
                        <div data-reset class="popup__cancel">Отменить</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="popup-change-passw" class="popup popup-change-passw">
        <div class="popup-change-passw__content">
            <div class="popup__head">
                <p class="popup__title lgtext ic_lock">Изменение пароля</p>
                <p data-close class="popup__close ic_close"></p>
            </div>
            <div class="popup__main">
                <form action="#" name="changePass" id="changePass" class="popup__form form">
                    <div class="form__row">
                        <p class="form__label smtext">Старый пароль</p>
                        <input type="text" name="old_password" class="form__input" placeholder="ZYZ7456HH" maxlength="20">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Новый пароль</p>
                        <input type="text" name="password" class="form__input" placeholder="555699JKIY" maxlength="20">
                    </div>
                    <div class="form__row">
                        <p class="form__label smtext">Подтверждение пароля</p>
                        <input type="text" name="password_confirmation_edit-password" class="form__input" placeholder="555699JKIY"
                               maxlength="20">
                    </div>
                    <div class="popup__btns form__btns">
                        <input type="submit" value="Сохранить" class="popup__btn">
                        <div data-reset class="popup__cancel">Отменить</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="popup-account" class="popup popup-account ">
        <div class="popup-account__content">
            <div class="popup__head">
                <p class="popup__title lgtext ic_user">Аккаунт</p>
                <p data-close class="popup__close ic_close"></p>
            </div>
            <div class="popup__main">
                <div class="popup-account__table" id="popup-account__table">
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_user smtext">ФИО</p>--}}
{{--                        <p class="popup-account__right smtext">Петров Игорь Сергеевич</p>--}}
{{--                    </div>--}}
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_mail smtext">E-mail</p>--}}
{{--                        <p class="popup-account__right smtext">example@gmail.com</p>--}}
{{--                    </div>--}}
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_call smtext">Телефон</p>--}}
{{--                        <p class="popup-account__right smtext">+7 (999) 999-99-99</p>--}}
{{--                    </div>--}}
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_earth smtext">Страна</p>--}}
{{--                        <p class="popup-account__right smtext">Россия</p>--}}
{{--                    </div>--}}
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_role smtext">Роль</p>--}}
{{--                        <p class="popup-account__right smtext">Администратор</p>--}}
{{--                    </div>--}}
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_cal smtext">Дата регистрации</p>--}}
{{--                        <p class="popup-account__right smtext">15.10.2020</p>--}}
{{--                    </div>--}}
{{--                    <div class="popup-account__row">--}}
{{--                        <p class="popup-account__left ic_time smtext">Последняя активность</p>--}}
{{--                        <p class="popup-account__right smtext"><span class="popup-account__right-time">15.10.2021</span>18:41--}}
{{--                        </p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    <div id="popup-subscribe" class="popup popup-subscribe ">
        <div class="popup-subscribe__content">
            <div class="popup__head">
                <p class="popup__title lgtext ic_c_mark">Подписки</p>
                <p data-close class="popup__close ic_close"></p>
            </div>
            <form action="#" name="popupSubscr" id="" class="popup__main">
                <div class="popup-subscribe__spoilers" data-spoilers>
                    <div class="popup-subscribe__spoiler">
                        <div class="popup-subscribe__head" data-spoller><span
                                class="popup-subscribe__heading smtext ic_arr_d">Активные подписки</span></div>
                        <div class="popup-subscribe__body">
                            <div class="popup-subscribe__item">
                                <input type="checkbox" name="new_projects" id="new-projects" class="chios-inp"></input>
                                <label for="new-projects" class="popup-subscribe__label smtext chios-lab">Новые проекты
                                    в компании “Название”?</label>
                            </div>
                            <div class="popup-subscribe__item">
                                <input type="checkbox" name="change_system" id="change-system"
                                       class="chios-inp"></input>
                                <label for="change-system" class="popup-subscribe__label smtext chios-lab">Изменения в
                                    системе</label>
                            </div>
                            <div class="popup-subscribe__item">
                                <input type="checkbox" name="name_subscribe" id="name-subscribe"
                                       class="chios-inp"></input>
                                <label for="name-subscribe" class="popup-subscribe__label smtext chios-lab">Подписка
                                    №3</label>
                            </div>
                        </div>
                    </div>
                    <div class="popup-subscribe__spoiler">
                        <div class="popup-subscribe__head" data-spoller><span
                                class="popup-subscribe__heading smtext ic_arr_d">Неактивные подписки</span></div>
                        <div class="popup-subscribe__body">
                            <div class="popup-subscribe__item">
                                <input type="checkbox" name="new_projects" id="new-projects1" class="chios-inp"></input>
                                <label for="new-projects1" class="popup-subscribe__label smtext chios-lab">Новые проекты
                                    в компании “Название”?</label>
                            </div>
                            <div class="popup-subscribe__item">
                                <input type="checkbox" name="change_system" id="change-system1"
                                       class="chios-inp"></input>
                                <label for="change-system1" class="popup-subscribe__label smtext chios-lab">Изменения в
                                    системе</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup-subscribe__volume">
                    <div class="popup-subscribe__title smtext">Объем места на сервере</div>
                    <div class="popup-subscribe__place">
                        <div class="popup-subscribe__pbar pr-bar">
                            <div class="popup-subscribe__pbar-line pr-bar__line" style="width: 55%">55%</div>
                        </div>
                        <div class="popup-subscribe__add smtext btn">+ Добавить место</div>
                    </div>
                    <div class="popup-subscribe__info">
                        <p class="popup-subscribe__text smtext">Общий объем<span class="popup-subscribe__span smtext">500 МБ</span>
                        </p>
                        <p class="popup-subscribe__text smtext">Занято<span
                                class="popup-subscribe__span smtext">260 МБ</span></p>
                        <p class="popup-subscribe__text smtext">Свободно<span class="popup-subscribe__span smtext">240 МБ</span>
                        </p>
                    </div>
                </div>
                <div class="popup__btns form__btns">
                    <input type="submit" value="Сохранить" class="popup__btn">
                    <div data-reset class="popup__cancel">Отменить</div>
                </div>
            </form>
        </div>
    </div>
    <div id="popup-sa-ch-pass" class="popup popup-sa-ch-p popup-auth">
        <div class="popup-auth__content">
            <div class="popup-auth__top">
                <p class="popup-auth__title title">Изменение пароля</p>
                <p data-close class="popup__close ic_close"></p>
            </div>
            <div class="">
                <form action="#" name="saChangePass" id="saChangePass" class="popup-auth__form popup-sa-ch-p__form">
                    <div class="popup-sa-ch-p__inputs">
                        <label for="four-num" class="popup-auth__label popup-sa-ch-p__label"><span
                                class="popup-auth__label-span lgtext">Введите новый пароль</span>
                            <input type="hidden" id="user_id">
                            <input type="text" name="password" id="four-num" class="popup-auth__input lgtext"
                                   maxlength="20"></label>
                        <label for="four-num" class="popup-auth__label popup-sa-ch-p__label"><span
                                class="popup-auth__label-span lgtext">Подтвердите новый пароль</span>
                            <input type="text" name="password_confirmation" id="four-num" class="popup-auth__input lgtext"
                                   maxlength="20"></label>
                    </div>
                    <input type="submit" value="Подтвердить" class="popup-sa-ch-p__submit">
                </form>
            </div>
        </div>
    </div>
    <div id="popup-add-state" class="popup popup-add-state">
        <div class="popup-change-passw__content">
            <div class="popup__head">
                <p class="popup__title lgtext ic_m_econ">Добавление статьи</p>
                <p data-close class="popup__close ic_close"></p>
            </div>
            <div class="popup__main">
                <form action="#" name="addState" id="mouth_cost_form" class="popup__form form">
                    <div class="form__row">
                        <p class="form__label smtext">Название статьи</p>
                        <input data-aplha type="text" name="title_mouth_cost" id="title_mouth_cost" class="form__input "
                               placeholder="Введите название статьи" maxlength="50">
                    </div>
                    <div class="popup-add-state__btns popup__btns form__btns">
                        <button type="submit" class="popup__btn">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="popup-add-ones-state" class="popup popup-add-state ">
        <div class="popup-change-passw__content">
            <div class="popup__head">
                <p class="popup__title lgtext ic_m_econ">Добавление статьи</p>
                <p data-close class="popup__close ic_close"></p>
            </div>
            <div class="popup__main">
                <form action="#" name="addState" id="ones_cost_form" class="popup__form form">
                    <div class="form__row">
                        <p class="form__label smtext">Название статьи</p>
                        <input data-aplha type="text" name="title_ones_cost" id="title_ones_cost_id" class="form__input "
                               placeholder="Введите название статьи" maxlength="50">
                    </div>
                    <div class="popup-add-state__btns popup__btns form__btns">
                        <button type="submit" class="popup__btn">Сохранить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="/js/script.js"></script>
</body>
</html>
