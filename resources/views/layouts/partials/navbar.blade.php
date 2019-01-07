<header>
    <div class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                <a class="navbar-brand" href="/"><img src="{{asset('assets/home/logo.png')}}" alt="logo"/></a>
            </div>
            <div class="navbar-collapse collapse ">
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Available Packages<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{{route('category',['slug'=>$category->slug])}}">{{$category->type}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>