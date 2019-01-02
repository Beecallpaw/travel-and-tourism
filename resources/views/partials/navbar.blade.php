<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            <a class="navbar-brand page-scroll" href="/"><i class="ion-ios-home"> </i> Home</a>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="{{route('gallery')}}">Gallery</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        Available packages <span class="caret"></span>
                    </a>
                    <ul style="background-color:darkgray" class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item" href="{{ route('category', ['slug'=>$category->slug]) }}">{{$category->type}}</a>
                        </li>
                        @endforeach
                    </ul>
                    </li>
                <li>
                    <a class="page-scroll" href="{{route('about')}}">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>