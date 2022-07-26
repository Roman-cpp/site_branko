@extends('include.template')

@section('title_block', 'Branko - О нас@endsection')

@section('navigation')
    <li class="current"><a href="/">о нас</a></li>
    <li><a href="/incubation">инкубирование</a></li>
    <li><a href="/contact">контакты</a></li>
@endsection

@section('content')

    <x-main_blog/>
    <x-autobiography/>
    <x-inverse_wrapper1/>
    <x-gallery :images="$images"/>
    <x-inverse_wrapper2/>

    <div class="light-wrapper">
        <x-news/>
        <x-about-company/>
        <x-process-model/>
    </div>

@endsection

