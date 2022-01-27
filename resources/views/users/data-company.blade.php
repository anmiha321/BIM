@extends('includes.header')
<?php
//$root_server = $_SERVER["DOCUMENT_ROOT"];
//include (''.$root_server.'/includes/header.php');
?>
@section('content')
    <div class="module company">
        <div class="module__content company__content">
            <nav class="company__head nav-company">
                <div data-id="main" class="nav-company__link text ic_m_treat active">Основная информация</div>
                <div data-id="docs" class="nav-company__link text ic_m_corr ">Документы</div>
                <div data-id="state" class="nav-company__link text ic_users ">Штат</div>
                <div data-id="constr" class="nav-company__link text ic_m_gip ">Конструктор исходящих</div>
                <div data-id="expend" class="nav-company__link text ic_m_econ ">Расходные статьи</div>
            </nav>
            <div class="company__body">
                <div id="main" class="company__block active">
                    <form action="#" name="main_info" id="company" class="company-main form">
                        {{--                    <div class="company-main__main">--}}
                        {{--                        <div class="company-main__left">--}}
                        {{--                            <div class="company-main__checking block">--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">ИНН</p>--}}
                        {{--                                    <input data-num type="text" name="INN" id="" class="company-main__input form__input" placeholder="1234 5482 2266" maxlength="12">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">БИК</p>--}}
                        {{--                                    <input data-num type="text" name="BIK" id="" class="company-main__input form__input" placeholder="125 478 785" maxlength="9">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__btn smtext">Проверить</div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__requisites block">--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Юридический адрес</p>--}}
                        {{--                                    <input type="text" name="law_address" id="" class="company-name__input form__input" placeholder="г. Тюмень ул. Тюменская 27" maxlength="50">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Почтовый адрес</p>--}}
                        {{--                                    <input type="text" name="mail_address" id="" class="company-name__input form__input" placeholder="г. Тюмень ул. Первомайская 3 оф.211" maxlength="50">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Фактический адрес</p>--}}
                        {{--                                    <input type="text" name="fact_address" id="" class="company-name__input form__input" placeholder="г. Тюмень ул. Первомайская 3 оф.211" maxlength="50">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">КПП</p>--}}
                        {{--                                    <input data-num type="text" name="KPP" id="" class="company-name__input form__input" placeholder="152752553" maxlength="9">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">ОКПО</p>--}}
                        {{--                                    <input data-num type="text" name="OKPO" id="" class="company-name__input form__input" placeholder="4512538884" maxlength="10">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Система налогообложения</p>--}}
                        {{--                                    <div data-drop class="form__input-wrapper">--}}
                        {{--                                        <span data-drop-arr class="form__input-arr ic_arr_d"></span>--}}
                        {{--                                        <input data-aplha type="text" name="tax_system" id="" class="company-name__input form__input " placeholder="Упрощенная" maxlength="20" readonly>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div data-drop-list class="drop">--}}
                        {{--                                        <p class="drop__item">Упрощенная</p>--}}
                        {{--                                        <p class="drop__item">Другая</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">ОГРН</p>--}}
                        {{--                                    <input data-num type="text" name="OGPH" id="" class="company-name__input form__input" placeholder="8546 996 631 663 " maxlength="13">--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Телефон</p>--}}
                        {{--                                    <input type="tel" name="phone" id="" class="company-name__input form__input" placeholder="+ 7 (999) 999-99-99" maxlength="17">--}}
                        {{--                                    <p data-add-input class="company-main__add-phone smtext">+ Добавить еще</p>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">E-mail</p>--}}
                        {{--                                    <input type="email" name="email" id="" class="company-name__input form__input" placeholder="example@gmail.com" maxlength="30">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="company-main__director block">--}}
                        {{--                            <p class="company-main__heading text ic_m_lk">Руководитель</p>--}}
                        {{--                            <div class="company-main__input-wrapper">--}}
                        {{--                                <p class="company-main__label smtext form__label">Фамилия</p>--}}
                        {{--                                <input data-aplha type="text" name="surname" id="" class="form__input " placeholder="Петров" maxlength="30">--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__input-wrapper">--}}
                        {{--                                <p class="company-main__label smtext form__label">Имя</p>--}}
                        {{--                                <input data-aplha type="text" name="name" id="" class="form__input " placeholder="Сергей" maxlength="30">--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__input-wrapper">--}}
                        {{--                                <p class="company-main__label smtext form__label">Отчество</p>--}}
                        {{--                                <input data-aplha type="text" name="patronymic" id="" class="form__input " placeholder="Леонидович" maxlength="30">--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__input-wrapper">--}}
                        {{--                                <p class="company-main__label smtext form__label">Контактный телефон</p>--}}
                        {{--                                <input type="tel" name="phone" id="" class="form__input" placeholder="+7 (999) 999-99-99" maxlength="17">--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__input-wrapper">--}}
                        {{--                                <p class="company-main__label smtext form__label">E-mail</p>--}}
                        {{--                                <input type="email" name="email" id="" class="form__input" placeholder="example@gmail.com" maxlength="30">--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                        <div class="company-main__bank block">--}}
                        {{--                            <p class="company-main__heading company-main__heading_bank text ic_m_treat">Банковские реквизиты</p>--}}
                        {{--                            <div class="company-main__bank-row">--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Наименование банка</p>--}}
                        {{--                                    <div data-drop class="form__input-wrapper">--}}
                        {{--                                        <span data-drop-arr class="form__input-arr ic_arr_d"></span>--}}
                        {{--                                        <input type="text" name="bank_name" id="" class="form__input" placeholder="ПАО “Сбербанк”" maxlength="30" readonly>--}}
                        {{--                                    </div>--}}
                        {{--                                    <div data-drop-list class="drop">--}}
                        {{--                                        <p class="drop__item">ПАО “Сбербанк”</p>--}}
                        {{--                                        <p class="drop__item">Другой банк</p>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">БИК</p>--}}
                        {{--                                    <input data-num type="text" name="bank_BIK" id="" class="form__input" placeholder="125 478 785" maxlength="9">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__bank-row">--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">Р/С</p>--}}
                        {{--                                    <input data-num type="text" name="ppppcccc" id="" class="form__input" placeholder="08854731786216325794" maxlength="20">--}}
                        {{--                                </div>--}}
                        {{--                                <p class="company-main__balance text ic_m_econ">Баланс 12&nbsp;600&nbsp;&#8381;</p>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="company-main__bank-row">--}}
                        {{--                                <div class="company-main__input-wrapper">--}}
                        {{--                                    <p class="company-main__label smtext form__label">К/С</p>--}}
                        {{--                                    <input data-num type="text" name="kkkkcccc" id="" class="form__input" placeholder="856 479 115 782 437 167 42" maxlength="20">--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                        {{--                    <div class="lk-btns form__btns">--}}
                        {{--                        <button type="submit"  class="form__btn lk-btns__submit btn smtext">Сохранить</button>--}}
                        {{--                        <div data-reset class="form__cancel smtext cancel">Отменить</div>--}}
                        {{--                    </div>--}}
                    </form>
                </div>
                <div id="docs" class="company__block company-docs ">
                    <div class="company-docs__content">
                        <form action="#" name="add-docs" id="documents" class="company-docs__left form ">
                            {{--                        <div class="company-docs__head module__head">--}}
                            {{--                            <p class="module__heading ic_m_corr">Добавление нового документа</p>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="company-docs__body block">--}}
                            {{--                            <p class="company-docs__label smtext">Название</p>--}}
                            {{--                            <div class="company-docs__row">--}}
                            {{--                                <div class="company-docs__main">--}}
                            {{--                                    <div class="company-docs__input-wrapper">--}}
                            {{--                                        <input type="text" name="doc_name" id="" class="company-docs__input form__input" placeholder="Свидетельство о регистрации.pdf" maxlength="100">--}}
                            {{--                                        <input type="file" name="doc_name" id="" class="company-docs__input form__input" maxlength="100">--}}
                            {{--                                        <button type="button" class="company-docs__del ic_close"></button>--}}
                            {{--                                    </div>--}}
                            {{--                                    <div class="company-docs__add smtext"><input type="submit" value="">Добавить в список</div>--}}
                            {{--                                </div>--}}
                            {{--                                <div data-popup="add-doc" class="company-docs__load  btngreen">+ Загрузить другие документы</div>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="lk-btns form__btns">--}}
                            {{--                            <input type="submit" value="Сохранить" class="form__btn lk-btns__submit btn smtext">--}}
                            {{--                            <div data-reset class="form__cancel smtext cancel">Отменить</div>--}}
                            {{--                        </div>--}}
                        </form>
                        <div id="right_docs" class="company-docs__right block">
                            {{--                        <div class="module__head">--}}
                            {{--                            <p class="module__heading ic_m_corr">Список документов</p>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="company-docs__list">--}}
                            {{--                            <div class="company-docs__item">--}}
                            {{--                                <div class="company-docs__item-wrapper">--}}
                            {{--                                    <button type="button" class="company-docs__delete ic_close"></button>--}}
                            {{--                                    <a href="#" class="company-docs__name smtext" target="_blank">Св-во о регистрации.pdf</a>--}}
                            {{--                                </div>--}}
                            {{--                                <p class="company-docs__size smtext">500&nbsp;kb</p>--}}
                            {{--                                <a href="#" class="company-docs__dload ic_dload"></a>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="company-docs__item">--}}
                            {{--                                <div class="company-docs__item-wrapper">--}}
                            {{--                                    <button type="button" class="company-docs__delete ic_close"></button>--}}
                            {{--                                    <a href="#" class="company-docs__name smtext" target="_blank">Документ 1.xml</a>--}}
                            {{--                                </div>--}}
                            {{--                                <p class="company-docs__size smtext">467&nbsp;kb</p>--}}
                            {{--                                <a href="#" class="company-docs__dload ic_dload"></a>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="company-docs__item">--}}
                            {{--                                <div class="company-docs__item-wrapper">--}}
                            {{--                                    <button type="button" class="company-docs__delete ic_close"></button>--}}
                            {{--                                    <a href="#" class="company-docs__name smtext" target="_blank">СРО.pdf</a>--}}
                            {{--                                </div>--}}
                            {{--                                <p class="company-docs__size smtext">234&nbsp;kb</p>--}}
                            {{--                                <a href="#" class="company-docs__dload ic_dload"></a>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="company-docs__item">--}}
                            {{--                                <div class="company-docs__item-wrapper">--}}
                            {{--                                    <button type="button" class="company-docs__delete ic_close"></button>--}}
                            {{--                                    <a href="#" class="company-docs__name smtext" target="_blank">Иной документ.doc</a>--}}
                            {{--                                </div>--}}
                            {{--                                <p class="company-docs__size smtext">586&nbsp;kb</p>--}}
                            {{--                                <a href="#" class="company-docs__dload ic_dload"></a>--}}
                            {{--                            </div>--}}
                            {{--                        </div>--}}
                            {{--                        <a href="#" class="company-docs__dload-all smtext ic_dload">Скачать все одним архивом</a>--}}
                        </div>
                    </div>
                </div>
                <div id="state" class="company__block company-state ">
                    <form action="#" name="state" id="create_new_worker" class="company-state__content">
                        <div class="company-state__left">
                            <div class="company-state__person block">
                                <div class="module__head">
                                    <p class="company-state__heading module__heading ic_add_p">Новый сотрудник</p>
                                </div>
                                <div class="company-state__data">
                                    <label for="image_worker" class="company-state__add-photo add-photo">
                                        <input type="file" name="image_worker" id="image_worker"
                                               class="add-photo__input">
                                        <img src="/css/img/svg/add_foto.svg" alt="Добавить фото" id="photo-worker-show"
                                             class="add-photo__img">
                                        <span class="add-photo__icon ic_photo"></span>
                                    </label>
                                    <div class="company-state__inputs">
                                        <div class="company-state__row">
                                            <div class="company-state__input-wrapper">
                                                <p class="company-state__label smtext form__label">Фамилия</p>
                                                <input data-aplha type="text" name="surname_worker" id="surname_worker"
                                                       class="form__input " placeholder="Иванов" maxlength="30">
                                            </div>
                                            <div class="company-state__input-wrapper">
                                                <p class="company-state__label smtext form__label">Имя</p>
                                                <input data-aplha type="text" name="name_worker" id="name_worker"
                                                       class="form__input " placeholder="Артем" maxlength="30">
                                            </div>
                                        </div>
                                        <div class="company-state__row">
                                            <div class="company-state__input-wrapper">
                                                <p class="company-state__label smtext form__label">Отчество</p>
                                                <input data-aplha type="text" name="patronymic_worker"
                                                       id="patronymic_worker" class="form__input "
                                                       placeholder="Дмитриевич" maxlength="30">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="company-state__position">
                                <div class="module__head">
                                    <p class="company-state__heading module__heading ic_portfel">Должность</p>
                                </div>
                                <div class="company-state__data">
                                    <div class="company-state__row">
                                        <div class="company-state__input-wrapper">
                                            <p class="company-state__label smtext form__label">Проектируемые разделы</p>
                                            <div data-drop class="form__input-wrapper">
                                                <span data-drop-arr class="form__input-arr ic_arr_d"></span>
                                                <input type="text" name="designed_sections" id="designed_sections"
                                                       class="form__input" placeholder="Конструкции" maxlength="30"
                                                       readonly>
                                            </div>
                                            <div data-drop-list class="drop">
                                                <p class="drop__item">Конструкции1</p>
                                                <p class="drop__item">Конструкции2</p>
                                                <p class="drop__item">Конструкции3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-state__row">
                                        <div class="company-state__input-wrapper">
                                            <p class="company-state__label smtext form__label">Должность</p>
                                            <div data-drop class="form__input-wrapper">
                                                <span data-drop-arr class="form__input-arr ic_arr_d"></span>
                                                <input data-drop type="text" name="experience_worker"
                                                       id="experience_worker" class="form__input"
                                                       placeholder="Архитектор" maxlength="30" readonly>
                                            </div>
                                            <div data-drop-list class="drop">
                                                <p class="drop__item">Архитектор1</p>
                                                <p class="drop__item">Архитектор2</p>
                                                <p class="drop__item">Архитектор3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="company-state__row">
                                        <div class="company-state__input-wrapper">
                                            <p class="company-state__label smtext form__label">Оклад</p>
                                            <input type="text" name="salary_worker" id="salary_worker"
                                                   class="company-state__salary form__input" placeholder="75 000 руб"
                                                   maxlength="20">
                                        </div>
                                    </div>
                                </div>
                                <div class="company-state__btns">
                                    <button type="submit" id="add_new_worker" class="company-state__submit btngreen">
                                        Добавить в список сотрудников
                                    </button>
                                    <div data-reset class="company-state__cancel ">Отменить</div>
                                </div>
                            </div>
                            <div class="company-state__contact block">
                                <div class="module__head">
                                    <p class="company-state__heading module__heading ic_m_lk">Контактные данные</p>
                                </div>
                                <div class="company-state__data">
                                    <div class="">
                                        <div class="company-state__row">
                                            <div class="company-state__input-wrapper">
                                                <p class="company-state__label smtext form__label">E-mail</p>
                                                <input type="text" name="email_worker" id="email_worker"
                                                       class="form__input" placeholder="example@gmail.com"
                                                       maxlength="30">
                                            </div>
                                            <div class="company-state__input-wrapper">
                                                <p class="company-state__label smtext form__label">Телефон=логин</p>
                                                <input type="tel" name="phone_worker" id="phone_worker"
                                                       class="form__input" placeholder="+7 (999) 999-99-99"
                                                       maxlength="17">
                                                {{--                                            <p class="company-state__confirm smtext ic_atten">Номер телефона подтвержден!</p>--}}
                                            </div>
                                        </div>
                                        <div class="company-state__row company-state__row_gen">
                                            <div class="company-state__input-wrapper">
                                                <p class="company-state__label smtext form__label">Пароль для входа в
                                                    систему</p>
                                                <input type="text" name="password_worker" id="password_worker"
                                                       class="form__input" placeholder="XYZ7965305k" maxlength="20">
                                            </div>
                                            <div class="company-state__generate text">Сгенерировать пароль</div>
                                        </div>
                                        <div class="company-state__row company-state__row_gen">
                                            <div class="company-state__input-wrapper">
                                                {{--                                            <p class="company-state__label smtext form__label">Ссылка для входа</p>--}}
                                                {{--                                            <input type="url" name="link_enter" id="" class="form__input" placeholder="Дмитриевич">--}}
                                                <input type="hidden" name="role_worker" id="role_worker" value="4"
                                                       class="form__input">
                                            </div>
                                            {{--                                        <div class="company-state__generate text">Сгенерировать ccылку</div>--}}
                                        </div>
                                    </div>
                                    {{--                                <div class="company-state__agenda text">Отправить приглашение на e-mail</div>--}}
                                </div>
                            </div>
                        </div>
                        <div class="company-state__right block">
                            <div class="company-state__list">
                                <div class="module__head">
                                    <p class="company-state__heading module__heading ic_units">Список сотрудников</p>
                                </div>
                                <div class="company-state__list-persons units-list" id="worker_list">
                                    {{--                                <div class="units-list__item">--}}
                                    {{--                                    <button data-popup="info-unit" type="button" class="units-list__edit ic_edit"></button>--}}
                                    {{--                                    <button type="button" class="units-list__arch ic_close"></button>--}}
                                    {{--                                    <div class="units-list__photo"><img src="/uploads/units/2s.png" alt="Пользователь" class="units-list__img"></div>--}}
                                    {{--                                    <p class="units-list__name smtext">Грозный П.У.  - Проектировщик - АР - 50 000 ₽</p>--}}
                                    {{--                                </div>--}}
                                </div>
                                <p class="company-state__show-arch smtext ic_arch"><span data-popup="arch-units"
                                                                                         class="company-state__show-span">Посмотреть архивных пользователей</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="constr" class="company__block company-constructor"></div>
                <div id="expend" class="company__block company-expend ">
                    <div class="company-expend__content">
                        <form action="#" name="expItems" id="mouth_costs" class="company-expend__block block">
                            {{--                        <div class="module__head">--}}
                            {{--                            <p class="module__heading ic_m_econ">Расходные статьи - 5</p>--}}
                            {{--                            <p class="module__icon ic_upload"></p>--}}
                            {{--                        </div>--}}
                            {{--                        <p class="company-expend__notify smtext">В месяц</p>--}}
                            {{--                        <div class="company-expend__main">--}}
                            {{--                            <div class="company-expend__list">--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">1. Аренда офиса</p>--}}
                            {{--                                    <input type="text" name="rent_office" id="" class="company-expend__input smtext" placeholder="300 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">2. Коммунальные платежи</p>--}}
                            {{--                                    <input type="text" name="com_pay" id="" class="company-expend__input smtext" placeholder="30 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">3. Вода чистая питьевая</p>--}}
                            {{--                                    <input type="text" name="water" id="" class="company-expend__input smtext" placeholder="4 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">4. Телефония</p>--}}
                            {{--                                    <input type="text" name="phone" id="" class="company-expend__input smtext" placeholder="30 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <div class="company-expend__text smtext">--}}
                            {{--                                        <span data-tip class="company-expend__text-span ic_m_brif">5. ФОТ</span>--}}
                            {{--                                    </div>--}}
                            {{--                                    <input type="text" name="wage_fund" id="" class="company-expend__input smtext" placeholder="600 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                    <div data-tooltip class="company-expend__tooltip">--}}
                            {{--                                        <div class="company-expend__popup">--}}
                            {{--                                            <p class="company-expend__popup-text smtext">В фот зайдут те те и те В фот зайдут те те и те transform: matrix(-1, 0, 0, 1, 0, 0);</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="company-expend__add ic_plus"><span data-popup="add-state" class="company-expend__add-text">Добавить новую статью расходов</span></div>--}}
                            {{--                            <p class="company-expend__sum smtext"><span class="company-expend__sum-span">Итого: </span>964 000&#8381;</p>--}}
                            {{--                            <input type="submit" value="Сохранить" class="company-expend__submit btn">--}}
                            {{--                        </div>--}}
                            {{--                        </div>--}}
                        </form>
                        <form action="#" name="onceItems" id="cost_ones_form" class="company-expend__block block">
                            {{--                        <div class="module__head">--}}
                            {{--                            <p class="module__heading ic_m_econ">Разовые расходы - 15</p>--}}
                            {{--                            <p class="module__icon ic_upload"></p>--}}
                            {{--                        </div>--}}
                            {{--                        <div class="company-expend__main">--}}
                            {{--                            <div class="company-expend__list">--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">1. Покупка оборудования</p>--}}
                            {{--                                    <input type="text" name="buy_equip" id="" class="company-expend__input smtext" placeholder="300 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">2. Покупка техники</p>--}}
                            {{--                                    <input type="text" name="buy_tech" id="" class="company-expend__input smtext" placeholder="30 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">3. Покупка мебели</p>--}}
                            {{--                                    <input type="text" name="buy_furn" id="" class="company-expend__input smtext" placeholder="4 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">4. Покупка оборудования</p>--}}
                            {{--                                    <input type="text" name="buy_equip" id="" class="company-expend__input smtext" placeholder="30 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="company-expend__item">--}}
                            {{--                                    <p class="company-expend__text smtext">5. Покупка мебели</p>--}}
                            {{--                                    <input type="text" name="buy_furn" id="" class="company-expend__input smtext" placeholder="600 000&#8381;">--}}
                            {{--                                    <button type="button" class="company-expend__del ic_close"></button>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="company-expend__add ic_plus"><span data-popup="add-every-mouth-state" class="company-expend__add-text">Добавить новую статью расходов</span></div>--}}
                            {{--                            <p class="company-expend__sum smtext"><span class="company-expend__sum-span">Итого: </span>964 000&#8381;</p>--}}
                            {{--                            <input type="submit" value="Сохранить" class="company-expend__submit btn">--}}
                            {{--                        </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(public_path() . '/includes/footer.blade.php');?>
@endsection
@section('company')
    <script>
        $(document).ready(function () {
            var i = 0;
            phoneadd();

            function fetchcompany() {
                $.ajax({
                    type: "GET",
                    url: "fetchcompany",
                    dataType: "json",
                    success: function (data) {
                        $('#company').html(data.company);
                        $('#documents').html(data.document);
                        $('#right_docs').html(data.rightdocuments);
                        $('#worker_list').html(data.workers);
                        $('#mouth_costs').html(data.costs);
                        $('#cost_ones_form').html(data.costs_ones);
                        $('#popup-arch-units').html(data.archive_worker_list);
                        var input = document.getElementById('doc_file[0]');
                        var infoArea = document.getElementById('file_input_fild[0]');

                        input.addEventListener('change', showFileName);

                        function showFileName(event) {

                            // the change event gives us the input it occurred in
                            var input = event.target;

                            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                            var fileName = input.files[0].name;
                            // use fileName however fits your app best, i.e. add it into a div
                            infoArea.value = fileName.split('.').slice(0, -1).join('.');
                        }
                    }
                });
            }

            function phoneadd() {
                $.ajax({
                    type: "GET",
                    url: "fetchcompany",
                    dataType: "json",
                    success: function (data) {
                        $('#company').html(data.company);
                        $('#documents').html(data.document);
                        $('#right_docs').html(data.rightdocuments);
                        $('#worker_list').html(data.workers);
                        $('#mouth_costs').html(data.costs);
                        $('#cost_ones_form').html(data.costs_ones);
                        $('#popup-arch-units').html(data.archive_worker_list);
                        var inputcount = $('#count_inputs').val();
                        var maxField = 9;
                        $(document).on('click', '#add_phone', function (e) {
                            e.preventDefault();
                            $(document).each(function () {
                                if (inputcount < maxField) {
                                    inputcount++;
                                    $('#imput_phone').append('<input type="tel" name="phonecompany[' + inputcount + '][phone]" id="phone_input" class="company-name__input form__input" placeholder="+ 7 (999) 999-99-99" maxlength="17">');
                                } else {
                                    alert('привышен лимит!')
                                }
                            });
                        });

                        var input = document.getElementById('doc_file[0]');
                        var infoArea = document.getElementById('file_input_fild[0]');

                        input.addEventListener('change', showFileName);

                        function showFileName(event) {

                            // the change event gives us the input it occurred in
                            var input = event.target;

                            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                            var fileName = input.files[0].name;
                            // use fileName however fits your app best, i.e. add it into a div
                            infoArea.value = fileName.split('.').slice(0, -1).join('.');
                        }
                    }
                });
            }

            $(document).on('submit', '#company', function (e) {
                e.preventDefault();
                let EditFormData = new FormData($('#company')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "create_and_update_company",
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
                            alert('Информация успешно обновлена!')
                            $('#update_msgList').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });

            $(document).on('click', '#submitbutton', function (e) {
                e.preventDefault();
                let EditFormData = new FormData($('#documents')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "add_file",
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
                            alert('Информация успешно обновлена!')
                            $('#update_msgList').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            i = 0;
                            fetchcompany();
                        }

                    }

                });
            });

            $(document).on('click', '#deletefile', function (e) {
                e.preventDefault();
                var id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/deletefile/" + id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });

            $('#image_worker').change(function () {

                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#photo-worker-show').html("")
                    $('#photo-worker-show').attr('src', e.target.result);
                    $(this).parent().css('border', 0);
                }

                reader.readAsDataURL(this.files[0]);

            });

            $(document).on('click', '#add_new_worker', function (e) {
                e.preventDefault();
                let data = new FormData($('#create_new_worker')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/create_worker",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#success_message').html("")
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            alert('Пользователь успешно создан данные были высланы на указанную почту!')
                            $('#create_new_worker').find('input').val("");
                            // $('#photo-user').val("");
                            // $('#user-admin').prop('checked', false);
                            // $('#user-member').prop('checked', false);
                            // $('#user-local').prop('checked', false);
                            // $('#photo_create').attr("src", "/img/load.png");
                            // $('.modal').removeClass('active');
                            // $('#popup-add-user').removeClass('active');
                            // $('body').removeClass('inactive');
                            // $('body').removeAttr('style');
                            fetchcompany();

                        }
                    }
                });
            });
            addmoreimputs();

            function addmoreimputs() {
                var maxFileField = 4;
                $(document).on('click', '#add_new_imput', function (e) {
                    e.preventDefault();
                    $(document).each(function (key, value) {
                        i++;
                        if (i < maxFileField) {
                            $('#file_inputs_list').append('<div class="company-docs__input-wrapper" id="item_file">\
                                        <input type="text" name="doc_name[' + i + ']" id="file_input_fild[' + i + ']" class="company-docs__input form__input" placeholder="Свидетельство о регистрации.pdf" maxlength="100">\
                                        <label class="popup-add-doc__btn">\
                                        <input type="file" name="doc_file[' + i + ']" id="doc_file[' + i + ']" class="popup-add-doc__file">\
                                        Выбрать файл\
                                    </label>\
                                </div>');
                        } else {
                            alert('Привышен лимит!');
                        }
                        $(document).on('click', '.ic_close', function () {
                            document.getElementById('item_file').remove();
                            i = 0;
                        });
                        var input = document.getElementById('doc_file[' + i + ']');
                        var infoArea = document.getElementById('file_input_fild[' + i + ']');

                        input.addEventListener('change', showFileName);

                        function showFileName(event) {

                            // the change event gives us the input it occurred in
                            var input = event.target;

                            // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
                            var fileName = input.files[0].name;
                            // use fileName however fits your app best, i.e. add it into a div
                            infoArea.value = fileName.split('.').slice(0, -1).join('.');
                        }
                    });
                });
            }

            $(document).on('click', '#delete_worker', function (e) {
                e.preventDefault();
                var id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete_worker/" + id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });

            $(document).on('click', '#unarch_worker', function (e) {
                e.preventDefault();
                var id = $(this).val();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "GET",
                    url: "/return_worker/" + id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });
            $(document).on('click', '#delete_worker_final', function (e) {
                e.preventDefault();
                var id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete_worker_final/" + id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });

            $(document).on('click', '#edit_worker', function (e) {
                e.preventDefault();
                var worker_id = $(this).val();
                $.ajax({
                    type: "GET",
                    url: "/edit_worker/" + worker_id,
                    success: function (response) {
                        if (response.status == 404) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#edit_worker_id').val(response.user.id);
                            $('#photo-worker-show_edit').attr("src", '/uploads/units/' + response.user.image);
                            $('#surname_worker_edit').val(response.user.surname);
                            $('#name_worker_edit').val(response.user.name);
                            $('#patronymic_worker_edit').val(response.user.patronymic);
                            $('#email_worker_edit').val(response.user.email);
                            $('#phone_worker_edit').val(response.user.phone);
                            $('#designed_sections_edit').val(response.user.designed_sections);
                            $('#experience_worker_edit').val(response.user.experience);
                            $('#salary_worker_edit').val(response.user.salary);
                        }

                    }
                });
            });

            $('#image_worker_edit').change(function () {

                let reader = new FileReader();

                reader.onload = (e) => {
                    $('#photo-worker-show_edit').html("")
                    $('#photo-worker-show_edit').attr('src', e.target.result);
                    $(this).parent().css('border', 0);
                }

                reader.readAsDataURL(this.files[0]);

            });

            $(document).on('submit', '#user_edit_form', function (e) {
                e.preventDefault();
                var id = $('#edit_worker_id').val();
                let UpdateFormData = new FormData($('#user_edit_form')[0]);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_worker/" + id,
                    data: UpdateFormData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 400) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#update_msgList').html("");
                            alert('Пользователь успешно обновлен');
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            $('.update_student').text('Update');
                            $('#user_edit_form').find('input').val("");
                            $('#popup-info-unit').removeClass('active');
                            $('.modal').removeClass('active');
                            fetchcompany();
                        }
                    }
                });
            });

            $(document).on('submit', '#mouth_cost_form', function (e) {
                e.preventDefault();
                let data = new FormData($('#mouth_cost_form')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/create_article_mouth",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#success_message').html("")
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            $('#popup-add-state').removeClass('active');
                            $('.modal').removeClass('active');
                            alert('Статья успешно созданна!')
                            $('#mouth_cost_form').find('#title_mouth_cost').val("");
                            // $('#photo-user').val("");
                            // $('#user-admin').prop('checked', false);
                            // $('#user-member').prop('checked', false);
                            // $('#user-local').prop('checked', false);
                            // $('#photo_create').attr("src", "/img/load.png");
                            // $('.modal').removeClass('active');
                            // $('#popup-add-user').removeClass('active');
                            // $('body').removeClass('inactive');
                            // $('body').removeAttr('style');
                            fetchcompany();

                        }
                    }
                });
            });

            $(document).on('submit', '#ones_cost_form', function (e) {
                e.preventDefault();
                let data = new FormData($('#ones_cost_form')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/create_article_ones",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#success_message').html("")
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            alert('Статья успешно созданна!')
                            $('#popup-add-ones-state').removeClass('active');
                            $('.modal').removeClass('active');
                            $('#ones_cost_form').find('#title_ones_cost_id').val("");
                            // $('#photo-user').val("");
                            // $('#user-admin').prop('checked', false);
                            // $('#user-member').prop('checked', false);
                            // $('#user-local').prop('checked', false);
                            // $('#photo_create').attr("src", "/img/load.png");
                            // $('.modal').removeClass('active');
                            // $('#popup-add-user').removeClass('active');
                            // $('body').removeClass('inactive');
                            // $('body').removeAttr('style');
                            fetchcompany();

                        }
                    }
                });
            });

            $(document).on('submit', '#mouth_costs', function (e) {
                e.preventDefault();
                let data = new FormData($('#mouth_costs')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_article_mouth",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#success_message').html("")
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            alert('Цены обновленны!')
                            // $('#photo-user').val("");
                            // $('#user-admin').prop('checked', false);
                            // $('#user-member').prop('checked', false);
                            // $('#user-local').prop('checked', false);
                            // $('#photo_create').attr("src", "/img/load.png");
                            // $('.modal').removeClass('active');
                            // $('#popup-add-user').removeClass('active');
                            // $('body').removeClass('inactive');
                            // $('body').removeAttr('style');
                            fetchcompany();

                        }
                    }
                });
            });

            $(document).on('submit', '#cost_ones_form', function (e) {
                e.preventDefault();
                let data = new FormData($('#cost_ones_form')[0]);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    enctype: 'multipart/form-data',
                    url: "/update_article_ones",
                    data: data,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        if (response.status == 400) {
                            var errorsArr = [];
                            $('#saveForm_errList').html("");
                            $('#saveForm_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values) {
                                errorsArr.push(err_values)
                            });
                            alert(errorsArr.join("\n"))
                        } else {
                            $('#success_message').html("")
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            alert('Цены обновленны!')
                            // $('#photo-user').val("");
                            // $('#user-admin').prop('checked', false);
                            // $('#user-member').prop('checked', false);
                            // $('#user-local').prop('checked', false);
                            // $('#photo_create').attr("src", "/img/load.png");
                            // $('.modal').removeClass('active');
                            // $('#popup-add-user').removeClass('active');
                            // $('body').removeClass('inactive');
                            // $('body').removeAttr('style');
                            fetchcompany();

                        }
                    }
                });
            });

            $(document).on('click', '#delete_mouth_article', function (e) {
                e.preventDefault();
                var id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete_article/" + id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });

            $(document).on('click', '#delete_ones_article', function (e) {
                e.preventDefault();
                var id = $(this).val();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/delete_article/" + id,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response);
                        if (response.status == 404) {
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                        } else {
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success');
                            $('#success_message').text(response.message);
                            fetchcompany();
                        }
                    }
                });
            });
        });
    </script>
@endsection
