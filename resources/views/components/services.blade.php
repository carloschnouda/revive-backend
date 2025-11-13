<section id="services" class="bg-gradient-to-b from-white via-[#F9FAFB] to-[#F3F4F6]">
    <div class="container py-[50px]">
        <div class="col-span-1 text-center mb-8" animate="up">
            <div class="title text-transparent bg-clip-text bg-gradient-to-r from-[#14b8a6] to-[#87C8C6] text-5xl md:text-7xl font-black">
                {{ $settings['services_section_title'] }}
            </div>
            <div class="w-20 h-1 bg-gradient-to-r from-[#14b8a6] to-[#87C8C6] rounded-full mx-auto mt-4"></div>
        </div>
        <div class="col-span-1 max-w-3xl mx-auto text-center text-[#4B5563] pt-6 text-lg font-normal" animate="up" style="transition-delay: 0.3s">
            {{ $settings['services_section_description'] }}
        </div>
        <div class="col-span-1 py-12 ">
            <div class="swiper mySwiper ">
                <div class="swiper-wrapper py-2">
                    @foreach ($services as $i => $service)
                        <div class="swiper-slide h-full" animate="down" style="transition-delay: {{ $i * 0.4 }}s">
                            <div
                                class="bg-white text-[#969797] text-center p-4 md:p-8 h-full flex flex-col shadow-md rounded-lg">
                                <div class="service-title mb-5 min-h-[56px] flex items-center justify-center">
                                    <h4 class="text-lg font-bornova-bold">
                                        {{ $service['title'] }}
                                    </h4>
                                </div>
                                <div class="image mb-5 mx-auto w-full flex justify-center p-4 md:p-8">
                                    <img class="object-contain h-[120px] md:h-[165px]" src="{{ Storage::url($service['icon']) }}"
                                        alt="{{ $service['title'] }}">
                                </div>
                                <div class="service-box-description mb-5 flex-grow">
                                    <p>
                                        {{ $service['description'] }}
                                    </p>
                                </div>
                                @if (isset($service['single_page']) && $service['single_page'])
                                    <a class="mt-auto" href="{{ route('single-service', $service['slug']) }}">
                                        <div
                                            class="button text-white rounded py-2  duration-1000 cursor-pointer">
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
