<section id="about" class="about-section">
    <div class="container-fluid">
        <div class="row about-wrap">
            <div class="col-md-5 xs-padding">
                <div class="about-content-left d-flex align-items-center">
                    <h2>About Me</h2>
                    <div style=" background-image: url(http://127.0.0.1:8000/{{$work->image}});" class="about-img"></div>
                </div>
            </div>
            <div class="col-md-7 xs-padding">
                <div class="about-content-right">
                    <h2>{{$work->intro}}</h2>
                    <p>{{$work->desc}}</p>
                    <a href="{{$work->button_link}}" class="default-btn">{{$work->button}}</a>
                </div>
            </div>
        </div>
    </div>
</section><!--about-section-->