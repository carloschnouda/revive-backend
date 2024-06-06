<section id="who-we-are" style="background-image: url({{ Storage::url($settings['who_we_are_image']) }})" class="w-full overflow-y-scroll bg-cover bg-scroll lg:bg-fixed bg-center bg-no-repeat">
    <div class="container py-20 lg:py-50 z-10 relative h-full">
        <div class="flex flex-row">
            <div class="basis-1/4">
                <div class="columns-1">
                    <div class="title">
                        <h1 class="text-5xl md:text-8xl " animate="right">
                            {{ $settings['who_we_are_title'] }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-row justify-end" animate="left" style="transition-delay: 1s">
            <div class="basis-3/4">
                {!! $settings['who_we_are_description'] !!}
            </div>
        </div>
    </div>

</section>
