<!DOCTYPE html>
<html lang="ru-ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/underscore-min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css?ver=1522672390">
    <script type="text/javascript"
            src="/js/script.js?v=1522672961"></script> {{-- <script type="text/javascript">tobiz.blocks = [];</script>--}}
    <link href="/css/mobile.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/flipclock.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="/js/flipclock.js"></script>


    <title></title>
    <script type="text/javascript">
        var clock;

        $(document).ready(function () {
            var clock;

            clock = $('.clock').FlipClock({
                clockFace: 'DailyCounter',
                autoStart: false,
                language: 'ru',
                callbacks: {
                    stop: function () {
                        $('.message').html('Турнір закінчився')
                    }
                }
            });
            clock.setCountdown(true);
            clock.setTime({{ $time }});

            clock.start();

        });

       /* $(document).ready(function(){

                $(".popup_thanks").show();
        });*/
    </script>

    <style id="page_style">
        .section .title {
            font-family: El Messiri, sans-serif;
        }

        .

        "\n"
    </style>
    <script src='https://www.google.com/recaptcha/api.js'></script>


</head>
<body class="editor_false">

<div id="wrapper">
    <div class="hide_line  section section107  " style="background-color:#ffffff;  background-image:url(/img/null.png);"
         data-id="508574" id="b_508574"><a name="a_508574"></a>
        <div class="section_inner">

            <div class="logo_img"><img src="/img/200x0/default_logo.jpg" alt=""></div>
            <div class="menu-and-phone-and-btn">
                {{--<div class="btn1 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">
                    Зателефонуйте мені
                </div>--}}
                <div class="menu1">
                    <ul>
                        <li><a href="#anchor1" title="Про сайт">Про сайт</a></li>
                        <li><a href="#anchor3" title="Турнірна таблиця">Турнірна таблиця</a></li>
                        <li><a href="#anchor4" title="Контакти">Контакти</a></li>
                    </ul>
                </div>
                <div class="phone1 ">+380978196656</div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>

            <div class="popup_form">
                <div class="popup_form_inner">
                    <div class="popup_form_close">X</div>
                    <div class="popup_form_title">Заявка для участі в турнірі</div>
                    <form action="handler.php" enctype="multipart/form-data" method="post">
                        <div class="form1"><input type="hidden" name="Название формы" value="">
                            <div class="field">
                                <div class="field_title">Ім'я</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="first_name"
                                                                placeholder="Ведіть ім'я"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Прізвище</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="last_name"
                                                                placeholder="Ведіть прізвище"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Стать</div>
                                <div class="field_description"></div>
                                <div class="field_input"><select>
                                        <option>Чоловіча</option>
                                        <option>Жіноча</option>
                                    </select></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Ведіть E-mail</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="email"
                                                                placeholder="Ведіть E-mail"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Ведіть номер телефону</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required"
                                                                name="Введите номер телефона"
                                                                placeholder="Ведіть номер телефону"></div>
                            </div>
                            <div class="field">
                                <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                data-action="thanks" data-url="" data-amount="0"
                                                                value="Зареєструватись"
                                                                style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; ">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="popup_thanks">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Дякую за заявку!</div>
                    <div class="popup_thanks_text">Заявка відправлена. З вами зв'яжуться в ближайший час</div>
                </div>
            </div>

        </div>
    </div>

    <div class="section section153   fixed "
         style="background-color:#ffffff; background-image:url(/storage/image/fon.jpg);" data-id="508575" id="b_508575">
        <a name="a_508575"></a>

        <div class="dark"></div>
        <div class="noise" style="background-image:url(/img/null.png);"></div>
        <div class="section_inner  big   ">
            <div class="layer">
                <div class="title  "><p>Програмно-апаратний комплекс для
                        підтримки змагань зі спортивного
                        орієнтування</p></div>
                <div class="sub_title  "><p>Кваліфікаційна робота студента групи І-14</p></div>

                <div class="btn1 surround" style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">
                    Заявка для участі
                </div>

            </div>

            <div class="popup_form">
                <div class="popup_form_inner">
                    <div class="popup_form_close">X</div>
                    <div class="popup_form_title">Заявка для участі в турнірі</div>
                    <form action="{{ route('storeParticipant') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form1">
                            <div class="field">
                                <div class="field_title">Ім'я</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="first_name"
                                                                placeholder="Ведіть ім'я"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Прізвище</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required" name="last_name"
                                                                placeholder="Ведіть прізвище"></div>
                            </div>
                            <div class="field" style="text-align: center;">
                                <div class="field_title">Стать</div>
                                <div class="field_description"></div>
                                <div class="field_input"><select>
                                        <option>Чоловіча</option>
                                        <option>Жіноча</option>
                                    </select></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Дата народження</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="date" required="required" name="birth"
                                                                placeholder="Дата народження"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Ведіть E-mail</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="email" required="required" name="email"
                                                                placeholder="Ведіть E-mail"></div>
                            </div>
                            <div class="field">
                                <div class="field_title">Ведіть номер телефону</div>
                                <div class="field_description"></div>
                                <div class="field_input"><input type="text" required="required"
                                                                name="phone"
                                                                placeholder="Ведіть номер телефону"></div>
                            </div>

                            <div class="field" style="text-align: center;">
                                <div class="g-recaptcha" style="display: inline-block;"
                                     data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display: block;">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
                                @endif
                            </div>

                            <div class="field">
                                <div class="field_input"><input type="submit" class="submit_btn surround"
                                                                data-action="thanks" data-url="" data-amount="0"
                                                                value="Зареєструватись"
                                                                style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; ">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


            <div class="popup_thanks show">
                <div class="popup_thanks_inner">
                    <div class="popup_thanks_close">X</div>
                    <div class="popup_thanks_title">Дякую за заявку!</div>
                    <div class="popup_thanks_text">Заявка відправлена. З вами зв'яжуться для надання інструкцій</div>
                </div>
            </div>

        </div>
    </div>

    <div class="hide_line  section section226 " style="background-color:#FFFFFF;  background-image:url(/img/null.png);"
         data-id="508593" id="b_508593"><a name="anchor1"></a>
        @if(empty($active))
            <div class="title  ">Наступний турнір через</div>
        @else
            <div class="title message">До закінчення турніру</div>
        @endif
        <div class="clock" style="margin: 0 auto; max-width: 623px;margin-top: 5em;"></div>
    </div>
    <div class="message" style="text-align: center"></div>

