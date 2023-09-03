<header id="header" class="header-transparent header-transparent-dark-bottom-border header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 bg-dark box-shadow-none">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="{{ route('home') }}">
                                <img alt="" width="250" src="/uzman-dr-turan-cetin-beyaz.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link" href="{{ route('home') }}">
                                                Anasayfa
                                            </a>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="{{ route('service') }}">
                                                Çalışma Alanlarımız
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($Service as $item)
                                                <li>
                                                    <a class="dropdown-item"  href="{{ route('servicedetail' , $item->slug)}}" title="{{ $item->title }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="dropdown dropdown-primary">
                                            <a class="dropdown-toggle nav-link" href="#">
                                                Hakkımda
                                            </a>
                                            <ul class="dropdown-menu">
                                                @foreach($Pages as $item)
                                                    <li>
                                                        <a class="dropdown-item"  href="{{ route('corporatedetail' , $item->slug)}}" title="{{ $item->title }}">
                                                            {{ $item->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('video') }}">
                                                Video Galeri
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('blog') }}">
                                                Makaleler
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ route('contactus') }}">
                                                İletişim
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
