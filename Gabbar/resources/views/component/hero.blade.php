<section id="home" class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row hero-wrap align-items-center">
            <div class="col-md-6">
                <div class="hero-content">
                    <h1>{{$intro->name}}</h1>
                    <p>{{$intro->desc}}.</p>
                    <a href="{{$intro->button_link}}" class="default-btn">{{$intro->button}}</a>
                </div>
            </div>
            <div class="col-md-6 d-none d-lg-block d-md-block">
                <div class="hero-content">
                    <img src="http://127.0.0.1:8000/{{$intro->image}}" alt="img">
                </div>
            </div>
        </div>
    </div>
</section><!--hero-section-->