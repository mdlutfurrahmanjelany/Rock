  <header>
 <!-- header inner -->
        <div class="header sticky">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="{{asset('/')}}"><img src="rock/images/logo.jpg" alt="logo" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-10 col-sm-10">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        
                                        <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{asset('/')}}">Home</a></li>
                                        <li class="{{ Request::path() == 'about' ? 'active' : '' }}"><a href="/class16/public/about">About</a></li>
                                        <li class="{{Request::path()=='album' ? 'active' : ''}}"> <a href="/class16/public/album"> Albums</a> </li>
                                        <li class="{{Request::path()=='blog' ? 'active' : ''}}"> <a href="{{asset('/blog')}}">Blog</a> </li>
                                        <li class="{{Request::path()=='contact' ? 'active' : ''}}"> <a href="{{ asset('/contact') }}">Contact</a> </li>
                                        <li> <a href="{{asset('/admin/dashboard')}}">Login</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
                        <form class="search">
                            <input class="form-control" type="text" placeholder="Search">
                            <button><img src="rock/images/search_icon.png"></button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
</header>

    <!-- end header -->
