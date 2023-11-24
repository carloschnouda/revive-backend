<nav class="transparent-nav">
    <div class="container">
        <div class="flex flex-row items-center justify-between py-4">
            <div class="basis-1/7">
                <div class="menu-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ Storage::url($settings['logo']) }}" alt="Menu Logo">
                    </a>
                </div>

            </div>
            <div class="basis-1x7">
                <div class="destop-menu-wrapper">
                    <ul>
                        @foreach ($menulinks as $item)
                            <li>
                                @if (Route::currentRouteName() == 'home')
                                    <a data-section="{{ $item['slug'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                @else
                                    <a href="{{ route('home') }}" data-section="{{ $item['slug'] }}">
                                        {{ $item['title'] }}
                                    </a>
                                @endif
                            </li>
                        @endforeach
                    </ul>

                </div>

                <div class="mobile-menu-wrapper">
                    <div class="burger-menu-button">
                        <svg class="vbp-header-menu-button__svg">
                            <line x1="0" y1="50%" x2="100%" y2="50%" class="top"
                                shape-rendering="crispEdges" />
                            <line x1="0" y1="50%" x2="100%" y2="50%" class="middle"
                                shape-rendering="crispEdges" />
                            <line x1="0" y1="50%" x2="100%" y2="50%" class="bottom"
                                shape-rendering="crispEdges" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-nav-wrapper block lg:hidden">
        <div class="menu-content container h-full">
            <div class="mobile-menu-links h-full pt-20">

                <ul class="flex flex-col">
                    @foreach ($menulinks as $item)
                        <li class="mb-10">
                            <a data-section="{{ $item['slug'] }}">
                                {{ $item['title'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
</nav>
