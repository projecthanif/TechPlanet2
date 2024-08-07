<nav>
    <div class="nav-logo">
        <img src="{{asset('assets/image/64-bit.png')}}" alt="" class="logo"/>
        <h1 class="nav-logo-text"><span class="cr-red">Tech</span>Planet</h1>
    </div>
    <ul class="navbar">
        <li class="nav-list"><a href="{{route('index')}}"
                                class="nav-link {{$route === 'index' ? 'active' : ''}}">Home</a></li>
        <li class="nav-list"><a href="{{route('shop')}}" class="nav-link {{$route === 'shop' ? 'active' : ''}}">Shop</a>
        </li>
        <li class="nav-list">
            <a href="{{route('about')}}" class="nav-link {{$route === 'about' ? 'active' : ''}}">About Us</a>
        </li>
        <li class="nav-list"><a href="{{route('blog')}}"
                                class="nav-link {{$route === 'blog' ? 'active' : ''}}">Blog</a></li>
        <li class="nav-list">
            <a href="{{route('contact')}}" class="nav-link {{$route === 'contact' ? 'active' : ''}}">Contact</a>
        </li>
    </ul>
    <div class="navbar end">
        <a href="" class="link-s">
            <button class="navbar-btn">Login</button>
        </a>
        <a href="" class="link-s">
            <i class="fa fa-search"></i>
        </a>
        <a href="" class="link-s">
            <i class="fa fa-shopping-cart"></i>
        </a>
        <button class="nav-toggle">
            <i class="fa fa-bars fa-1x"></i>
        </button>
    </div>
</nav>
