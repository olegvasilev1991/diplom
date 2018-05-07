<!DOCTYPE html>
<html lang="ru-ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="/js/underscore-min.js"></script>
                {{--<script>window.tobiz = {"project_id":"47031","rep_id":"66461","user_id":"7","owner_email":"guilty.warriors1@gmail.com","user_email":"manager1@tobiz.net","bs":true,"t":"4","w":1,"basket_conf":null}</script>--}}
        <link rel="stylesheet" type="text/css" href="/css/style.css?ver=1522672390">                <script type="text/javascript" src="/js/script.js?v=1522672961"></script>       {{-- <script type="text/javascript">tobiz.blocks = [];</script>--}}
        
                
                            <meta content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
            <link href="/css/mobile.css" rel="stylesheet">
                    
        
                    <meta name="description" content="" />
            <meta name="keywords" content="" />
            <title></title>


           {{-- <script type="text/javascript">
                $(function () {
                    $('body').on('submit', 'form[action="handler.php"]', function (event) {
                        event.preventDefault();
                        var this_form = $(this);
                        if (!$(this).children("input[name=project_id]").length)
                            $(this).prepend('<input type="hidden" name="project_id" value="' + window.tobiz.project_id + '">');
                        if (!$(this).children("input[name=page_id]").length)
                            $(this).prepend('<input type="hidden" name="page_id" value="' + window.tobiz.rep_id + '">');
                        if (!$(this).children("input[name=referrer]").length)
                            $(this).prepend('<input type="hidden" name="referrer" value="' + document.referrer + '">');
                        if (!$(this).children("input[name=user_id]").length)
                            $(this).prepend('<input type="hidden" name="user_id" value="' + window.tobiz.user_id + '">');

                        if ($(this).find("[data-action]").size()) {
                            console.log(123);
                            $(this).prepend('<input type="hidden" name="action" value="' + $(this).find("[data-action]").data('action') + '">');
                            $(this).prepend('<input type="hidden" name="amount" value="' + $(this).find("[data-action]").data('amount') + '">');
                            $(this).prepend('<input type="hidden" name="url" value="' + $(this).find("[data-action]").data('url') + '">');
                        } else {
                            console.log('not found');
                        }
                        var formData = new FormData($(this)[0]);
                        var this_block = $(this).closest('.section');
                        $.ajax({
                            dataType: "json",
                            type: "POST",
                            url: "/handler.php",
                            data: formData,
                            async: false,
                            cache: false,
                            contentType: false,
                            processData: false
                        }).done(function (data) {
                            if (data.status == 'OK') {
                                alert(data.msg);
                                this_form.each(function () {
                                    $(this)[0].reset();
                                })
                                $('.popup_form').hide();
                            }
                            if (data.status == 'ERROR') {
                                alert(data.msg);
                            }
                            if (data.status == 'JC') {
                                        $('body').append(data.form);
                                $('#jc_form').submit();
                                this_form.each(function () {
                                    $(this)[0].reset();
                                })
                            }
                            if (data.status == 'SR') {
                                        $('body').append(data.form);
                                $('#sr_form').submit();
                                this_form.each(function () {
                                    $(this)[0].reset();
                                })
                            }
                            if (data.status == 'GR') {
                                        $('body').append(data.form);
                                $('#gr_form').submit();
                                this_form.each(function () {
                                    $(this)[0].reset();
                                })
                            }
                            if (data.status == 'RK') {
                                        this_form.each(function () {
                                    $(this)[0].reset();
                                })
                                window.location.href = data.url;
                            }
                            if (data.status == 'redirect') {
                                        this_form.each(function () {
                                    $(this)[0].reset();
                                })


                                window.location.href = data.url;
                            }
                            if (data.status == 'thanks') {
                                        this_block.find('.popup_thanks').show();
                                this_form.each(function () {
                                    $(this)[0].reset();
                                })
                                $('.popup_form').hide();
                                this_block.find('.extra_info_block_wrapper').hide();
                            }
                            if (data.status == 'thanks_order_complete') {
                                        this_block.find('.popup_thanks').show();
                                this_form.each(function () {
                                    $(this)[0].reset();
                                })
                                window.basket.clean();
                                window.basket.hideForm();
                                window.basket.renderForm();
                                window.basket.renderBtn();
                                window.basket.hideBtn();
                                alert('Спасибо ваш заказ успешно оформлен!');
                                $('.popup_form').hide();
                            }
                        }).error(function (xhr, ajaxOptions, thrownError) {
                            console.log(xhr.status);
                            console.log(thrownError)
                        });
                    })
                })
            </script>--}}
