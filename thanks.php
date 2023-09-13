<?php
$fpx = isset($_COOKIE['fpx']) ? $_COOKIE['fpx'] : null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Заказ</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

  <style type="text/css">
    body {
      text-align: center;
      font-family: 'Roboto', sans-serif;
    }

    h2>span {
      font-weight: bold;
    }
  </style>
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
      fbq('track', 'Lead');
      fbq('track', 'Purchase');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?= $fpx ?>&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
  <?php
  };
  ?>
</head>

<body>

  <h1>ВІТАЄМО! ВАШЕ ЗАМОВЛЕННЯ ПРИЙНЯТО!</h1>
  <p>Найближчим часом з вами зв'яжеться оператор для підтвердження замовлення. Будь ласка, увімкніть ваш контактний телефон.<br><br>
    Будь ласка, перевірте правильність введеної Вами інформації.</p>
  <br>
  <h2>П.І.Б. : <span><?php echo htmlspecialchars($_GET['name']); ?></span></h2>
  <h2>Телефон: <span><?php echo htmlspecialchars($_GET['phone']); ?></span></h2>

  <p>Наш оператор зв'яжеться з вами найближчим часом.<br>
    Переконайтеся, що телефон, який ви вказали у заявці, включений і знаходиться в зоні мобільного оператора.</p>
  <br>
  <a style="display: inline-block;height: 53px;height: 5.3rem;margin: 0px 0 0px;padding: 0 24px; font-size: 1.8rem; letter-spacing: 0.02em; line-height: 53px; line-height: 5.3rem; text-align: center; text-decoration: none; color: black; transition: background-color 0.2s ease-out 0s; border-radius: 7px; text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5); -webkit-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); -moz-box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); box-shadow: inset 0px -3px 0px 0px rgba(50, 50, 50, 0.2); background: rgb(196, 255, 161); width:500px;margin:0 auto;display:block; border: 1px solid #ccc;" href="./" class='hover'>
    Повернутись на сайт</a>
</body>

</html>