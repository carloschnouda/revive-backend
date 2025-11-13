<nav class="transparent-nav">
    <div class="container mx-auto px-4">
        <div class="flex flex-row items-center justify-between">
            <div class="flex-shrink-0">
                <div class="menu-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ Storage::url($settings['logo']) }}" alt="Menu Logo">
                    </a>
                </div>
            </div>
            <div class="flex items-center">
                <div class="destop-menu-wrapper">
                    <ul>
                        @foreach ($menulinks as $item)
                            <li>
                                @if (Route::currentRouteName() == 'home')
                                    <div data-section="{{ $item['slug'] }}">
                                        {{ $item['title'] }}
                                    </div>
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
            <!-- Close Button -->
            <div class="close-menu-button">
                <button class="close-btn" aria-label="Close Menu">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 8L8 24M8 8L24 24" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            
            <div class="mobile-menu-links h-full flex items-center justify-center">
                <ul class="flex flex-col items-center">
                    @foreach ($menulinks as $item)
                        @if (Route::currentRouteName() == 'home')
                            <li class="mb-8">
                                <div data-section="{{ $item['slug'] }}">
                                    {{ $item['title'] }}
                                </div>
                            </li>
                        @else
                            <li class="mb-8">
                                <a href="{{ route('home') }}" data-section="{{ $item['slug'] }}">
                                    {{ $item['title'] }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

        </div>

    </div>
</nav>
