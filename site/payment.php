<?php
session_start();
if(!isset($_SESSION['stamgaccount']) || !isset($_SESSION['stamgrole'])){
    header("Location: login.php");
}else{
    $_SESSION['StaManagerUsername'] = $_SESSION['stamgaccount'];
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tutoring Academy</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="description" content="website description"/>
    <meta name="keywords" content="website keywords, website keywords"/>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252"/>

    <!-- css  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/mycss.payment.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>

    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <!-- myjavascript   -->
    <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/payment.js"></script>
</head>

<body>
<div id="main">
    <!-- <?php //include("header.php") ?> -->

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
                        <?php include("connect_to_mysql.php"); ?>

                        <div class="DivTable">
                            <div>
                                <p class="center">Payment Management Tool</p>
                            </div>

                            <!--    mytable    -->
                            <button id="ShowAddOrEditForm" class="ToClick">Add Payment record</button>
                            <hr/>
                            <div id="DivDatatable">
                                <table id="paymenttable" class="display compact" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Payer Name</th>
                                        <th>Amount Dollar</th>
                                        <th>Card Type</th>
                                        <th>Check No</th>
                                        <th>Is Cash</th>
                                        <th>Student Name</th>
                                        <th>ClassID</th>
                                        <th>ReceiverName</th>
                                        <th>Note</th>
                                        <th>Create Time</th>
                                        <th>Updater Name</th>
                                        <th>Update Time</th>
                                        <th>action</th>
                                    </tr>
                                    </thead>
<!--                                    <tfoot>-->
<!--                                    <tr>-->
<!--                                        <th>Payer Name</th>-->
<!--                                        <th>Amount Dollar</th>-->
<!--                                        <th>Card Type</th>-->
<!--                                        <th>Check No</th>-->
<!--                                        <th>Is Cash</th>-->
<!--                                        <th>Student Name</th>-->
<!--                                        <th>ClassID</th>-->
<!--                                        <th>ReceiverName</th>-->
<!--                                        <th>Note</th>-->
<!--                                        <th>Create Time</th>-->
<!--                                        <th>Updater Name</th>-->
<!--                                        <th>Update Time</th>-->
<!--                                        <th>action</th>-->
<!--                                    </tr>-->
<!--                                    </tfoot>-->
                                </table>
                            </div>
                        </div>

                        <hr>
                        <!--        <form class="center">-->
                        <div class="DivForm" id="AddOrEdit" style="display:none">
                            <h4 class="center black">Payment Record</h4>
                            <img id="Close" class="ToClick" src="images/close1.png">
                            <p><input id="PaymentID" style="display:none"></p>
                            <p><input id="PaymentCreateTime" style="display:none"></p>

                            <p>Payer Name</p>
                            <p><input type="text" id="PayerName"></p>

                            <p>Amount Dollar</p>
                            <p><input type="text" id="AmountDollar"></p>

                            <p>Payment Type</p>
                            <p>
                                <input type="radio" name="iscash" value="1" id="IsCashTrue" checked/> Cash
                                <input type="radio" name="iscash" value="0" id="IsCheckTrue"/> Check
                                <input type="radio" name="iscash" value="0" id="IsCardTrue"/> Card
                            </p>

                            <div id="SelectCardType" hidden="" style="display:none">
                                <p>Card Type</p>
                                <p>
                                    <input type="radio" name="cardtype" value="Debit"/> Debit
                                    <input type="radio" name="cardtype" value="Credit"/> Credit
                                    <input type="radio" name="cardtype" value="Discover"/> Discover
                                    <input type="radio" name="cardtype" value="Master"/> Master
                                </p>
                            </div>

                            <div id="InputCheckNo" hidden="hidden" style="display:none">
                                <p>Check No.</p>
                                <p><input type="text" id="CheckNo"></p>
                            </div>

                            <p>Student Name</p>
                            <p><input type="text" id="StudentName"></p>

                            <p>Class ID</p>
                            <!-- <td><input type="text" id="ClassID"></td> -->
                            <p>
                                <select id="SelectClassID" name="ClassID">
                                    <option value=""></option>
                                    <!-- auromatically generate list -->
                                    <?php
                                    $stmt = mysqli_prepare($mysqli, "SELECT ID FROM staClass");
                                    if ($stmt) {
                                        mysqli_stmt_execute($stmt);
                                        $stmt->bind_result($classID);
                                        while (mysqli_stmt_fetch($stmt)) {
                                            echo "<option value=$classID>$classID</option>\n";
                                        }
                                        mysqli_stmt_close($stmt);
                                    } else {
                                        die('mysqli error: ' . mysqli_error($mysqli));
                                    }
                                    ?>
                                </select>
                            </p>

                            <p>Receiver Name</p>
                            <p><input type="text" id="ReceiverName"></p>

                            <p>Note</p>
                            <p><input type="text" id="Note"></p>

                            <button id="addRow" hidden="" style="display:none">Add Payment Record</button>
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