@extends('include.template_edit')

@section('content')
    <div class="divide50"></div>
    <div class="light-wrapper">
        <div class="container inner">
            <div class="thin">
                <div class="form-container">
                    <form action="/contact/send" method="post" class="vanilla vanilla-form" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label>
                                        <input type="text" name="title" placeholder="Заголовок" required="required">
                                        <i class="icon-print-1"></i>
                                    </label>
                                </div>
                                <!--/.form-field -->
                            </div>
                            <div class="col-sm-6">
                                <div class="form-field">
                                    <label class="btn">
                                        <input type="file"  name="phone" placeholder="Телефон" style="display: none">
                                        <div>выберите файл</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!--/.row -->
                        <textarea name="content"></textarea>
                        <input type="submit" class="btn" value="Отправить" data-error="Fix errors" data-processing="Sending..." data-success="Thank you!">
                        <footer class="notification-box"></footer>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('mainBlog.index')}}" class="btn btn-large btn-blue">вернуться</a></div>
@endsection
