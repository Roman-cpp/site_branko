<div class="col-xs-2">
    <ul class="nav nav-stacked">
        <li role="presentation" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                Галерея
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li role="presentation"> <a href="{{route('gallery.index')}}">катигории</a></li>
                <li role="presentation"><a href="{{route('image.index')}}">изображения</a></li>
            </ul>
        </li>
        <li>
            <form method="post" action="{{route('logout')}}">
                @csrf
                <input type="submit" >
            </form>
        </li>
    </ul>
</div>
