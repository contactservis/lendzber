<!DOCTYPE html>
<html lang="ru">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="yandex-verification" content="deaf4152c27e6cbd" />
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script src="js/jquery-3.3.1.min.js"></script>        
    </head>
    <body>
        <div id="float_1">
            <img id="box_f1_01" src="img/box_01.png" class="fly_box"/>
            <img id="box_f1_02" src="img/box_01.png" class="fly_box"/>
            <img id="box_f1_03" src="img/box_01.png" class="fly_box"/>
            <img id="box_f1_04" src="img/box_01.png" class="fly_box"/>
        </div>
        <div id="float_2">
            <img id="box_f2_01" src="img/box_02.png" class="fly_box" />
            <img id="box_f2_02" src="img/box_02.png" class="fly_box" />
            <img id="box_f2_03" src="img/box_02.png" class="fly_box" />
            <img id="box_f2_04" src="img/box_02.png" class="fly_box" />
        </div>
        <div id="float_3">
            <div class="container header">
                <img src="img/logo.png" />
                <a href="Javascript:void(0)" onclick='showPopup()' class="button">Стать Инвестором</a>
                <a href="Javascript:void(0)" onclick='showPopup()' class="button">Стать Эмитентом</a>
            </div>
            <div class="clear"></div>
            <div class="container block_01">
                <h1>Инвестируйте с доходностью </h1>
                <h1 class="big_header">Выше рыночной</h1>
                <img src="img/noutbook_visa.png" />                                           
                <div class="left_block" style="margin-bottom: 90px;">
                <h1>ZБерополис - это</h1>
                    <div class="block_punkt">
                        онлайн площадка для привлечения инвестиций в малый и средний бизнес, 
                        где физические лица (инвесторы) могут вкладывать деньги в бизнес-проекты юридических лиц (эмитентов)
                    </div>
                    <p>Механизм финансирования основан на краудфандинговой модели, когда множество инвесторов 
                        вкладывают относительно небольшие суммы (от нескольких тысяч до нескольких сотен тысяч рублей), 
                        в результате чего собирается необходимый объем денежных средств для финансирования того или иного проекта.
                         Главное, что теперь между компаниями и инвесторами нет банка: бизнес привлекает инвестиции напрямую, 
                         а инвесторы сами решают, куда вложить деньги и на каких условиях.</p>
                </div>
                <div class="clear"></div>
                <div class="right_block">
                    <div class="block_punkt">
                        первый сервис массового финансирования, в основе которого лежит классический механизм привлечения инвестиций через 
                        брокера – лицензированного профессионального участника рынка ценных бумаг, 
                        который является посредником между инвестором и компанией, привлекающей финансирование
                    </div>
                    <p>Брокерское обслуживание в рамках сервиса ZБЕРОПОЛИС осуществляет Акционерное общество «Инвестиционная компания 
                        «НФК-Сбережения» – один из крупнейших брокеров Поволжья с 15-летним опытом работы на финансовом рынке. Компания оказывает 
                        финансовые услуги на всей территории Российской Федерации как физическим, так и юридическим лицам посредством удаленного заключения 
                        договоров с использованием электронной подписи.</p>
                    <a href="https://nfksber.ru/company/" style="color: #ff0091; text-decoration: none;" target="_blank">Подробнее об АО «НФК-Сбережения»</a>
                </div>
                <div class="left_block">
                    <img src="img/graf.png" style="position: absolute; left: -174px;"/>
                </div>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
            <div class="investor">
                <div class="container">                    
                    <div class="right_block">                        
                        <img id="planschet" src="img/planshet.png" />
                    </div>
                    <div class="left_block" style="margin-top: 250px;">                        
                        <div id="screen_slider">
                            <div id="screen_slider_box">
                                <div class="screen_slider_box_item">
                                    <h1>Для частных инвесторов</h1>
                                    <div class="block_punkt">
                                        ZБЕРОПОЛИС – это сервис, который дает частным инвесторам возможность вкладывать 
                                        свои средства в различные направления: от предприятий малого и среднего бизнеса до государственных облигаций. 
                                    </div>
                                    <p>Инвестором может стать любое физическое или юридическое лицо, зарегистрированное на территории Российской Федерации.</p>
                                </div>
                                <div class="screen_slider_box_item">
                                    <h1>Для бизнеса</h1>
                                    <div class="block_punkt">
                                        ZБЕРОПОЛИС – это сервис, который позволяет небольшим компаниям 
                                        привлечь на короткий срок деньги на развитие бизнеса или финансирование проектов. 
                                    </div>
                                    <p>Эмитентом может стать любая коммерческая организация или индивидуальный предприниматель, зарегистрированные на территории Российской Федерации.</p>
                                </div>
                            </div>
                        </div>                        
                        <div class="arrow">
                            <div id="arrow_left" class="slider_arr"></div>
                            <div id="arrow_right" class="slider_arr"></div>
                        </div>
                    </div>                    
                    <div class="clear"></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="container">                
                    <h1>Почему <br>ZБерополис</h1>
                    <div class="right_block">                        
                        <div class="list_why">
                            <div class="list_why_item">
                                <span>Быстрое финансирование без залога</span>
                                <br>Сроки привлечения средств от 1 месяца до 1 года.
                            </div>
                            <div class="list_why_item">
                                <span>Удобный функционал</span>
                                <br>Регистрация, идентификация и заключение договора проходят в режиме онлайн (с использованием сервисов ЕСИА/СМЭВ).
                            </div>                            
                            <div class="list_why_item">
                                <span>Защита от потерь</span>
                                <br>Ваши инвестиции распределяются между различными, не зависящими друг от друга компаниями, что позволяет диверсифицировать вложения и снизить риск.
                            </div>                                                    
                        </div>
                    </div>
                    <div class="left_block">
                        <div class="list_why">
                            <div class="list_why_item">
                                <span>Инвестором может стать каждый</span>
                                <br>Минимальная сумма вложений – 1000 рублей.
                            </div>                            
                            <div class="list_why_item">
                                <span>Широкий выбор объектов инвестирования</span>
                                <br>От предприятий малого и среднего бизнеса до государственных облигаций.
                            </div>
                            <div class="list_why_item">
                                <span>Без заботы о налогах</span>
                                <br>Исчисление, удержание и уплату налогов в интересах инвесторов-физических лиц производит налоговый агент.
                            </div>
                        </div>                        
                    </div>                    
                    <div class="clear"></div>
                    <h1 style="text-align: center; margin-top: 75px;" id="header_podpiski">Хотите первым узнать <br>о запуске уникального проекта <br>ZБЕРОПОЛИС?</h1>
                    <div id="podpiska">
                        <h2 style="margin-left: 20px;">Подпишитесь на нашу рассылку</h2>
                        <div id="input_email">
                            <input id="form_input_email" type="text" placeholder="ваш email">
                        </div>
                        <a href="Javascript:void(0)" class="button" id="send_email">Подписаться</a>
                    </div>
                </div>
                <div id="footer">
                    <div class="container">
                        <div class="slogan_logo">
                            <h1>Включайтесь в проект уже сегодня!</h1>
                            <img src="img/logo.png" style="padding-top: 10px;" />
                        </div>
                        <div class="clear"></div>
                        <div class="footer_button">
                            <span style="margin-right: 117px;">Присоединяйтесь к команде Инвесторов или Эмитентов</span>
                            <script>
                                 function showPopup() {        
                                        $('#popup_fade').css('display', 'block');        
                                    }
                            </script>
                            <a href="Javascript:void(0)" onclick='showPopup()' class="button">Стать Инвестором</a>
                            <a href="Javascript:void(0)" onclick='showPopup()' class="button">Стать Эмитентом</a>
                        </div>
                    </div>
                </div>
        </div>
        <div id="float_4">
            <img id="box_f4_01" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_02" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_03" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_04" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_05" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_06" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_07" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_08" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_09" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_10" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_11" src="img/one_box.png" class="fly_box"/>
            <img id="box_f4_12" src="img/one_box.png" class="fly_box"/>
        </div>
        <div id="popup_fade" class="gradient"> 
            <div class="popup_content">   
                <div id="popup_close">х</div>
                <h3>Чтобы стать участником проекта ZБЕРОПОЛИС и получить возможность инвестировать средства, нужно открыть брокерский счет в АО "НФК-Сбережения". </h3> 
                <p>Это можно сделать прямо сейчас без посещения офиса компании, перейдя по ссылке.</p>
                <a href="https://nfksber.ru/open_account/" style="color:#fff;">Открыть счет</a>
                <h3 style="margin-top: 100px;">Для юридических лиц </h3> 
                <p>Чтобы получить возможность привлечения финансирования с помощью проекта ZБЕРОПОЛИС, нужно связаться с нами:</p>
                <p>г. Чебоксары, пр. М. Горького, д. 5, корпус 2</p>
                <h4>телефон: 8 800 200-84-84</h4>
            </div>
        </div>
        <script src="js/script.js"></script>
            <script type="text/javascript" >
                (function (d, w, c) {
                    (w[c] = w[c] || []).push(function() {
                        try {
                            w.yaCounter51068129 = new Ya.Metrika2({
                                id:51068129,
                                clickmap:true,
                                trackLinks:true,
                                accurateTrackBounce:true
                            });
                        } catch(e) { }
                    });

                    var n = d.getElementsByTagName("script")[0],
                        s = d.createElement("script"),
                        f = function () { n.parentNode.insertBefore(s, n); };
                    s.type = "text/javascript";
                    s.async = true;
                    s.src = "https://mc.yandex.ru/metrika/tag.js";

                    if (w.opera == "[object Opera]") {
                        d.addEventListener("DOMContentLoaded", f, false);
                    } else { f(); }
                })(document, window, "yandex_metrika_callbacks2");
            </script>
            <noscript><div><img src="https://mc.yandex.ru/watch/51068129" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    </body>
</html>