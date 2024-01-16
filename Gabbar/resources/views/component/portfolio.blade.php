<section id="portfolio" class="portfolio-section bg-grey padding">
    <div class="container">
      <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
            <h2>Portfolios</h2>
        </div>
       <div class="row">
            <ul class="portfolio-filter text-center mb-30">
                <li class="active" data-filter="*">All</li>
                <li data-filter=".branding">Branding</li>
                <li data-filter=".design">Design</li>
                <li data-filter=".wordpress">Wordpress</li>
                <li data-filter=".marketing">Marketing</li>
            </ul><!-- /.Work filter -->
        </div>
        <div class="row portfolio-items">
            @foreach ($portfolios as $portfolio)
            
            <div class="col-lg-4 col-sm-6 pd-15 single-item {{$portfolio->category}}">
                <div class="portfolio-box">
                    <img src="http://127.0.0.1:8000/{{$portfolio->image}}" alt="img">
                    <div class="portfolio-inner">
                        <div class="portfolio-content">
                            <h3><a href="img/po-1.jpg" class="img-popup">{{$portfolio->name}}</a></h3>
                            <span>{{ ucwords($portfolio->category) }}</span>
                        </div>
                    </div>
                </div>
            </div><!-- /Portfolio-1 -->
            @endforeach
        </div><!-- /.portfolio-items -->
    </div>
</section><!-- /.portfolio-section -->