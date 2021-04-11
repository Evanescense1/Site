<!DOCTYPE html>
<html>

<head>
    <title>Tutoring Academy</title>
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="description" content="website description"/>
    <meta name="keywords" content="website keywords, website keywords"/>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css"/>
    <!-- modernizr enables HTML5 elements and feature detects -->
    <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>

    <!-- javascript at the bottom for fast page loading -->
    <script type="text/javascript" src="js/jquery.js"></script>

    <script type="text/javascript" src="js/jquery.dataTables.js"></script>

    <script type="text/javascript">
        $(function () {
            $("#navrequest").addClass("current");
        });
    </script>
</head>

<body>
<div id="main">
    <?php include("header.php"); ?>

    <div id="site_content">

        <br><br>

        <div id="content">
            <div class="content_item">
                <h1>Запросы</h1>
                <hr>
                <br><br>

                <div style="background: #FFF;">
                    <div id="col-left">
                        <div id="menu8">
                            <ul>
                                <li><a href="#newquest">&nbsp;&nbsp;&nbsp;Новые запросы</a></li>
                                <li><a href="#pendingrequest">&nbsp;&nbsp;&nbsp;Ожидающие запросы</a></li>
                                <li><a href="#closerequest">&nbsp;&nbsp;&nbsp;Закрытые запросы</a></li>
                            </ul>
                        </div>
                    </div>


                    <div id="col-right">

                        <div style="margin-left:60px;margin-right:20px;text-align: justify;">

                            <div style="padding: 20px 10px 20px 0px;"><h3 id="newquest"> Новые запросы</h3><hr><br>
                                <table class="table1">
                                    <thead>
                                    <tr>
                                        <th>Тип запроса</th>
                                        <th>Имя</th>
                                        <th>Email</th>
                                        <th>Телефон</th>
                                        <th>Время создания</th>
                                        <th>Ответить</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Запрос</td>
                                        <td>Иванов</td>
                                        <td>bo.yao@utsoutwestern.edu</td>
                                        <td>8-951-695-57-69</td>
                                        <td>25.12.2000</td>
                                        <td><a href="#">Запрос</a></td>
                                    </tr>
                                    <tr>
                                        <td>Запрос</td>
                                        <td>Иванов</td>
                                        <td>bo.yao@utsoutwestern.edu</td>
                                        <td>8-951-695-57-69</td>
                                        <td>25.12.2000</td>
                                        <td><a href="#">Запрос</a></td>
                                    </tr>
                                    <tr>
                                        <td>Запрос</td>
                                        <td>Иванов</td>
                                        <td>bo.yao@utsoutwestern.edu</td>
                                        <td>8-951-695-57-69</td>
                                        <td>25.12.2000</td>
                                        <td><a href="#">Запрос</a></td>>
                                    </tr>
                                    <tr>
                                        <td>Запрос</td>
                                        <td>Иванов</td>
                                        <td>bo.yao@utsoutwestern.edu</td>
                                        <td>8-951-695-57-69</td>
                                        <td>25.12.2000</td>
                                        <td><a href="#">Запрос</a></td>
                                    </tr>
                                    <tr>
                                        <td>Запрос</td>
                                        <td>Иванов</td>
                                        <td>bo.yao@utsoutwestern.edu</td>
                                        <td>8-951-695-57-69</td>
                                        <td>25.12.2000</td>
                                        <td><a href="#">Запрос</a></td>
                                    </tr>
                                    <tr>
                                        <td>Запрос</td>
                                        <td>Иванов</td>
                                        <td>bo.yao@utsoutwestern.edu</td>
                                        <td>8-951-695-57-69</td>
                                        <td>25.12.2000</td>
                                        <td><a href="#">Запрос</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- publications end -->
                        </div>
                    </div>

                    <div id="col-right">

                        <div style="margin-left:60px;margin-right:20px;text-align: justify;">

                            <div style="padding: 0px 0px 0px 0px;"><h3 id="pendingrequest"> Ожидающие запросы</h3>
                            </div>

                            <!-- publications end -->
                        </div>
                    </div>

                    <div id="col-right">

                        <div style="margin-left:60px;margin-right:20px;text-align: justify;">

                            <div style="padding: 0px 0px 0px 0px;"><h3 id="closerequest"> Закрытые запросы</h3>
                            </div>

                            <!-- publications end -->
                        </div>
                    </div>
                </div>
            </div><!--close content_item-->
        </div><!--close content-->
    </div><!--close site_content-->
</div><!--close main-->

<?php include("footer.php"); ?>

<script type="text/javascript" src="js/image_slide.js"></script>

</body>
</html>