<style id="page_style">
.section .title{font-family:El Messiri, sans-serif;}."\n"</style>
        <script src='https://www.google.com/recaptcha/api.js'></script>

    
</head>
<body class="editor_false">
        <div id="wrapper">
<div class="hide_line  section section107  " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508574" id="b_508574"><a name="a_508574"></a>
                                    <div class="section_inner">
                                            
                                                
                                                        <div class="logo_img"><img src="/img/200x0/default_logo.jpg" alt=""></div>
                                                
                                            
                                            <div class="menu-and-phone-and-btn">
                                                            <div class="btn1 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Зателефонуйте мені</div>
                                                            <div class="menu1">
                                                                    <ul><li><a href="#anchor1" title="О НАС">Про сайт</a></li><li><a href="#anchor3" title="ТЕСТ">тест</a></li><li><a href="#anchor4" title="Контакти">Контакти</a></li></ul>
                                                            </div>
                                                            <div class="phone1 ">+380978196656</div>
                                                            <div class="clear"></div>
                                            </div>
                                            <div class="clear"></div>
                                                
                                                    <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Заповніть форму</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form1"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Ведіть ім'я</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Ведіть ім'я"></div></div><div class="field"><div class="field_title">Ведіть номер телефону</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Ведіть номер телефону"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Замовити дзвінок" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
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

<div class="section section153   fixed " style="background-color:#ffffff; background-image:url(/storage/image/fon.jpg);" data-id="508575" id="b_508575"><a name="a_508575"></a>
							
							<div class="dark"></div>
							<div class="noise" style="background-image:url(/img/null.png);"></div>
							<div class="section_inner  big   ">
								<div class="layer"><div class="title  "><p>Програмно-апаратний комплекс для
                                            підтримки змагань зі спортивного
                                            орієнтування</p></div>
								<div class="sub_title  "><p>Кваліфікаційна робота студента групи І-14</p></div>
								
									<div class="btn1 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Заявка для участі</div>
									<div class="btn_descr">тесттест<br></div>
								</div>
								
                                                                        <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Заявка для участі в турнірі</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form1"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Ведіть ім'я</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Ведіть ім'я"></div></div><div class="field"><div class="field_title">Ведіть E-mail</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите E-mail" placeholder="Ведіть E-mail"></div></div><div class="field"><div class="field_title">Ведіть номер телефону</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Ведіть номер телефону"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Зареєструватись" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
                                </form>
                            </div>
                    </div>
                
                                                                        
								<div class="popup_thanks">
                        <div class="popup_thanks_inner">
                            <div class="popup_thanks_close">X</div>
                            <div class="popup_thanks_title">Дякую за заявку!</div>
                            <div class="popup_thanks_text">Заявка відправлена. З вами зв'яжуться для надання інструкцій</div>
                        </div>
                    </div>
                
							</div>
						</div>

<div class="hide_line  section section226 " style="background-color:#FFFFFF;  background-image:url(/img/null.png);" data-id="508593" id="b_508593"><a name="anchor1"></a>
							{{--<div class="section_inner">  
								<div class="title  ">Спортивное ориентирование</div>
								<div class="sub_title  ">Что такое спортивное ориентирование?</div>
								  
									<div class="arr1 size_450x350">
										
											<div class="image1 size_450x350 left  border   shadow  "><img src="/img/450x350/d90249ce45f2c553636a3c2d3d8744a5.jpg" alt=""></div>
										
                                                                                <div class="txt1"><p>Некоторые современные виды спорта составлены из нескольких самостоятельных видов. Например, биатлон (стрельба, лыжные гонки), триатлон (бег, плавание, велосипед), или, скажем, современное пятиборье (бег, фехтование, стрельба, плавание и конный спорт).</p><p><br></p><p>&nbsp;Спортивное ориентирование не совсем такой вид спорта, ведь одна из его составляющих <span style="font-family:arial">–</span> ориентирование. Таким спортом ранее не занимались. Однако, бег по пересеченной и насыщенной различными географическими, биологическими, естественными и искусственными объектами местности с использованием компаса и карты.</p><p><br></p><p>Техника спортивного ориентирования представляет из себя не просто сумму техники отдельных компонентов. Фактически компоненты влияют друг на друга в такой сте­пени, что приходится говорить уже о новой технике более высокого уровня, чем техника отдельных компонентов.</p></div>
										<div class="clear"></div>
									</div>
								
							</div>--}}
						</div>

