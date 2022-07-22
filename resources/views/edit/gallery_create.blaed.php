@extends('include.template_edit')

@section('title_block', '')

@section('content')
    <div class="container inner">
        <div class="form-container">
            <form action="{{route('edit.store')}}" method="post" class="vanilla vanilla-form" enctype="multipart/form-data" novalidate="novalidate">
                @csrf
                <input type="hidden" name="operation" value="galleryAdd">
                <div class="col-sm-6">
                        <div class="form-field">
                            <label>
                                <input type="file" name="image">
                                <i class="budicon-image"></i></label>
                        </div>
                        <!--/.form-field -->
                    </div>
                    <!--/column -->
                    <div class="col-sm-6">
                        <div class="form-field">
                            <label class="custom-select">
                                <select name="theme" required="required">
                                    <option value="">Выберите тему</option>
                                    <option value="provision">Обеспечение</option>
                                    <option value="products">Продукция</option>
                                </select>
                                <i class="icon-ok"></i><span><!-- fake select handler --></span> </label>
                        </div>
                        <!--/.form-field -->
                    </div>
                    <!--/column -->
                <input type="submit" class="btn" value="Отправить" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                <footer class="notification-box"></footer>
            </form>
        </div>
    </div>

@endsection
