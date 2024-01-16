<section id="contact" class="contact-section padding">
    <div id="google_map"></div><!-- /#google_map -->
    <div class="container">
        <div class="row contact-wrap">
            <div class="col-md-6 xs-padding">
                <div class="contact-info">
                    <h2>Get in touch</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Main has survived not only five centuries.</p>
                    <ul>
                        <li><i class="ti-location-pin"></i> 315 West 33rd Street New York, NY 10001</li>
                        <li><i class="ti-mobile"></i> +1 212 425 8617, +1 212 425 8533</li>
                        <li><i class="ti-email"></i> Youremail@companyname.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 xs-padding">
                <div class="contact-form">
                    <h2>Drop us a line</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <form action="{{route('sendmessage')}}" method="post" id="" class="form-horizontal">
                        @csrf
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">Send Message</button>
                            </div>
                        </div>
                        @if(session('success'))
                            <script>
                                // Wait for the document to be ready
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Scroll to the #contact element
                                    document.getElementById('contact').scrollIntoView({
                                        behavior: 'smooth'
                                    });
                                });
                            </script>
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        
                        @if ($errors->any())
                        <script>
                            // Wait for the document to be ready
                            document.addEventListener('DOMContentLoaded', function() {
                                // Scroll to the #contact element
                                document.getElementById('contact').scrollIntoView();
                            });
                        </script>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Contact Section -->