@extends('include.template')

@section('title_block', 'Branko - О нас@endsection')

@section('navigation')
    <li class="current"><a href="/">о нас</a></li>
    <li><a href="/incubation">инкубирование</a></li>
    <li><a href="/contact">контакты</a></li>
@endsection

@section('content')
    @include('content.main-blog')
    @include('content.autobiography')
    @include('content.inverse-wrapper')
    <x-gallery type="error" :message="$images"/>
    @include('content.inverse-wrapper2')

    <div class="light-wrapper">
        @include('content.news')
        @include('content.about-company')
        @include('content.process-model')
    </div>

@endsection

