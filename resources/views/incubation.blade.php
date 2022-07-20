@extends('include.template')

@section('title_block', 'Branko - О нас@endsection')

@section('navigation')
    <li><a href="/">о нас</a></li>
    <li class="current"><a href="/incubation">инкубирование</a></li>
    <li><a href="/contact">контакты</a></li>
@endsection

@section('content')
    <div class="post-parallax parallax inverse-wrapper parallax3" style="background-image: url(style/images/art/slider-bg1.jpg);">
        <div class="container inner text-center">
            <h2>Инкубирование</h2>
        </div>
    </div>

    <div class="light-wrapper">
        <div class="container inner">
            <div class="thin2">
                <h4 style="text-align: center;">ИНКУБИРОВАНИЕ</h4>
            </div>
        </div>
    </div>
@endsection
