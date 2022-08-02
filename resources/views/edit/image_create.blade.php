@extends('include.template_edit')

@section('title_block', '')

@section('content')
    <div class="container inner">
        <div class="form-container">
            <form action="{{route('image.store')}}" method="post" class="vanilla vanilla-form" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <input type="hidden" name="operation" value="galleryAdd">
                <div class="col-sm-6">
                    <div class="form-field">
                        <label class="btn">
                            <input type="file"  name="image" style="display: none">
                            <div>выберите файл</div>
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-field">
                        <label class="custom-select">
                            <select name="gallery_id" required="required">
                                <option value="">Выберите тему</option>
                                @foreach($gallery as $theme)
                                    <option value="{{$theme->id}}">{{$theme->name}}</option>
                                @endforeach
                            </select>
                            <i class="icon-ok"></i><span></span>
                        </label>
                    </div>
                </div>
                <input type="submit" class="btn" value="Отправить">
            </form>
        </div>
    </div>

    <div class="tp-caption sfr"><a href="{{route('image.index')}}" class="btn btn-large btn-blue">вернуться</a></div>
@endsection
