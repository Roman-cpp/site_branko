<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="style/images/favicon.png">
    <title>Hygge</title>
    <!-- Bootstrap core CSS -->
    <link href="style/css/bootstrap.min.css" rel="stylesheet">
    <link href="style/css/plugins.css" rel="stylesheet">
    <link href="style/style.css" rel="stylesheet">
    <link href="style/css/color/blue.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href="style/type/icons.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="body-wrapper">
    <nav class="navbar navbar-default default solid">
        <div class="container">
            <div class="navbar-header">
                <div class="basic-wrapper"> <a class="btn responsive-menu" data-toggle="collapse" data-target=".navbar-collapse"><i></i></a>
                    <div class="navbar-brand"> <a href="index.html"><img src="#" srcset="style/images/logo.png 1x, style/images/logo@2x.png 2x" class="logo-light" alt="" height="50" /><img src="#" srcset="style/images/logo-dark.png 1x, style/images/logo-dark@2x.png 2x" class="logo-dark" alt="" height="50"/></a>
                    </div>
                    <!-- /.navbar-brand -->
                </div>
                <!-- /.basic-wrapper -->
            </div>
            <!-- /.navbar-header -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="\">о нас</a></li>
                    <li><a href="/incubation">инкубирование</a></li>
                    <li class="current"><a href="/contact">контакты</a></li>
                </ul>
                <!-- /.navbar-nav -->
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->
</div>

<div class="offset"></div>
<div class="white-wrapper">
    <div class="map-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2499.4483800426133!2d3.2241689!3d51.2108153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c350cfcf934d7d%3A0xa4d8f385ffa7d70b!2sChoco-Story!5e0!3m2!1sen!2str!4v1534408440419" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- /.map-wrapper -->
</div>


<!-- /.white-wrapper -->

<div class="light-wrapper">
    <div class="container inner">
        <div class="thin">
            <div class="section-title text-center">
                <h3>Связаться</h3>
                <p class="lead">Не стесняйтесь писать нам</p>
            </div>
            <ul class="contact-info text-center">
                <li><i class="icon-location"></i>M422060, респ. Татарстан, пгт. Богатые Сабы, ул. Заводская, д. 19 </li>
                <li><i class="icon-phone"></i>+ 421 903 703 265</li>
                <li><i class="icon-mail"></i><a href="sales@branko-nitra.eu">sales@branko-nitra.eu</a> </li>
            </ul>
            <div class="divide50"></div>
            <div class="form-container">
                <form action="/contact/send" method="post" class="vanilla vanilla-form" novalidate="novalidate">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="text" name="name" placeholder="Ваше имя" required="required">
                                    <i class="icon-user"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="email" name="email" placeholder="Электронная почта" required="required">
                                    <i class="icon-mail-alt"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label>
                                    <input type="tel" name="phone" placeholder="Телефон">
                                    <i class="icon-phone"></i></label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                        <div class="col-sm-6">
                            <div class="form-field">
                                <label class="custom-select">
                                    <select name="theme" required="required">
                                        <option value="">Выберите тему</option>
                                        <option value="Sales">Сотрудничество</option>
                                        <option value="Marketing">Поддержка</option>
                                    </select>
                                    <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                            </div>
                            <!--/.form-field -->
                        </div>
                        <!--/column -->
                    </div>
                    <!--/.row -->
                    <textarea name="message" placeholder="Напишите Ваше сообщение сюда..."></textarea>
                    <input type="submit" class="btn" value="Отправить" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                    <footer class="notification-box"></footer>
                </form>
                <!--/.vanilla-form -->
            </div>
            <!--/.form-container -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.light-wrapper -->

    @include('include.footers')
    <!-- /footer -->
</div>
<!--/.body-wrapper -->
<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script src="style/js/plugins.js"></script>
<script src="style/js/jquery.themepunch.tools.min.js"></script>
<script src="style/js/scripts.js"></script>
</body>
</html>