</div>

<div class="hide_line  section   section128  " style="background-color:#ffffff;  background-image:url(/img/null.png);"
     data-id="508595" id="b_508595"><a name="a_508595"></a>
    <div class="section_inner">
        <div class="title  ">Елементи техніки</div>
        <div class="sub_title  ">Процес орієнтування представляє собою комплекс дій та складається з:</div>

        <div class="arr1">
            <div class="col_3">


                <div class="ico1   radius     border   shadow  "><i class="fa fa-map-marker" style="color:#3F7B16;"></i>
                </div>

                <div class="title1"><p>Отримання інформації в результаті читаня карти, спостереження місцевості та дій
                        інших учасників</p></div>


            </div>
            <div class="col_3">


                <div class="ico2  radius     border   shadow  "><i class="fa fa-cogs" style="color:#3F7B16;"></i></div>

                <div class="title2"><p>Аналіз інформації, тобто порівняння та зіставлення даних</p></div>
            </div>
            <div class="col_3 last">
                <div class="ico3   radius     border   shadow  "><i class="fa fa-certificate"
                                                                    style="color:#3F7B16;"></i></div>
                <div class="title3"><p>Приняття рішення про напрям бігу, швидкість руху, подальші дії</p></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="hide_line section section164  " style="background-color:#ffffff;  background-image:url(/img/null.png);"
     data-id="508613" id="b_508613"><a name="a_508613"></a>
    <div class="section_inner ">
        <div class="col pcenter">
            <div class="sub_title  ">За будь-яким питанням звертайтейсь за телефоном +380978196656 або за електронною
                адресою oleg.vasilev1991@gmail.com
            </div>
            <div class="btn1 surround" style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">
                Заявка для участі
            </div>

        </div>
        <div class="clear"></div>

        <div class="popup_form">
            <div class="popup_form_inner">
                <div class="popup_form_close">X</div>
                <div class="popup_form_title">Заявка для участі в турнірі</div>
                <form action="{{ route('storeParticipant') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form1">
                        <div class="field">
                            <div class="field_title">Ім'я</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="text" required="required" name="first_name"
                                                            placeholder="Ведіть ім'я"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Прізвище</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="text" required="required" name="last_name"
                                                            placeholder="Ведіть прізвище"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Дата народження</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="date" required="required" name="birth"
                                                            placeholder="Дата народження"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Ведіть E-mail</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="email" required="required" name="email"
                                                            placeholder="Ведіть E-mail"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Ведіть номер телефону</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="text" required="required"
                                                            name="phone"
                                                            placeholder="Ведіть номер телефону"></div>
                        </div>

                        <div class="field" style="text-align: center;">
                            <div class="g-recaptcha" style="display: inline-block;"
                                 data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block;">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
                            @endif
                        </div>

                        <div class="field">
                            <div class="field_input"><input type="submit" class="submit_btn surround"
                                                            data-action="thanks" data-url="" data-amount="0"
                                                            value="Зареєструватись"
                                                            style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; ">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="popup_thanks">
            <div class="popup_thanks_inner">
                <div class="popup_thanks_close">X</div>
                <div class="popup_thanks_title">Дякую за заявку</div>
                <div class="popup_thanks_text">Заявка відправлена! З вами зв'яжуться для подальшої інструкції</div>
            </div>
        </div>

    </div>
