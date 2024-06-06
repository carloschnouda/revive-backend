<div class="video-container">
    <div class="h-full w-full">
        @if ($settings['banner_video'])
            <video autoplay muted playsinline loop id="video-background" poster="{{asset('images/black-bg.webp')}}">
                <source src="{{ Storage::url($settings['banner_video']) }}" type="video/mp4">
            </video>
            <div class="mute-button absolute right-5 bottom-5 sm:right-10 sm:bottom-10 ">
                <div class="mute-wrapper bg-[#A8D0CF] p-5 rounded-[50px]">
                    <img class="mute w-5 h-5 " src="{{ asset('images/mute.svg') }}" alt="Mute Button">
                    <img class="unmute h-5 w-5 hidden" src="{{ asset('images/unmute.svg') }}" alt="Unmute Button">
                </div>
            </div>
        @else
            <img class="h-full w-full object-cover" src="{{ Storage::url($settings['banner_image']) }}" alt="">
        @endif
    </div>

    <div class="video-description">
        <div class="container w-full">
            <div class="flex flex-row">
                <div class="basis-full">
                    <div animate>
                        {!! $settings['banner_description'] !!}
                    </div>
                </div>
            </div>
            <div class="basis-full text-center" animate="down" style="transition-delay: 1s">
                <div class="video-button mt-[45px]">
                    @if ($settings['banner_button'])
                        <a href="{{ $settings['banner_button_url'] }}">
                            <button class="btn rounded p-2">
                                {{ $settings['banner_button'] }}
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
