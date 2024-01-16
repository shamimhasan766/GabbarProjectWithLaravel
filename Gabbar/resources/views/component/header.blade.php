        
        <header id="header" class="header-section d-flex align-items-center">
            <div class="container">
                <nav class="navbar">
                    <a href="" class="navbar-brand">
                        <img class="logo-light" height="40px" src="http://127.0.0.1:8000/{{$logo->path}}" alt="Apptex">
                        <img class="logo-dark" height="40px" src="http://127.0.0.1:8000/{{$logo->path}}" alt="Apptex">
                    </a>
                    <div class="d-flex menu-wrap align-items-center">
                       <div id="navmenu" class="mainmenu">
                           <ul class="nav">
                            @foreach ($menus as $menu)
                                
                            <li><a data-scroll class="nav-link" href="{{$menu->link}}">{{$menu->menu}}</a></li>
                            @endforeach
                            </ul>
                       </div>
                       <a href="#" class="header-btn">Get Started Now</a>
                    </div>
                </nav>
            </div>
		</header> <!--header-section-->