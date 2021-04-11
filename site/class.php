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
    <link rel="stylesheet" type="text/css" href="css/mycss.class.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- myjavascript   -->
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/class.js"></script>
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
                            <div>
                                <p class="center">Class Management Tool</p>
                            </div>

                            <!--    mytable    -->
                            <button id="ShowAddOrEditForm" class="ToClick">Add class record</button>
                            <hr/>
                            <div id="DivDatatable">
                                <table id="classtable" class="display" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th width="20px"></th>
                                        <th>Class ID</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Balance Type</th>
                                        <th width="20px">Is Published</th>
                                        <th>Create Time</th>
                                        <th width="60px">Action</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>

                        <hr>
                        <!--        <form class="center">-->
                        <div class="DivForm" id="AddOrEdit" style="display:none">
                            <h4 class="center black">Class Record</h4>
                            <img id="Close" class="ToClick" src="images/close1.png">

                            <p>Class ID *</p>
                            <p><input type="text" id="ID"></p>


                            <p><input id="OldID" style="display:none"></p>

                            <p>Title *</p>
                            <p><input type="text" id="Title"></p>

                            <p>Class Type *</p>
                            <p>
                                <select id="SelectClassType" name="ClassType">
                                    <option value="">Please Select</option>
                                    <!-- auromatically generate list -->
                                    <?php
                                    include("connect_to_mysql.php");
                                    $stmt = mysqli_prepare($mysqli, "SELECT ID, ClassType FROM CodeClassType");
                                    if ($stmt) {
                                        mysqli_stmt_execute($stmt);
                                        $stmt->bind_result($ID, $ClassType);
                                        while (mysqli_stmt_fetch($stmt)) {
                                            echo "<option value=$ID>$ClassType</option>\n";
                                        }
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        die('mysqli error: ' . mysqli_error($mysqli));
                                    }
                                    mysqli_close($mysqli);
                                    ?>
                                </select>
                            </p>

                            <p>Balance Type *</p>
                            <p>
                                <select id="SelectBalanceType" name="BalanceType">
                                    <option value="">Please Select</option>
                                    <!-- auromatically generate list -->
                                    <?php
                                    include("connect_to_mysql.php");
                                    $stmt = mysqli_prepare($mysqli, "SELECT ID, BalanceType FROM CodeBalanceType");
                                    if ($stmt) {
                                        mysqli_stmt_execute($stmt);
                                        $stmt->bind_result($ID, $BalanceType);
                                        while (mysqli_stmt_fetch($stmt)) {
                                            echo "<option value=$ID>$BalanceType</option>\n";
                                        }
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        die('mysqli error: ' . mysqli_error($mysqli));
                                    }
                                    mysqli_close($mysqli);
                                    ?>
                                </select>
                            </p>

                            <p>Image (Maximum 16Mb)</p>
                            <img src="" width="175px" height="175px" id="UploadedImage" alt="no image uploaded"/>
                            <p><input type="file" id="UploadImage" onchange="PreviewImage()"></p>

                            <p>Description Paragraph 1 *</p>
                            <p><input type="text" id="ParagraphOne"></p>

                            <p>Description Paragraph 2</p>
                            <p><input type="text" id="ParagraphTwo"></p>

                            <p>Description Paragraph 3</p>
                            <p><input type="text" id="ParagraphThree"></p>

                            <p>Maximum Seat Number *</p>
                            <p><input type="number" id="MaxSeat"></p>

                            <p>Register Due Date *</p>
                            <p>
                                <input class="InputDateYear" id="DueRegisterYear" maxlength="4"
                                placeholder="yyyy">
                                -
                                <input class="InputDate" id="DueRegisterMonth" maxlength="2"
                                placeholder="MM">
                                -
                                <input class="InputDate" id="DueRegisterDay" maxlength="2"
                                placeholder="dd">
                            </p>

                            <p>Price($) *</p>
                            <p><input type="number" id="Price"></p>

                            <p>Default Teacher</p>
                            <p><input type="text" id="DefaultTeacher"></p>

                            <p>Publish This Class?</p>
                            <p>
                                <input type="radio" name="IsPublished" value="0" checked/> No
                                <input type="radio" name="IsPublished" value="1"/> Yes
                            </p>

                            <button id="addRow" hidden="" style="display:none">Add Class Record</button>
                            <button id="EditRow" hidden="" style="display:none">Confirm Edition</button>
                            <button id="Reset">Reset</button>
                        </div>
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