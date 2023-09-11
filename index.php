<?php
$period_cookie = 2592000; // 30 дней (2592000 секунд)

if ($_GET) {
    setcookie("fpx", $_GET['fpx'], time() + $period_cookie);
    setcookie("gtm", $_GET['gtm'], time() + $period_cookie);
}

$fpx = isset($_GET['fpx']) ? $_GET['fpx'] : $_COOKIE['fpx'];
$gtm = isset($_GET['gtm']) ? $_GET['gtm'] : $_COOKIE['gtm'];

?>

<!DOCTYPE html>
<html lang="ru-RU">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=480">
    <title>ЕЛЕГАНТНИЙ КОСТЮМ </title>
    <meta name="description" content="" />
    <link rel="shortcut icon" href="index.php" />
    <link rel="icon" href="files/favicon.png">
    <link rel="stylesheet" href="files/reset4a3c6.css" type="text/css">
    <link rel="stylesheet" href="files/styles8ca58.css" type="text/css">

    <script>
        function sclClickPixelFn() {
            const url = new URL(document.location.href).searchParams;
            const a = url.get('a'); // Your ID. Example: const a = "XX";
            if (a) {
                const availableParams = ['aff_click_id', 'sub_id1', 'sub_id2', 'sub_id3', 'sub_id4', 'sub_id5', 'aff_param1', 'aff_param2', 'aff_param3', 'aff_param4', 'aff_param5', 'idfa', 'gaid'];
                const t = new URL('https://odiya.scaletrk.com/click');
                const r = t.searchParams;
                r.append('a', a);
                r.append('o', '16');
                r.append('return', 'click_id');
                if (availableParams?.length > 0) {
                    availableParams.forEach((key) => {
                        const value = url.get(key);
                        if (value) {
                            r.append(key, value);
                        }
                    });
                }
                fetch(t.href).then((e) => e.json()).then((e) => {
                    const c = e.click_id;
                    if (c) {
                        const expiration = 864e5 * 365;
                        const o = new Date(Date.now() + expiration);
                        document.cookie = 'click_id=' + c + ';expires=' + o;
                        document.cookie = 'aff_id=' + a + ';expires=' + o;
                    }
                });
            }
        }
        sclClickPixelFn();
    </script>

    <?php if ($fpx) { ?>
        <!-- Facebook Pixel Code -->
        <script>
            ! function(f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function() {
                    n.callMethod ?
                        n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = '2.0';
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s)
            }(window, document, 'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', "<?= $fpx ?>");
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fpx ?>&ev=PageView&noscript=1" /></noscript>
        <!-- End Facebook Pixel Code -->
    <?php
    };
    ?>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', "<?= $gtm ?>");
        </script>
        <!-- End Google Tag Manager -->
    <?php
    };
    ?>
</head>

