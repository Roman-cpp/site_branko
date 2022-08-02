<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="style/images/favicon.png">
    <title>sf</title>
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
<div class="container inner">
    <div class="container inner">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
        <h1>Войти</h1>
        <p>Войдите в свой аккаунт, чтобы продолжить.</p>
        <form method="post" action="" class="text-left">
            @csrf
            <input type="hidden" name="_token" value="5tN67t0m58gZtpGzFA1xF10zLUEVtYk0OuoVYA72">                                <input type="hidden" name="remember" value="on">
            <div class="form">
                <div id="username-field" class="field-wrapper input">
                    <label for="email">ЭЛЕКТРОННАЯ ПОЧТА</label>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-user">
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <input id="email" name="username" type="email" placeholder="user@example.com"
                           class="form-control">
                </div>
                <div id="password-field" class="field-wrapper input mb-2">
                    <div class="d-flex justify-content-between">
                        <label for="password">ПАРОЛЬ</label>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" class="feather feather-lock">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg>
                    <input id="password" name="password" type="password" class="form-control"
                           placeholder="Пароль">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                         stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="field-wrapper">
                        <button type="submit" class="btn btn-primary" value="">Войти</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('gallery.index')}}" class="btn btn-large btn-blue">Иди прямо</a></div>

<script src="style/js/jquery.min.js"></script>
<script src="style/js/bootstrap.min.js"></script>
<script src="style/js/plugins.js"></script>
<script src="style/js/jquery.themepunch.tools.min.js"></script>
<script src="style/js/scripts.js"></script>

</body>
</html>
