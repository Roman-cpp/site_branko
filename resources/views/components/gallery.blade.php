<div class=" gallery gallery-{{ $type }}">
    <section id="portfolio">
        <div class="light-wrapper">
            <div class="container inner">
                <div class="section-title text-center">
                    <h3>Галерея</h3>
                </div>
                <div class="cbp-panel">
                    <div id="filters-container" class="cbp-filter-container text-center">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> все </div>
                        <div data-filter=".provision" class="cbp-filter-item"> обеспечение </div>
                        <div data-filter=".products" class="cbp-filter-item"> продукция </div>
                    </div>
                    <div id="grid-container" class="cbp">

                        {{ $img }}


                    </div>
                    <!--/.cbp -->

                    <!--/.text-center -->
                </div>
                <!--/.cbp-panel -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.light-wrapper -->
    </section>

</div>
