@extends('include.template_edit')

@section('title_block', 'Branko - О нас@endsection')

@section('navigation')
    <li class="current"><a href="/">о нас</a></li>
    <li><a href="/incubation">инкубирование</a></li>
    <li><a href="/contact">контакты</a></li>
@endsection

@section('content')

    <x-main_blog/>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('mainBlog.index')}}" class="btn btn-large btn-blue">Редактировать</a></div>
    <x-autobiography/>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-blue">Редактировать</a></div>
    <x-inverse_wrapper1/>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-blue">Редактировать</a></div>
    <x-gallery :images="$images"/>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('gallery.index')}}" class="btn btn-large btn-blue">Редактировать</a></div>
    <x-inverse_wrapper2/>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-blue">Редактировать</a></div>

    <div class="light-wrapper">
        <x-news/>
        <x-about-company/>
        <x-process-model/>
    </div>
@endsection

