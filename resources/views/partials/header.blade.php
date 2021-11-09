<header>
    <header>
        <div class="header-banner">
            <div class="d-flex justify-content-end container text-uppercase">
                <div class="white-text font-min">
                    dc power &trade; visa &reg;
                </div>
                <div class="white-text font-min">
                    additional dc sites <span class="font-min">&#x25BC</span>
                </div>
            </div>
        </div>
        <div class="header-container">
            <div class="container d-flex justify-content-between">
                <div class="logo">
                    <a href="{{ route('homepage') }}" class="d-flex align-items-center">
                        <img src="{{ asset('img/dc-logo.png') }}" alt="">
                    </a>
                </div>
        
                <nav>
                    <ul class="d-flex">
                        <li>
                            <a href="{{ route ('homepage') }}" class="text-center font-min text-uppercase {{ Request::route()->getName() == 'homepage' ? 'active' : NULL }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route ('comics.index') }}" class="text-center font-min text-uppercase {{ Request::route()->getName() == 'comics.index' ? 'active' : NULL }}">
                                Comics CRUD Controller
                            </a>
                        </li>
                        <li>
                            <input class="font-min" type="text" placeholder="Search &#x2315">
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</header>