{{--<div class="hide_line   section section132 " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508594" id="b_508594"><a name="a_508594"></a>
							<div class="section_inner">
								<div class="title  ">Взаимовлияние местности</div>
								<div class="sub_title  hidden   ">Рыбный текст</div>
								<div class="text"><p>Техника бега ориентировщика сходна с техникой кроссового бега. Но не каждый кроссмен пробежит маркированную дистанцию ориентирования (не отвлекаясь на объекты) так же быстро, как ориентировщик такой же квалификации преодолеет дистанцию, характерную для кросса. Все дело в специальной технике бега по различной местности.</p><p><br></p><p><span style="font-family:arial">Ориентировщик встречает на трассе различные формы рельефа, типа грунта, отчего у него формируется гибкий стиль бега, который не очень годится для стадиона, но зато позволяет сохранять скорость, как на болоте, так и на крутом склоне. Его мышцы, связки, вестибулярный аппарат приспособлены к этому.</span></p></div>
							</div>
						</div>--}}

<div class="hide_line  section   section128  " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508595" id="b_508595"><a name="a_508595"></a>
							<div class="section_inner">
								<div class="title  ">Елементи техніки</div>
								<div class="sub_title  ">Процес орієнтування представляє собою комплекс дій та складається з:</div>
								  
									<div class="arr1">
										<div class="col_3">
											
											
											<div class="ico1   radius     border   shadow  "><i class="fa fa-map-marker" style="color:#3F7B16;"></i></div>
											
											<div class="title1"><p>Отримання інформації в результаті читаня карти, спостереження місцевості та дій інших учасників</p></div>

                                                                                        
										</div>
										<div class="col_3">
											
											
											<div class="ico2  radius     border   shadow  "><i class="fa fa-cogs" style="color:#3F7B16;"></i></div>
											
											<div class="title2"><p>Аналіз інформації, тобто порівняння та зіставлення даних</p></div>


                                                                                        
										</div>
										<div class="col_3 last">
											
											
											<div class="ico3   radius     border   shadow  "><i class="fa fa-certificate" style="color:#3F7B16;"></i></div>
											
											<div class="title3"><p>Приняття рішення про напрям бігу, швидкість руху, подальші дії</p></div>

										</div>
										<div class="clear"></div>
                                                                              {{--  <div class="extra_info_block_wrapper">
                                                                                    <div class="extra_info_block">
                                                                                        <div class="close">Х</div>    
                                                                                        <div class="left"><img src="/img/400x400/image_247.jpg" alt="">
                                                                                            
                                                                                        </div>    
                                                                                        <div class="right">
                                                                                            <div class="extra_info1"><span style="font-size:28px;">Название товара<br></span>Подробное описание продукта.<br>Здесь вы можете расписать:<ul><li>свойства товара,<br type="_moz"></li><li>параметры товара,<br type="_moz"></li><li>описание товара,</li><li>наличие на складе,</li><li>цвет,</li><li>количество.<br></li></ul><p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>
                                                                                            
                                                                                            <div class="btn1x surround " style="background-color:#3F7B16; ">Узнать подробнее</div>
                                                                                        </div>    
                                                                                        <div class="clear"></div>
                                                                                            
                                                                                    </div>
                                                                                </div>--}}
                                                                                {{--<div class="extra_info_block_wrapper">
                                                                                    <div class="extra_info_block">
                                                                                        <div class="close">Х</div>
                                                                                        <div class="left"><img src="/img/400x400/image_220.jpg" alt="">
                                                                                            
                                                                                        </div>    
                                                                                        <div class="right">
                                                                                            <div class="extra_info2"><span style="font-size:28px;">Название товара<br></span>Подробное описание продукта.<br>Здесь вы можете расписать:<ul><li>свойства товара,<br type="_moz"></li><li>параметры товара,<br type="_moz"></li><li>описание товара,</li><li>наличие на складе,</li><li>цвет,</li><li>количество.<br></li></ul><p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>
                                                                                            
                                                                                            <div class="btn2x surround " style="background-color:#3F7B16; ">Узнать подробнее</div>
                                                                                        </div>
                                                                                        <div class="clear"></div>
                                                                                            
                                                                                    </div>
                                                                                </div>--}}
                                                                                {{--<div class="extra_info_block_wrapper">
                                                                                    <div class="extra_info_block">
                                                                                        <div class="close">Х</div>
                                                                                        <div class="left"><img src="/img/400x400/image_286.jpg" alt="">
                                                                                        
                                                                                            
                                                                                        </div>    
                                                                                        <div class="right">
                                                                                            <div class="extra_info3"><span style="font-size:28px;">Название товара<br></span>Подробное описание продукта.<br>Здесь вы можете расписать:<ul><li>свойства товара,<br type="_moz"></li><li>параметры товара,<br type="_moz"></li><li>описание товара,</li><li>наличие на складе,</li><li>цвет,</li><li>количество.<br></li></ul><p>Напишите их тут. И будет у вас не просто сайт, а интернет-магазин. <br></p></div>
                                                                                            
                                                                                            <div class="btn3x surround " style="background-color:#3F7B16; ">Узнать подробнее</div>
                                                                                        </div>    
                                                                                        <div class="clear"></div>    
                                                                                            
                                                                                    </div>
                                                                                </div>--}}
									</div> 
								{{--	<div class="popup_thanks">
                        <div class="popup_thanks_inner">
                            <div class="popup_thanks_close">X</div>
                            <div class="popup_thanks_title">Спасибо за заявку!</div>
                            <div class="popup_thanks_text">Заявка отправлена. Наш менеджер свяжется с Вами в ближайшее время.</div>
                        </div>
                    </div>--}}
                
								
							</div>
						</div>

