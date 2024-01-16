<section class="promo-section padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row promo-wrap">
                    @foreach ($promos as $promo)
                        
                    <div class="col-lg-4 col-sm-6 sm-padding wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="promo-content text-center">
                            <img src="http://127.0.0.1:8000/{{$promo->image}}" alt="icon">
                            <h3>{{$promo->title}}</h3>
                            <p>{{$promo->desc}}</p>
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section><!--promo-section-->