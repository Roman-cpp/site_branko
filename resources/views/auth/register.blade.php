@extends('include.template_edit')

@section('content')
    <form class="container" method="post" action="{{route('register')}}">
        @csrf
        <label for="username">name</label>
        <input type="text" name="name">
        <label for="username">email</label>
        <input type="email" name="email">
        <label for="password">парол</label>
        <input type="password" name="password">
        <label for="password_confirmation">повторить пороль</label>
        <input type="password" name="password_confirmation">
        <input type="submit">
    </form>
@endsection