{{--<div class="hide_line  section section307 " style="background-color:#FFFFFF;  background-image:url(/img/null.png);" data-id="508610" id="b_508610"><a name="anchor1"></a>
                        <div class="section_inner">
                                <div class="title  ">Абонементы и цены</div>
                                <div class="sub_title  ">Ниже представлена информация о ценах:</div>
                                <div class="col1 col">
                                <div class="image1   border   shadow  "><img src="/img/300x150/9b82f5af48c06a97a7221cd540e4732b.jpg" alt=""></div>
                                    <div class="col_title col_title_1  "><p style="text-align:center"><span style="font-size: 20px;">Базовый курс</span></p></div>
                                      
                                        <div class="arr1">
                                            <div class="item">
                                                
                                                <div class="item item_title">Ежедневные походы</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr1">
                                            <div class="item">
                                                
                                                <div class="item item_title">Личный инструктор</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr1">
                                            <div class="item">
                                                
                                                <div class="item item_title">Учебная программа</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr1">
                                            <div class="item">
                                                
                                                <div class="item item_title"><p style="text-align:center"><span style="font-size:24px">4990</span></p></div>
                                            </div>
                                        </div> 
                                    
                                    <a href="undefined" class="btn1 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Записаться сейчас</a>
                                    
                                    
                                        <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Оставить  заявку</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form1"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Введите имя</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Введите имя"></div></div><div class="field"><div class="field_title">Введите E-mail</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите E-mail" placeholder="Введите E-mail"></div></div><div class="field"><div class="field_title">Введите номер телефона</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Введите номер телефона"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Отправить" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
                                </form>
                            </div>
                    </div>
                
                                    
                                    
                                </div>
                                <div class="col2  col">
                                    <div class="image2   border   shadow  "><img src="/img/300x150/ba40159946b612a278c5581495ce8b36.jpg" alt=""></div>
                                    <div class="col_title col_title_2  "><p style="text-align:center"><span style="font-size:20px">Расширеный курс</span></p></div>
                                      
                                        <div class="arr2">
                                            <div class="item">
                                                
                                                <div class="item item_title">Ежедневные походы</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr2">
                                            <div class="item">
                                                
                                                <div class="item item_title">Личный инструктор</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr2">
                                            <div class="item">
                                                
                                                <div class="item item_title">Учебная программа</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr2">
                                            <div class="item">
                                                
                                                <div class="item item_title"><p style="text-align:center"><span style="font-size:24px">19990</span></p></div>
                                            </div>
                                        </div> 
                                    
                                    <a href="undefined" class="btn2 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Записаться сейчас</a>
                                    
                                        <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Оставить  заявку</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form2"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Введите имя</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Введите имя"></div></div><div class="field"><div class="field_title">Введите E-mail</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите E-mail" placeholder="Введите E-mail"></div></div><div class="field"><div class="field_title">Введите номер телефона</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Введите номер телефона"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Отправить" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
                                </form>
                            </div>
                    </div>
                
                                    
                                </div>
                                <div class="col3  col">
                                    <div class="image3   border   shadow  "><img src="/img/300x150/864123e8d5ac37b533a049152c403f13.jpg" alt=""></div>
                                    <div class="col_title col_title_3  "><p style="text-align:center"><span style="font-size:20px">Ускореный курс</span></p></div>
                                      
                                        <div class="arr3">
                                            <div class="item">
                                                
                                                <div class="item item_title">Ежедневные походы</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr3">
                                            <div class="item">
                                                
                                                <div class="item item_title">Личный инструктор</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr3">
                                            <div class="item">
                                                
                                                <div class="item item_title">Учебная программа</div>
                                            </div>
                                        </div> 
                                      
                                        <div class="arr3">
                                            <div class="item">
                                                
                                                <div class="item item_title"><p style="text-align:center"><span style="font-size:24px">39990</span></p></div>
                                            </div>
                                        </div> 
                                    
                                    <a href="undefined" class="btn3 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Записаться сейчас</a>
                                    
                                        <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Оставить  заявку</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form3"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Введите имя</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Введите имя"></div></div><div class="field"><div class="field_title">Введите E-mail</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите E-mail" placeholder="Введите E-mail"></div></div><div class="field"><div class="field_title">Введите номер телефона</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Введите номер телефона"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Отправить" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
                                </form>
                            </div>
                    </div>
                
                                    
                                </div>
                                <div class="clear"></div>
                                <div class="popup_thanks">
                        <div class="popup_thanks_inner">
                            <div class="popup_thanks_close">X</div>
                            <div class="popup_thanks_title">Дякую за заявку!</div>
                            <div class="popup_thanks_text">Заявка відправлена. З вами зв'яжуться для подальшої інструкції.</div>
                        </div>
                    </div>
                
                                    
                        </div>
                </div>--}}

