<section id="testimonial" class="testimonial-section bd-bottom padding">
    <div class="container">
        <div id="testimonial-carousel" class="testimonial-carousel owl-carousel">
            @foreach ($testimonails as $testimonial)
                
            <div class="testi-item text-center">
                <i class="fa fa-quote-left"></i>
                <p>{{$testimonial->comment}}</p>
                <h4>{{$testimonial->name}} <span>{{$testimonial->title}}</span></h4>
            </div>
            @endforeach  
        </div>
    </div>
</section><!-- /testimonial-section -->