<body>
    <?php if ($gtm) { ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php
    };
    ?>
    <div class="main_wrapper">

        <!-- header 3 -->
        <header class="offer_section offer3">
            <h1 class="main_title">НОВИНКА 2023 РОКУ</h1>
            <div class="info_block">
                <p class="subtitle">СТИЛЬНИЙ ТЕПЛИЙ КОСТЮМ</p>
                <div class="discount"><b>40% знижка</b></div>
                <img src="files/offer1.jpg" alt="">
            </div>

            <div class="price_block">
                <div class="yellow_line"></div>
                <div class="price_item old">
                    <div class="text">Звичайна ціна:</div>
                    <div class="value">2165грн</div>
                </div>
                <div class="price_item new">
                    <div class="text">Ціна зі знижкою:</div>
                    <div class="value">1299грн</div>
                </div>
            </div>

            <div class="benefits_block clearfix">
                <div class="benefit_item">
                    <img src="files/benefit2.jpg" alt="">
                    <p>ЯСКРАВІ КОЛЬОРИ</p>
                </div>

                <div class="benefit_item">
                    <img src="files/benefit1.jpg" alt="">
                    <p>ВИСОКА ЯКІСТЬ</p>
                </div>
                <div class="benefit_item">
                    <img src="files/benefit3.jpg" alt="">
                    <p>ПРИЄМНА ТКАНИНА</p>
                </div>
            </div>
            <a href="#cat" class="button">Замовити костюм</a>
        </header>

        <br>
        <div class="catitem">
            <h2 class="title"><span>ЯК КОСТЮМ</span>
                ВИГЛЯДАЄ НАЖИВО!</h2>
        </div>
        <section>
            <ul class="bxslider">
                <video controls="true" width="100%" height="600" autoplay loop muted="">
                    <source src="files/3505.mp4">
                </video>
            </ul>
        </section>
        <br>



        <section class="description_section">
            <h2 class="title"><span>Опис</span> виробу</h2>
            <ul class="characteristics__list">
                <li><b>Тканина:</b> рубашка - турецький кашемір принт, брюки - 3х нитка на флісі </li>
                <li><b>Країна виробник:</b> Україна</li>
                <li><b>Кольори:</b> моко, фісташка, графіт </li>
                <li><b>Країна виробник:</b> Україна</li>
                <li><b>Деталі:</b> Костюм двійка, що складається з сорочки та штанів. Штани з манжетами по низу та двома карманами, позаду оздоблені декоративною вставкою із кашеміру. Тепла класична сорочка із якісного кашеміру на кнопках. </li>
                <li><b>Розмірна сітка:</b> 50-52, 54-56, 58-60</li>
                <li>
                    <table class="size" width="100%">
                        <tbody>

                            <tr align="center" height="35">
                                <td>Сорочка</td>
                                <td>48-50</td>
                                <td>52-54</td>
                                <td>56-58</td>

                            </tr>
                            <tr align="center" height="35">
                                <td width="35%">Обхват грудей</td>
                                <td>122</td>
                                <td>130</td>
                                <td>138</td>

                            </tr>
                            <tr align="center" height="35">
                                <td width="35%">Обхват талії</td>
                                <td>122</td>
                                <td>130</td>
                                <td>138</td>

                            </tr>

                            <tr align="center" height="35">
                                <td width="35%">Обхват стегон</td>

                                <td>122</td>
                                <td>130</td>
                                <td>138</td>

                            </tr>
                            <tr align="center" height="35">
                                <td width="35%">Довжина по спинці</td>
                                <td>71</td>
                                <td>72</td>
                                <td>73</td>

                            </tr>
                        </tbody>
                    </table>
                </li>
                <li>
                    <table class="size" width="100%">
                        <tbody>

                            <tr align="center" height="35">
                                <td>Штани</td>
                                <td>48-50</td>
                                <td>52-54</td>
                                <td>56-58</td>
                            </tr>

                            <tr align="center" height="35">
                                <td width="35%">Обхват талії</td>
                                <td>72-112</td>
                                <td>80-120</td>
                                <td>88-128</td>
                            </tr>

                            <tr align="center" height="35">
                                <td width="35%">Обхват стегон</td>
                                <td>108</td>
                                <td>116</td>
                                <td>124</td>
                            </tr>

                            <tr align="center" height="35">
                                <td width="35%">Довжина</td>
                                <td>103</td>
                                <td>104</td>
                                <td>105</td>
                            </tr>
                        </tbody>
                    </table>

                </li>
                <br>
                <center>*залиште заявку і ми надамо вам пораду за розміром!</center>

            </ul>

        </section><br>
        <section class="cat" id="cat">
            <div class="catitem">
                <h2 class="title"><span>Виберіть свій колір</span> КОСТЮМА</h2>
            </div>
            <center>костюм у різних ракурсах </center>
            <br>
            <ul class="bxslider">
                <li>
                    <div><img src="files/m1.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/m2.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/m3.jpg" alt=""></div>
                </li>

            </ul>
        </section>
        <br>
        <div class="catitem">
            <div class="clearfix">
                <h3> Колір моко</h3>
                <div class="catprice clearfix">
                    <div class="cp-left"><span>-40%</span>
                        <p>2165грн</p>
                    </div>
                    <div class="cp-right"><span>Ціна зі знижкою:</span>
                        <p>1299грн</p>
                    </div>
                </div>
            </div>

            <a href="#order_form" rel='3' class="button zakaz">Оформити замовлення</a>
        </div>
        <br>


        <br>
        <section class="cat" id="cat">
            <ul class="bxslider">
                <li>
                    <div><img src="files/f1.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/f2.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/f3.jpg" alt=""></div>
                </li>
            </ul>
        </section>
        <br>
        <div class="catitem">
            <div class="clearfix">
                <h3> Колір фісташка</h3>
                <div class="catprice clearfix">
                    <div class="cp-left"><span>-40%</span>
                        <p>2165грн</p>
                    </div>
                    <div class="cp-right"><span>Ціна зі знижкою:</span>
                        <p>1299грн</p>
                    </div>
                </div>
            </div>

            <a href="#order_form" rel='2' class="button zakaz">Оформити замовлення</a>
        </div>
        <br>
        <br>
        <section class="cat" id="cat">
            <ul class="bxslider">
                <li>
                    <div><img src="files/g1.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/g2.jpg" alt=""></div>
                </li>
                <li>
                    <div><img src="files/g3.jpg" alt=""></div>
                </li>
            </ul>
        </section>
        <br>
        <div class="catitem">
            <div class="clearfix">
                <h3> Колір графіт</h3>
                <div class="catprice clearfix">
                    <div class="cp-left"><span>-40%</span>
                        <p>2165грн</p>
                    </div>
                    <div class="cp-right"><span>Ціна зі знижкою:</span>
                        <p>1299грн</p>
                    </div>
                </div>
            </div>

            <a href="#order_form" rel='2' class="button zakaz">Оформити замовлення</a>
        </div>
        <br>
        <br>


        <!-- /description --><!-- reviews 3 -->
        <br>
        <section class="reviews3_section">
            <h2 class="title"><span>Відгуки</span> покупців</h2>
            <div class="reviews_list">
                <div class="review_item">
                    <div class="author_block clearfix">
                        <img src="files/ava1.jpg" alt="">
                        <div class="author_info">
                            <div class="name">Ольга</div>
                            <div class="text">53 роки</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">16.08.2023</div>
                        </div>
                    </div>
                    <p> Дуже красиве вбрання за доступною вартістю, взяла у двох кольорах: фісташка та графіт. Раджу на замовлення, дівчата</p>
                </div>

                <div class="review_item">
                    <div class="author_block clearfix"><img src="files/ava2.jpg" alt="">
                        <div class="author_info">
                            <div class="name">Тетяна</div>
                            <div class="text">29 років</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">14.08.2023</div>
                        </div>
                    </div>
                    <p> Дуже задоволена цією покупкою, приємна тканина. Зручний та практичний костюм, дякую! </p>
                </div>

                <div class="review_item">
                    <div class="author_block clearfix"><img src="files/ava3.jpg" alt="">
                        <div class="author_info">
                            <div class="name">Ангеліна</div>
                            <div class="text">44 роки</div>
                        </div>
                        <div class="info">
                            <div class="rating"></div>
                            <div class="date">11.08.2023</div>
                        </div>
                    </div>
                    <p> Замовила костюм і за три дні вже забрала з пошти, все підійшло ідеально. Щиро дякую </p>
                </div>
            </div>
        </section>

        <!-- /reviews 3 -->
        <!-- order steps 1 -->
        <div class="tlt">

            <h2 class="title"><span>Як зробити</span><br> замовлення?</h2>
        </div>
        <div class="order_steps1">
            <div class="step_item">
                <div class="step_wrapper"><img src="files/order_steps__step1_icon15b1b.png" alt="">

                    <h4>Заявка</h4>
                    <p>Залишіть заявку внизу сторінки</p>
                </div>
            </div>
            <div class="step_item">
                <div class="step_wrapper">
                    <img src="files/order_steps__step2_icon95bea.png" alt="">

                    <h4>Дзвінок</h4>
                    <p>Наш менеджер уточнить деталі замовлення</p>
                </div>
            </div>
            <div class="step_item">
                <div class="step_wrapper">
                    <img src="files/order_steps__step3_icon9469b.png" alt="">

                    <h4>Надсилання</h4>
                    <p>Доставимо ваш виріб Новою Поштою</p>
                </div>
            </div>
            <div class="step_item">
                <div class="step_wrapper">
                    <img src="files/order_steps__step4_icone6b9d.png" alt="">

                    <h4>Отримання</h4>
                    <p>Оплачуєте при отриманні у відділенні</p>
                </div>
            </div>
        </div>

        <!-- Доставка/оплата-v3 -->
        <div class="tlt">
            <section class="delivery-block-v3">
                <ul class="delivery-cont">
                    <li>
                        <h3>Швидка доставка</h3>
                        <p>Доставляємо Новою Поштою по Україні. Вартість згідно тарифам доставки.</p>
                    </li>
                    <li>
                        <h3>Безпечна оплата</h3>
                        <p>Ви оплачуєте замовлення за фактом отримання виробу на руки з комісією або без комісії переказом на банківську картку</p>
                    </li>
                    <li>
                        <h3>Обмін, повернення та гарантії</h3>
                        <p>Ми завжди перевіряємо товар перед відправкою та гарантуємо 100% якість.</p>
                        <p>Обмін та повернення протягом 14 днів!</p>
                    </li>

                </ul>
            </section>
        </div>

        <!-- order 3 -->
        <section class="offer_section offer3 order">
            <h1 class="main_title">Новинка 2023 РОКУ</h1>
            <div class="info_block">
                <p class="subtitle">СТИЛЬНИЙ ТЕПЛИЙ КОСТЮМ</p>
                <div class="discount"><b>40% знижка</b></div>


                <img src="files/offer1.jpg" alt="">
            </div>

            <div class="price_block">
                <div class="yellow_line"></div>
                <div class="price_item old">
                    <div class="text">Звичайна ціна:</div>
                    <div class="value">2165грн</div>
                </div>
                <div class="price_item new">
                    <div class="text">Ціна зі знижкою:</div>
                    <div class="value">1299грн</div>
                </div>
            </div>

            <div class="benefits_block clearfix">

                <div class="benefit_item">

                    <img src="files/benefit1.jpg" alt="">
                    <p>МОДНИЙ ДИЗАЙН</p>
                </div>

                <div class="benefit_item">
                    <img src="files/benefit2.jpg" alt="">
                    <p>ВИСОКА ЯКІСТЬ</p>
                </div>
                <div class="benefit_item">

                    <img src="files/benefit3.jpg" alt="">

                    <p>ПРИЄМНА ТКАНИНА</p>
                </div>
            </div>

            <p align="center">Для замовлення та консультації заповніть форму:</p>
            <br>
            <form id="order_form" class="order_form" action="order_3505e.php" method="post">

                <input class="field" type="text" name="name" placeholder="Введіть ваше імʼя" required>
                <input class="field" type="tel" name="phone" placeholder="Введіть Ваш номер" required>
                <div style="margin: 0 auto 25px;font-size: 15px; text-align: center; color: #000;" bis_skin_checked="1">
                    <input id="data1" type="checkbox" checked required style="appearance: auto;">
                    <label for="data1">Я погоджуюся з політикою конфіденційності</label>
                </div>
                <button class="button">Оформити замовлення</button>
            </form>

        </section>
        <!-- /order 3 -->
        <!-- footer -->
        <footer class="footer_section">
            <p>Виробництво в Україні
                <br>
                49000, м. Днiпро, вул. Воскресенська, 33
                <br>ТОВ "Одяг"
            </p>
            <br>
            <a href="politics.html" target="_blank">Політика конфіденційності</a> <br>
            <a href="refund.html" target="_blank">Гарантії та повернення</a> <br>
            <a href="ugoda.html" target="_blank">Угода Користувача</a> <br>
        </footer><!-- /footer -->
    </div>
    <!-- scripts -->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;subset=cyrillic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="bxslider/jquery.bxslider.js">
    </script>
    <link href="bxslider/jquery.bxslider.css" rel="stylesheet">

    <script>
        $(document).ready(function() {

            $('.bxslider').bxSlider();

        });
    </script>
    <script>
        $(function() {

            $('.zakaz').click(function() {

                ind = $(this).attr('rel');

                $('#select option').removeAttr('selected');

                $('#select').children('option').eq(ind).attr("selected", "selected");

            });


        });
    </script>
    <script src="files/scripts6085f.js">
    </script>
    <script>
        function identifyDate(e) {
            var t = new Date;
            t.setTime(t.getTime() + 864e5 * e);
            var a = t.getDate(),
                n = t.getMonth() + 1,
                r = t.getFullYear();
            return (a > 9 ? a : "0" + a) + "." + (n > 9 ? n : "0" + n) + "." + r
        }

        function printCommentsDate(m) {
            for (var t = $(m).length, e = 0; e <= t; e++) $(m + ":eq(" + (t - e) + ")").html(identifyDate(-e))
        }
        printCommentsDate('.date');
    </script>


</body>

</html>