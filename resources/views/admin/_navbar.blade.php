<nav id="topNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
        </div>
        <div class="navbar-collapse collapse" id="bs-navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a class="page-scroll" href="{{route('posts.index')}}">Posts</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('categories.index')}}">Categories</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('messages')}}">Messages</a>
                </li>
                <li>
                    <a class="page-scroll" href="{{route('bookings')}}">Bookings</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="{{route('logout')}}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>