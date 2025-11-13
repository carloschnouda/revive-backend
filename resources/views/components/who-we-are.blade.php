<section id="who-we-are" style="background-image: url({{ Storage::url($settings['who_we_are_image']) }})" class="w-full bg-cover bg-scroll lg:bg-fixed bg-center bg-no-repeat relative">
    <div class="container py-16 md:py-24 lg:py-32 relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">

            <!-- Title Column -->
            <div class="who-we-are-title" animate="right">
                <div class="inline-block">
                    <span class="text-sm uppercase tracking-wider font-semibold text-teal-700 mb-4 block">{{ $settings['who_we_are_subtitle'] }}</span>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black leading-tight mb-6">
                        {{ $settings['who_we_are_title'] }}
                    </h1>
                    <div class="w-20 h-1 bg-gradient-to-r from-teal-500 to-teal-300 rounded-full"></div>
                </div>
            </div>

            <!-- Description Column -->
            <div class="who-we-are-content" animate="left" style="transition-delay: 0.3s">
                <div class="bg-white/80 backdrop-blur-md rounded-3xl p-6 md:p-8 lg:p-10 border border-teal-200 shadow-2xl">
                    <div class="text-gray-700 text-base md:text-lg leading-relaxed who-we-are-text">
                        {!! $settings['who_we_are_description'] !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
