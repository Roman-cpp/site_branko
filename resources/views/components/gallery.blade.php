<section id="portfolio">
    <div class="light-wrapper">
        <div class="container inner">
            <div class="section-title text-center">
                <h3>Галерея</h3>
            </div>
            <div class="cbp-panel">
                <div id="filters-container" class="cbp-filter-container text-center">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> все </div>
                    @foreach($gallery as $group)
                        <div data-filter=".{{$group->id}}" class="cbp-filter-item">{{$group->name}}</div>
                    @endforeach

                </div>
                <div id="grid-container" class="cbp">
                    @foreach($images as $image)
                        <div class="cbp-item {{$image->gallery_id}}"> <a href="ajax/project1.html" class="cbp-caption cbp-singlePageInline">
                                <div class="cbp-caption-defaultWrap"> <img src="/storage/{{ $image->file_name }}" alt="" /> </div>
                                <div class="cbp-caption-activeWrap">
                                    <div class="cbp-l-caption-alignCenter">
                                        <div class="cbp-l-caption-body">
                                            <div class="cbp-l-caption-title">увеличить</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
