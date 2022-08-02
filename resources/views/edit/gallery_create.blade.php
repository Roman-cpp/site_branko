@extends('include.template_edit')

@section('title_block', '')

@section('content')
<div class="container inner">
    <div class="form-container">
        <form action="{{route('gallery.store')}}" method="post" class="vanilla vanilla-form">
            @csrf
            <div class="col-sm-6">
                <div class="form-field">
                    <label>
                        <input type="text"  name="name">
                    </label>
                </div>
            </div>
            <input type="submit" class="btn" value="Отправить">
        </form>
    </div>
</div>

<div class="tp-caption sfr" ><a href="{{route('gallery.index')}}" class="btn btn-large btn-blue">вернуться</a></div>
@endsection
