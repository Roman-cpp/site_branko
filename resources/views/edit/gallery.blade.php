@extends('include.template_edit')

@section('content')
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('gallery.create')}}" class="btn btn-large btn-blue">Добавить</a></div>
    <div class="tp-caption sfr" data-x="30" data-y="470" data-speed="900" data-start="2200" data-easing="Sine.easeOut"  data-endspeed="100"><a href="{{route('edit')}}" class="btn btn-large btn-blue">вернуться</a></div>

    <section id="portfolio">
        <div class="light-wrapper">
            <div class="container inner">
                <div class="cbp-panel">
                    <div id="grid-container" class="cbp">
                        @foreach($images as $image)
                            <div class="cbp-item {{ $image->theme }}">
                                    <div class="cbp-caption-defaultWrap"> <img src="/storage/{{ $image->file_name}}" alt="" />
                                        <form method="POST" action="{{route('gallery.destroy', [$image->id])}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="X">
                                        </form>
                                    </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
