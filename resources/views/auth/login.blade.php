@extends('include.template_edit')
<div class="container inner">
    <div class="container">
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
        <h1>Войти</h1>
        <p>Войдите в свой аккаунт, чтобы продолжить.</p>
        <form method="post" action="{{route('login')}}" class="text-left">
            @csrf
            <div class="form">
                <label for="email">ЭЛЕКТРОННАЯ ПОЧТА</label>
                <input id="email" name="email" type="email" class="form-control">
                <label for="password">ПАРОЛЬ</label>
                <input id="password" name="password" type="password"  placeholder="Пароль">
                <input type="submit" class="btn btn-primary">
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
