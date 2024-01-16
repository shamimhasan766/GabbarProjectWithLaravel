<section class="blog-section bg-grey padding">
    <div class="container">
        <div class="section-heading mb-40 text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
            <h2>Recent News</h2>
        </div>
        <div class="row">
            @foreach ($recentnews as $news)
                
            <div class="col-lg-4 col-sm-6 sm-padding  wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                <div class="blog-box">
                    <div class="blog-thumb">
                       <img src="http://127.0.0.1:8000/{{$news->image}}" alt="img">
                       <div class="post-meta">
                            <div>
                               <span><i class="fa fa-user"></i>By: {{$news->author}}</span>
                                <span><i class="fa fa-calendar"></i>{{$news->created_at}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="blog-single.html">{{$news->caption}}</a></h3>
                        <p>{{$news->short_desc}}</p>
                        <a href="blog-single.html" class="read-more">Read More</a>
                    </div>
                </div>
            </div><!-- Post 1 -->

            @endforeach
        </div>
    </div>
</section><!-- Blog Section -->