</div>

<div class="hide_line section section148    img_zoom"
     style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508614" id="b_508614"><a
            name="a_508614"></a>
    <div class="section_inner">
        <div class="title  ">Галерея</div>
        <div class="sub_title  ">Як робився дипломний проект</div>

        <div class="arr1">
            <div class="image_box1  border   shadow  ">
                <img src="/storage/image/galery/3.JPG" alt="">
                <div class="overlay_image_box" data-link="">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box2  border   shadow  ">
                <img src="/storage/image/galery/4.JPG" alt="">
                <div class="overlay_image_box" data-link="">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box3  border   shadow  ">
                <img src="/storage/image/galery/5.JPG" alt="">
                <div class="overlay_image_box" data-link="">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box4  border   shadow  ">
                <img src="/storage/image/galery/6.JPG" alt="">
                <div class="overlay_image_box" data-link="">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
            <div class="image_box5  border   shadow  ">
                <img src="/storage/image/galery/8.JPG" alt="">
                <div class="overlay_image_box" data-link="">
                    <div class="overlay_image_title"></div>
                    <div class="overlay_image_descr"></div>
                </div>
            </div>
        </div>

        <div class="clear"></div>
    </div>
</div>

<div class="hide_line   section section151  " style="background-color:#ffffff;  background-image:url(/img/null.png);"
     data-id="508619" id="b_508619"><a name="a_508619"></a>
    <div class="section_inner">
        <div class="title  ">Наша команда</div>
        <div class="sub_title  ">Спеціалісти</div>

        <div class="arr1">
            <div class="col_4">
                <div class="image1  border   shadow  "><img src="/storage/image/1.JPG" alt=""></div>
                <div class="overlay_image_box ">
                    <div class="overlay_image_title title1">Олег Васильєв</div>
                    <div class="overlay_image_subtitle subtitle1">Адміністратор сайту</div>
                </div>
            </div>
            <div class="col_4">
                <div class="image2  border   shadow  "><img src="/storage/image/2.png" alt=""></div>
                <div class="overlay_image_box ">
                    <div class="overlay_image_title title2">Місце вакантне</div>
                    <div class="overlay_image_subtitle subtitle2">Судя</div>
                </div>
            </div>
            <div class="clear480"></div>
            <div class="col_4">
                <div class="image3  border   shadow  "><img src="/storage/image/2.png" alt=""></div>
                <div class="overlay_image_box ">
                    <div class="overlay_image_title title3">Місце вакантне</div>
                    <div class="overlay_image_subtitle subtitle3">Судя</div>
                </div>
            </div>
            <div class="col_4 last">
                <div class="image4  border   shadow  "><img src="/storage/image/2.png" alt=""></div>
                <div class="overlay_image_box ">
                    <div class="overlay_image_title title4">Місце вакантне</div>
                    <div class="overlay_image_subtitle subtitle4">Судя</div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>
    </div>
