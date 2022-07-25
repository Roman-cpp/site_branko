@extends('include.template_edit')

@section('title_block', 'Branko - О нас@endsection')

@section('navigation')
    <li class="current"><a href="/">о нас</a></li>
    <li><a href="/incubation">инкубирование</a></li>
    <li><a href="/contact">контакты</a></li>
@endsection

@section('content')
    @include('content.main-blog')
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('mainBlog.index')}}" class="btn btn-large btn-blue">Редактировать</a></div>
    @include('content.autobiography')
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-blue">Редактировать</a></div>
    @include('content.inverse-wrapper')
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-blue">Редактировать</a></div>
    @include('content.gallery')
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('gallery.index')}}" class="btn btn-large btn-blue">Редактировать</a></div>
    @include('content.inverse-wrapper2')
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="#" class="btn btn-large btn-blue">Редактировать</a></div>

    <div class="light-wrapper">
        @include('content.news')
        @include('content.about-company')
        @include('content.process-model')
    </div>

@endsection

