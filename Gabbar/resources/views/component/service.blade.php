<section id="service" class="service-section bd-bottom padding">
    <div class="container">
        <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
            <h2>Services</h2>
        </div>
        <div class="row service-wrap">
            @foreach ($services as $service)
                
            <div class="col-lg-4 col-sm-6 pd-15">
                <div class="service-box">
                    <img src="http://127.0.0.1:8000/{{$service->image}}" alt="img">
                    <div class="service-content">
                        <h3>{{$service->title}}</h3>
                        <p>{{$service->desc}}</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section><!--service-section-->