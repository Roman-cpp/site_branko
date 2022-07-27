@extends('include.template_edit')

@section('title_block', '')

@section('content')
    <div class="container inner">
        <div class="form-container">
            <form action="{{route('gallery.store')}}" method="post" class="vanilla vanilla-form" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <input type="hidden" name="operation" value="galleryAdd">
                <div class="col-sm-6">
                    <div class="form-field">
                        <label class="btn">
                            <input type="file"  name="image" placeholder="Телефон" style="display: none">
                            <div>выберите файл</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-field">
                        <label class="custom-select">
                            <select name="theme" required="required">
                                <option value="">Выберите тему</option>
                                @foreach($themes as $theme)
                                    <option value="{{$theme->id}}">{{$theme->name}}</option>
                                @endforeach
                            </select>
                            <i class="icon-ok"></i><span></span>
                        </label>
                    </div>
                </div>
                <input type="submit" class="btn" value="Отправить" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
            </form>
        </div>
    </div>

    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('gallery.index')}}" class="btn btn-large btn-blue">вернуться</a></div>
@endsection
