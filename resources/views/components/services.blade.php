<section id="services" class="bg-[#A8D0CF]">
    <div class="container py-[50px]">
        <div class="col-span-1">
            <div class="title text-white text-5xl md:text-8xl font-bornova-bold" animate="up">
                {{ $settings['services_section_title'] }}
            </div>
        </div>
        <div class="col-span-1 w-4/5 text-[#464159] pt-12 font-bornova" animate="up" style="transition-delay: 1s">
            {{ $settings['services_section_description'] }}
        </div>
        <div class="col-span-1 py-12 ">
            <div class="swiper mySwiper grid">
                <div class="swiper-wrapper grid-cols-3 max-h-[95%]">
                    @foreach ($services as $i => $service)
                        <div class="swiper-slide h-full" animate="down" style="transition-delay: {{ $i * 0.4 }}s">
                            <div
                                class="bg-white text-[#969797] text-center h-full p-8 flex flex-col shadow-md rounded-lg">
                                <div class="service-title mb-5">
                                    <h4 class="text-lg font-bornova-bold">
                                        {{ $service['title'] }}
                                    </h4>
                                </div>
                                <div class="image mb-5 mx-auto w-full flex justify-center">
                                    <img class="object-contain h-[165px]" src="{{ Storage::url($service['icon']) }}"
                                        alt="">
                                </div>
                                <div class="service-box-description mb-5 flex-grow-[1]">
                                    {{ $service['description'] }}
                                </div>
                                @if (isset($service['single_page']) && $service['single_page'])
                                    <a href="{{ route('single-service', $service['slug']) }}">
                                        <div
                                            class="button bg-[#969797] text-white rounded py-2 hover:bg-[#A8D0CF] duration-1000 cursor-pointer">
                                            {{ $settings['services_button'] }}
                                        </div>
                                    </a>
                                @endif

                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination translate-y-1/2 z-50"></div>
            </div>
        </div>
    </div>

</section>