<div class="hide_line section section164  " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508613" id="b_508613"><a name="a_508613"></a>
							<div class="section_inner ">
								<div class="col pcenter">
									<div class="sub_title  ">За будь-яким питанням звертайтейсь за телефоном +380978196656 або за електронною адресою oleg.vasilev1991@gmail.com</div>
									<div class="btn1 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Оставить заявку</div>
									<div class="btn_descr  ">блаблабла</div>
								</div>
								<div class="clear"></div>
                                                                
                                                                    <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Заявка для участі в турнірі</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form1"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Ведіть ім'я</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Ведіть ім'я"></div></div><div class="field"><div class="field_title">Ведіть E-mail</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите E-mail" placeholder="Ведіть E-mail"></div></div><div class="field"><div class="field_title">Ведіть номер телефону</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Ведіть номер телефону"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Зареєструватись" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
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

<div class="hide_line section section148    img_zoom" style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508614" id="b_508614"><a name="a_508614"></a>
							<div class="section_inner">
								<div class="title  ">Галерея</div>
								<div class="sub_title  ">Як робився дипломний проект</div>
								  
									<div class="arr1">
										<div class="image_box1  border   shadow  ">
											<img src="/img/460x350/edf8d95aad6b2b3aa5978cf667e88cb8.jpg" alt="">
											<div class="overlay_image_box" data-link="">
												<div class="overlay_image_title"></div>
												<div class="overlay_image_descr"></div>
											</div>
										</div>
										<div class="image_box2  border   shadow  ">
											<img src="/img/220x165/61a286edfe53666f54092931c6a406e8.jpg" alt="">
											<div class="overlay_image_box" data-link="">
												<div class="overlay_image_title"></div>
												<div class="overlay_image_descr"></div>
											</div>
										</div>
										<div class="image_box3  border   shadow  ">
											<img src="/img/220x165/a6db7d7ae173c202fe7c8c11912bd0ed.jpg" alt="">
											<div class="overlay_image_box" data-link="">
												<div class="overlay_image_title"></div>
												<div class="overlay_image_descr"></div>
											</div>
										</div>
										<div class="image_box4  border   shadow  ">
											<img src="/img/220x165/0aa1679940bbb524d11e0984e2b18950.jpg" alt="">
											<div class="overlay_image_box" data-link="">
												<div class="overlay_image_title"></div>
												<div class="overlay_image_descr"></div>
											</div>
										</div>
										<div class="image_box5  border   shadow  ">
											<img src="/img/220x165/cd3174e0de512ccef18c773754097d8b.jpg" alt="">
											<div class="overlay_image_box" data-link="">
												<div class="overlay_image_title"></div>
												<div class="overlay_image_descr"></div>
											</div>
										</div>
									</div>
								
								<div class="clear"></div>
							</div>
						</div>

