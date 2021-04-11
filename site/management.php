<!DOCTYPE html>
<html>

<head>
    <title>Tutoring Academy</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="description" content="website description"/>
    <meta name="keywords" content="website keywords, website keywords"/>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
    
    <!--  css  -->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/mycss.management.css"/>


    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript">
        $(function() {
            $("#navmanagement").addClass("current");
        });
    </script>
</head>

<body>
<div id="main">
    <?php include("header.php") ?>

    <div id="site_content">

        <div class="slideshow">
            <ul class="slideshow">
                <li class="show"><img width="900" height="250" src="images/home_1.jpg"
                                      alt="&quot;Electronic form input&quot;"/>
                </li>
                <li><img width="900" height="250" src="images/home_2.jpg"
                         alt="&quot;Manager your teaching reports&quot;"/>
                </li>
                <li><img width="900" height="250" src="images/home_3.jpg"
                         alt="&quot;Mange check-in and check-out reports&quot;"/>
                </li>
            </ul>
        </div>

        <div id="content">
            <div class="content_item">
                <div class="form_settings">
                    <h1>Руководство</h1>
                    <p style="padding-bottom: 15px;">Этот инструмент направлен на безбумажное управление школой. Все бумажные формы, такие как регистрационная форма, Регистрация входа/выхода и учебные отчеты, переключаются на компьютерный ввод формы. Этот инструмент также работает с запросами с основного веб-сайта sta. Эти учебные отчеты и ответы на запросы могут быть просмотрены студентами на главном веб-сайте STA. В разделе "Управление" несколько важных функций, таких как управление классами, управление учетными записями, платежная форма, функция электронной почты, могут помочь менеджерам эффективно работать. </p>
                    <a href="class.php"><button class="bigbutton">Управление классами</button></a>
                    <button class="bigbutton">Управление аккаунтами</button>
                    <a href="payment.php"><button class="bigbutton">Управление оплатой</button></a>
                    <button class="bigbutton">Управление студентами</button><br><br>
                    <a href="email.php"><button class="bigbutton">Управление электронной почтой</button></a>
                    <button class="bigbutton">Преподаватели</button><br><br>
                </div><!--close form_settings-->
            </div><!--close content_item-->
        </div><!--close content-->
    </div><!--close site_content-->
</div><!--close main-->



<script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>