</div>

<div class="section section153   fixed " style="background-color:#ffffff; background-image:url(/storage/image/fon.jpg);"
     data-id="508622" id="b_508622"><a name="a_508622"></a>

    <div class="dark"></div>
    <div class="section_inner  ">
        <div class="layer">
            <div class="title  ">
                <div><br></div>
                Залишились питання?
            </div>
            <div class="sub_title  ">Залиште заявку на сайті або позвоніть за телефоном<br>+380978196656 і наш
                консультант відповість на питання
            </div>

            <div class="btn1 surround" style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">
                Заявка для участі
            </div>
        </div>

        <div class="popup_form">
            <div class="popup_form_inner">
                <div class="popup_form_close">X</div>
                <div class="popup_form_title">Заявка для участі в турнірі</div>
                <form action="{{ route('storeParticipant') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form1">
                        <div class="field">
                            <div class="field_title">Ім'я</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="text" required="required" name="first_name"
                                                            placeholder="Ведіть ім'я"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Прізвище</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="text" required="required" name="last_name"
                                                            placeholder="Ведіть прізвище"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Дата народження</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="date" required="required" name="birth"
                                                            placeholder="Дата народження"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Ведіть E-mail</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="email" required="required" name="email"
                                                            placeholder="Ведіть E-mail"></div>
                        </div>
                        <div class="field">
                            <div class="field_title">Ведіть номер телефону</div>
                            <div class="field_description"></div>
                            <div class="field_input"><input type="text" required="required"
                                                            name="phone"
                                                            placeholder="Ведіть номер телефону"></div>
                        </div>

                        <div class="field" style="text-align: center;">
                            <div class="g-recaptcha" style="display: inline-block;"
                                 data-sitekey="{{ env('CAPTCHA_SITE_KEY') }}"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="invalid-feedback" style="display: block;">
                <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
            </span>
                            @endif
                        </div>

                        <div class="field">
                            <div class="field_input"><input type="submit" class="submit_btn surround"
                                                            data-action="thanks" data-url="" data-amount="0"
                                                            value="Зареєструватись"
                                                            style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; ">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="popup_thanks">
            <div class="popup_thanks_inner">
                <div class="popup_thanks_close">X</div>
                <div class="popup_thanks_title">Дякую за заявку!</div>
                <div class="popup_thanks_text">Заявка відправлена. З вами зв'яжуться для подальшої інструкції</div>
            </div>
        </div>

    </div>
</div>

<div class="hide_line section section162   notext  "
     style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508623" id="b_508623"><a
            name="anchor4"></a>
    <div class="section_inner">
        <div class="title  ">Мої контакти</div>
        <div class="sub_title  "><p style="text-align: left;">м.Кривий Ріг<br>Телефон: +380978196656<br>Електронна
                адреса oleg.vasilev1991@gmail.com</p></div>
        <div class="text  hidden  ">Контактна інформація</div>
        <div class="clear"></div>
    </div>
</div>

<div class="hide_line section section119   " style="background-color:#ffffff;  background-image:url(/img/null.png);"
     data-id="508624" id="b_508624"><a name="a_508624"></a>
    <div class="section_inner">
        <div class="logo_img"><img src="/img/200x0/default_logo.jpg" alt=""></div>
        <div class="address-and-ua">
            <div class="address1">Кваліфікаційна робота<br>студента групи І-14 Васильєва Олега Юрійович</div>
        </div>
        <div class="phone-and-address">
            <div class="phone1 ">+380978196656</div>
        </div>
        <div class="clear"></div>

    </div>
</div>

{{--</div>--}}

</body>
</html>