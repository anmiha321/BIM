        <footer class="footer">

        </footer>

    <div class="modal ">
        <div id="popup-add-doc" class="popup popup-add-doc ">
            <div class="popup-add-doc__content">
                <div class="popup-add-doc__head"><p class="popup-add-doc__close popup__close ic_close"></p></div>
                <div class="popup-add-doc__main">
                    <form action="#" class="popup-add-doc__body">
                        <p class="popup-add-doc__icon ic_add_f"></p>
                        <p class="popup-add-doc__title title">Перетащите изображение сюда</p>
                        <p class="popup-add-doc__text text">или нажмите на кнопку</p>
                        <input type="file" name="add_doc" id="add-doc-lk" class="popup-add-doc__file">
                        <label for="add-doc-lk" class="popup-add-doc__btn lgtext btn">Выбрать файл</label>
                    </form>
                </div>
            </div>
        </div>
        <div id="popup-arch-units" class="popup popup-arch-units ">
            <div class="popup-arch-units__content">
                <div class="popup__head">
                    <p class="popup__title lgtext ic_arch">Архивные сотрудники</p>
                    <p class="popup-arch-units__close popup__close ic_close"></p>
                </div>
                <div class="units-list">
                    <div class="popup-arch-units__item units-list__item">
                        <p class="units-list__edit ic_edit"></p>
                        <p class="units-list__arch ic_close"></p>
                        <div class="units-list__photo"><img src="/uploads/units/2s.png" alt="Пользователь" class="units-list__img"></div>
                        <p class="units-list__name smtext">Грозный П.У.  - Проектировщик - АР - 50 000 ₽</p>
                        <p class="units-list__unarch ic_unarch"></p>
                    </div>
                    <div class="popup-arch-units__item units-list__item">
                        <p class="units-list__edit ic_edit"></p>
                        <p class="units-list__arch ic_close"></p>
                        <div class="units-list__photo"><img src="/uploads/units/3s.png" alt="Пользователь" class="units-list__img"></div>
                        <p class="units-list__name smtext">Петров В.В. -  Бухгалтер - 60 000 ₽</p>
                        <p class="units-list__unarch ic_unarch"></p>
                    </div>
                    <div class="popup-arch-units__item units-list__item">
                        <p class="units-list__edit ic_edit"></p>
                        <p class="units-list__arch ic_close"></p>
                        <div class="units-list__photo"><img src="/uploads/units/4s.png" alt="Пользователь" class="units-list__img"></div>
                        <p class="units-list__name smtext">Сидоров С.С. - Юрист - 70 000 ₽</p>
                        <p class="units-list__unarch ic_unarch"></p>
                    </div>
                    <div class="popup-arch-units__item units-list__item">
                        <p class="units-list__edit ic_edit"></p>
                        <p class="units-list__arch ic_close"></p>
                        <div class="units-list__photo"><img src="/uploads/units/5s.png" alt="Пользователь" class="units-list__img"></div>
                        <p class="units-list__name smtext">Проект В.Е. - ГИП - 150 000 ₽</p>
                        <p class="units-list__unarch ic_unarch"></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-info-unit" class="popup popup-info-unit ">
            <div class="popup-arch-units__content">
                <div class="popup__head">
                    <p class="popup__title lgtext ic_m_lk">Информация о сотруднике</p>
                    <p class="popup-arch-units__close popup__close ic_close"></p>
                </div>
                <div class="popup__main">
                    <div class="popup__photo"><img src="/uploads/units/1.png" alt="Пользователь" class="popup__img"></div>
                    <form action="#" name="popupInfoUnit" id="" class="popup__form form">
                        <div class="form__row">
                            <p class="form__label smtext">Фамилия</p>
                            <input type="text" name="surname" class="form__input onlyAlpha" placeholder="Артем" maxlength="30">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Имя</p>
                            <input type="text" name="name" class="form__input onlyAlpha" placeholder="Артем" maxlength="30">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Отчество</p>
                            <input type="text" name="patron" class="form__input onlyAlpha" placeholder="Дмитриевич" maxlength="30">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">E-mail</p>
                            <input type="email" name="email" class="form__input" placeholder="example@gmail.com" maxlength="40">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Телефон=логин</p>
                            <input type="tel" name="phone" class="form__input" placeholder="+7 (999) 999-99-99" maxlength="17">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Пароль для входа в систему</p>
                            <input type="text" name="passw" class="form__input" placeholder="XYZ7965305k" maxlength="20">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Проектируемые разделы</p>
                            <input type="text" name="des_sec" class="form__input onlyAlpha" placeholder="XYZ7965305k" maxlength="60">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Должность</p>
                            <input type="text" name="position" class="form__input onlyAlpha" placeholder="" maxlength="60">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Оклад</p>
                            <input type="text" name="salary" class="popup-info-unit__salary form__input" placeholder="75 000 руб" maxlength="20">
                        </div>
                        <div class="popup__btns form__btns">
                            <input type="submit" value="Вернуть из архива" class="popup__btn btngreen smtext">
                            <div class="popup__cancel cancel">Отменить</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="popup-change-passw" class="popup popup-change-passw ">
            <div class="popup-change-passw__content">
                <div class="popup__head">
                    <p class="popup__title lgtext ic_lock">Изменение пароля</p>
                    <p class="popup__close ic_close"></p>
                </div>
                <div class="popup__main">
                    <form action="#" name="changePass" id="" class="popup__form form">
                        <div class="form__row">
                            <p class="form__label smtext">Старый пароль</p>
                            <input type="text" name="old_passw" class="form__input" placeholder="ZYZ7456HH" maxlength="20">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Новый пароль</p>
                            <input type="text" name="new_passw" class="form__input" placeholder="555699JKIY" maxlength="20">
                        </div>
                        <div class="form__row">
                            <p class="form__label smtext">Подтверждение пароля</p>
                            <input type="text" name="conf_new_passw" class="form__input" placeholder="555699JKIY" maxlength="20">
                        </div>
                        <div class="popup__btns form__btns">
                            <input type="submit" value="Сохранить" class="popup__btn btngreen smtext">
                            <div class="popup__cancel cancel">Отменить</div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="popup-account" class="popup popup-account ">
            <div class="popup-account__content">
                <div class="popup__head">
                    <p class="popup__title lgtext ic_user">Аккаунт</p>
                    <p class="popup__close ic_close"></p>
                </div>
                <div class="popup__main">
                    <div class="popup-account__table">
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_user smtext">ФИО</p>
                            <p class="popup-account__right smtext">Петров Игорь Сергеевич</p>
                        </div>
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_mail smtext">E-mail</p>
                            <p class="popup-account__right smtext">example@gmail.com</p>
                        </div>
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_call smtext">Телефон</p>
                            <p class="popup-account__right smtext">+7 (999) 999-99-99</p>
                        </div>
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_earth smtext">Страна</p>
                            <p class="popup-account__right smtext">Россия</p>
                        </div>
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_role smtext">Роль</p>
                            <p class="popup-account__right smtext">Администратор</p>
                        </div>
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_cal smtext">Дата регистрации</p>
                            <p class="popup-account__right smtext">15.10.2020</p>
                        </div>
                        <div class="popup-account__row">
                            <p class="popup-account__left ic_time smtext">Последняя активность</p>
                            <p class="popup-account__right smtext"><span class="popup-account__right-time">15.10.2021</span>18:41</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="popup-subscribe" class="popup popup-subscribe ">
            <div class="popup-subscribe__content">
                <div class="popup__head">
                    <p class="popup__title lgtext ic_c_mark">Подписки</p>
                    <p class="popup__close ic_close"></p>
                </div>
                <form action="#" name="popupSubscr" id="" class="popup__main">
                    <div class="popup-subscribe__spoilers" data-spoilers>
                        <div class="popup-subscribe__spoiler">
                            <div class="popup-subscribe__head" data-spoller><span class="popup-subscribe__heading smtext ic_arr_d">Активные подписки</span></div>
                            <div class="popup-subscribe__body">
                                <div class="popup-subscribe__item">
                                    <input type="checkbox" name="new_projects" id="new-projects" class="chios-inp"></input>
                                    <label for="new-projects" class="popup-subscribe__label smtext chios-lab">Новые проекты в компании “Название”?</label>
                                </div>
                                <div class="popup-subscribe__item">
                                    <input type="checkbox" name="change_system" id="change-system" class="chios-inp"></input>
                                    <label for="change-system" class="popup-subscribe__label smtext chios-lab">Изменения в системе</label>
                                </div>
                                <div class="popup-subscribe__item">
                                    <input type="checkbox" name="name_subscribe" id="name-subscribe" class="chios-inp"></input>
                                    <label for="name-subscribe" class="popup-subscribe__label smtext chios-lab">Подписка №3</label>
                                </div>
                            </div>
                        </div>
                        <div class="popup-subscribe__spoiler">
                            <div class="popup-subscribe__head" data-spoller><span class="popup-subscribe__heading smtext ic_arr_d">Неактивные подписки</span></div>
                            <div class="popup-subscribe__body">
                                <div class="popup-subscribe__item">
                                    <input type="checkbox" name="new_projects" id="new-projects1" class="chios-inp"></input>
                                    <label for="new-projects1" class="popup-subscribe__label smtext chios-lab">Новые проекты в компании “Название”?</label>
                                </div>
                                <div class="popup-subscribe__item">
                                    <input type="checkbox" name="change_system" id="change-system1" class="chios-inp"></input>
                                    <label for="change-system1" class="popup-subscribe__label smtext chios-lab">Изменения в системе</label>
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
                            <p class="popup-subscribe__text smtext">Общий объем<span class="popup-subscribe__span smtext">500 МБ</span></p>
                            <p class="popup-subscribe__text smtext">Занято<span class="popup-subscribe__span smtext">260 МБ</span></p>
                            <p class="popup-subscribe__text smtext">Свободно<span class="popup-subscribe__span smtext">240 МБ</span></p>
                        </div>
                    </div>
                    <div class="popup__btns form__btns">
                        <input type="submit" value="Сохранить" class="popup__btn btngreen smtext">
                        <div class="popup__cancel cancel">Отменить</div>
                    </div>
                </form>
            </div>
        </div>
        <div id="popup-sa-ch-pass" class="popup popup-sa-ch-p popup-auth ">
            <div class="popup-auth__content">
                <div class="popup-auth__top">
                    <p class="popup-auth__title title">Изменение пароля</p>
                    <p class="popup__close ic_close"></p>
                </div>
                <div class="">
                    <form action="#" name="saChangePass" id="" class="popup-auth__form popup-sa-ch-p__form">
                        <div class="popup-sa-ch-p__inputs">
                            <label for="four-num" class="popup-auth__label popup-sa-ch-p__label"><span class="popup-auth__label-span lgtext">Введите новый пароль</span>
                            <input type="text" name="four_numbers" id="four-num" class="popup-auth__input lgtext" maxlength="20"></label>
                            <label for="four-num" class="popup-auth__label popup-sa-ch-p__label"><span class="popup-auth__label-span lgtext">Подтвердите новый пароль</span>
                            <input type="text" name="four_numbers" id="four-num" class="popup-auth__input lgtext" maxlength="20"></label>
                        </div>
                        <input type="submit" value="Подтвердить" class="popup-sa-ch-p__submit btn lgtext">
                    </form>
                </div>
            </div>
        </div>
        <div id="popup-add-state" class="popup popup-add-state">
            <div class="popup-change-passw__content">
                <div class="popup__head">
                    <p class="popup__title lgtext ic_m_econ">Добавление статьи</p>
                    <p class="popup__close ic_close"></p>
                </div>
                <div class="popup__main">
                    <form action="#" name="addState" id="" class="popup__form form">
                        <div class="form__row">
                            <p class="form__label smtext">Название статьи</p>
                            <input type="text" name="new_state" class="form__input onlyAlpha" placeholder="Введите название статьи" maxlength="50">
                        </div>
                        <div class="popup-add-state__btns popup__btns form__btns">
                            <input type="submit" value="Сохранить" class="popup__btn btngreen smtext">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/script.js"></script>
