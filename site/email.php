<?php
session_start();
if (!isset($_SESSION['stamgaccount']) || !isset($_SESSION['stamgrole'])) {
    header("Location: login.php");
} else {
    $_SESSION['StaManagerUsername'] = $_SESSION['stamgaccount'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tutoring Academy</title>
    <!-- added to avoid "Object doesn't support this property or method" problem   -->
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="description" content="website description"/>
    <meta name="keywords" content="website keywords, website keywords"/>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252"/>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/mycss.email.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- myjavascript   -->
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/email.js"></script>

    <!--  for autocomplete  -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
<div id="main">
    <header>
        <div id="banner">
            <div id="welcome_slogan">
                <h3><img src="images/stalogo.png" style="height:60px;"/>&nbsp;&nbsp;&nbsp;Tutoring Academy
                    </h3>
            </div><!--close welcome_slogan-->
        </div><!--close banner-->
    </header>

    <nav>
        <div id="menubar">
            <ul id="nav">
                <li id="navhome"><a href="index.php">Главная</a></li>
                <li id="navrequest"><a href="requests.php">Запросы</a></li>
                <li id="navregister"><a href="register.php">Регистрационная форма</a></li>
                <li id="navcheckinout"><a href="checkinout.php">Вход/Регистрация</a></li>
                <li id="navreport"><a href="teachingreport.php">Отчет</a></li>
                <li id="navmanagement"><a href="management.php">Руководство</a></li>
            </ul>
        </div><!--close menubar-->
    </nav>

    <div id="site_content">
        <div id="content">
            <div class="content_item">
                <br><br>
                <h1>Добро пожаловать в Tutoring Academy</h1>
                <p>Этот инструмент направлен на безбумажное управление школой. Все бумажные формы, такие как регистрационная форма, Регистрация входа/выхода и учебные отчеты, переключаются на компьютерный ввод формы. Этот инструмент также работает с запросами с основного веб-сайта sta. Эти учебные отчеты и ответы на запросы могут быть просмотрены студентами на главном веб-сайте STA. В разделе "Управление" несколько важных функций, таких как управление классами, управление учетными записями, форма оплаты, функция электронной почты, могут эффективно помочь менеджерам.</p>

                <div class="content">
                    <div class="container">
                        <div class="DivTable">
                            <!-- email form -->
                            <div class="DivForm" id="EmailForm">
                                <h4 class="center black">Email Form</h4>
                                <br/>

                                <p>Send To * (Input name to search, seperate multiple addresses by ;)</p>
                                <p>
                                    <select id="SelectClass" name="ClassID" onchange="AddClassAddress(this.value)">
                                        <option value="">Select Class</option>
                                        <!-- auromatically generate list -->
                                        <?php
                                        include("connect_to_mysql.php");
                                        $stmt = mysqli_prepare($mysqli, "SELECT ID, Title FROM staClass");
                                        if ($stmt) {
                                            mysqli_stmt_execute($stmt);
                                            $stmt->bind_result($ID, $Title);
                                            while (mysqli_stmt_fetch($stmt)) {
                                                echo "<option value=$ID>$Title</option>\n";
                                            }
                                            mysqli_stmt_close($stmt);
                                        } else {
                                            die('mysqli error: ' . mysqli_error($mysqli));
                                        }
                                        mysqli_close($mysqli);
                                        ?>
                                    </select>
                                </p>
                                <p><input type="text" id="SendTo"></p>

                                <p>Subject *</p>
                                <p><input type="text" id="Subject"></p>

                                <p>Content *</p>
                                <p><textarea id="EmailContent"></textarea></p>

                                <p>Send From * (the name you would like to display)</p>
                                <p><input type="text" id="SendFrom"></p>

                                <p>Email From * (the email address you would like to display)</p>
                                <p><input type="text" id="EmailFrom"></p>

                                <button id="SendEmail">Send Email</button>
                                <button id="Reset">Reset</button>
                            </div>
                            <!-- end of  -->

                        </div>

                        <hr>

                        <!-- /.container -->

                        <div id="loading_div" hidden="hidden" class="center" style="display:none">
                            <img src="images/loading2.gif">
                        </div>
                    </div>
                </div>

            </div><!--close content_item-->
        </div><!--close content-->
    </div><!--close site_content-->
</div><!--close main-->

<?php include("footer.php"); ?>
</body>
</html>