<div class="hide_line   section section151  " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508619" id="b_508619"><a name="a_508619"></a>
							<div class="section_inner">
								<div class="title  ">Наша команда</div>
								<div class="sub_title  ">Спеціалісти</div>
								  
									<div class="arr1">
										<div class="col_4">
											<div class="image1  border   shadow  "><img src="/storage/image/image_69.jpg" alt=""></div>
											<div class="overlay_image_box ">
												<div class="overlay_image_title title1">sdlfjsld</div>
												<div class="overlay_image_subtitle subtitle1">sldkfjlsdjflsdf</div>
											</div>
										</div>
										<div class="col_4">
											<div class="image2  border   shadow  "><img src="/storage/image/image_85.jpg" alt=""></div>
											<div class="overlay_image_box ">
												<div class="overlay_image_title title2">івалді</div>
												<div class="overlay_image_subtitle subtitle2">Хрень</div>
											</div>
										</div>
                                                                                <div class="clear480"></div>
										<div class="col_4">
											<div class="image3  border   shadow  "><img src="/storage/image/image_55.jpg" alt=""></div>
											<div class="overlay_image_box ">
												<div class="overlay_image_title title3">Пизда</div>
												<div class="overlay_image_subtitle subtitle3">Хрень</div>
											</div>
										</div>
										<div class="col_4 last">
											<div class="image4  border   shadow  "><img src="/storage/image/image_41.jpg" alt=""></div>
											<div class="overlay_image_box ">
												<div class="overlay_image_title title4">Хуйло</div>
												<div class="overlay_image_subtitle subtitle4">TEST</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								
								<div class="clear"></div>
							</div>
						</div>

<div class="section section153   fixed " style="background-color:#ffffff; background-image:url(/storage/image/fon.jpg);" data-id="508622" id="b_508622"><a name="a_508622"></a>
							
							<div class="dark"></div>
							<div class="section_inner  ">
								<div class="layer"><div class="title  "><div><br></div>Залишились питання?</div>
								<div class="sub_title  ">Залиште заявку на сайті або позвоніть за телефоном<br>+380978196656 і наш консультант відповість на питання</div>
								
									<div class="btn1 surround  " style="background-color:#3F7B16;  border-radius: 0.3em;   box-shadow: 0; ">Заявка для участі</div>
								</div>
								
                                                                        <div class="popup_form">
                            <div class="popup_form_inner">
                                <div class="popup_form_close">X</div>
                                <div class="popup_form_title">Заявка для участі в турнірі</div>
                                <form action="handler.php" enctype="multipart/form-data" method="post">
                                        <div class="form1"><input type="hidden" name="Название формы" value="">	<div class="field"><div class="field_title">Ведіть ім'я</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите имя" placeholder="Ведіть ім'я"></div></div><div class="field"><div class="field_title">Ведіть E-mail</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите E-mail" placeholder="Ведіть E-mail"></div></div><div class="field"><div class="field_title">Ведіть номер телефону</div><div class="field_description"></div><div class="field_input"><input type="text" required="required" name="Введите номер телефона" placeholder="Ведіть номер телефону"></div></div><div class="field"><div class="field_input"><input type="submit" class="submit_btn surround" data-action="thanks" data-url="" data-amount="0" value="Зареєструватись" style="background-color:#3F7B16;    border-radius: 0.3em; ;  box-shadow: 0; "></div></div></div>
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

<div class="hide_line section section162   notext  " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508623" id="b_508623"><a name="anchor4"></a>
							<div class="section_inner">
								<div class="title  ">Мої контакти</div>
								<div class="sub_title  "><p style="text-align: left;">м.Кривий Ріг<br>Телефон: +380978196656<br>Електронна адреса oleg.vasilev1991@gmail.com</p></div>
								Пока думаю...
								<div class="text  hidden  ">Контактна інформація</div>
								<div class="clear"></div>
							</div>
					</div>

<div class="hide_line section section119   " style="background-color:#ffffff;  background-image:url(/img/null.png);" data-id="508624" id="b_508624"><a name="a_508624"></a><div class="section_inner">
                                                        
                                                            
                                                                    <div class="logo_img"><img src="/img/200x0/default_logo.jpg" alt=""></div>
                                                            
                                                        
							<div class="address-and-ua">
								<div class="address1">Кваліфікаційна робота<br>студента групи І-14 Васильєва Олега Юрійович</div>
							</div>
							<div class="phone-and-address">
								<div class="phone1 ">+380978196656</div>
							</div>
							<div class="clear"></div>

						</div></div>

        </div>

    </body>
</html>