<section id='meet-the-team' class="bg-gradient-to-br from-[#A8D0CF] via-[#87C8C6] to-[#5ee8e0] relative overflow-hidden">

    <!-- Decorative Background Elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 w-80 h-80 bg-white/5 rounded-full blur-3xl"></div>

    <div class="container py-16 md:py-20 lg:py-24 relative z-10">

        <!-- Section Header -->
        <div class="text-center mb-12 md:mb-16" animate="up">
            {{-- <span class="text-sm uppercase tracking-wider font-semibold text-white/90 mb-3 block">Our Experts</span> --}}
            <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-tight mb-4">
                {!! $settings['team_section_title'] !!}
            </h1>
            <div class="w-20 h-1 bg-white/80 rounded-full mx-auto"></div>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-10">
            @foreach ($team as $i => $team_member)
                <div class="team-card-wrapper" animate="zoom" style="transition-delay: {{$i * 0.15 }}s">
                    <div class="team-card group cursor-pointer" data-id="{{ $team_member['id'] }}">
                        <!-- Image Container -->
                        <div class="team-image-container relative overflow-hidden rounded-2xl mb-6">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#87C8C6] via-transparent to-transparent opacity-0 group-hover:opacity-80 transition-opacity duration-500 z-10"></div>
                            <img class="team-member-image w-full h-80 object-contain transform group-hover:scale-110 transition-transform duration-700"
                                src="{{ Storage::url($team_member['image']) }}"
                                alt="{{ $team_member['name'] }}">

                            <!-- Hover Overlay -->
                            <div class="absolute inset-0 flex items-end justify-center pb-6 opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20">
                                <div class="bg-white/90 backdrop-blur-sm rounded-full px-6 py-2 text-[#87C8C6] font-semibold text-sm uppercase tracking-wide shadow-lg">
                                    {{$settings['team_button_title']}}
                                </div>
                            </div>
                        </div>

                        <!-- Info Container -->
                        <div class="team-info text-center">
                            <h3 class="text-2xl font-bold text-white mb-2 group-hover:text-white/90 transition-colors">
                                {{ $team_member['name'] }}
                            </h3>
                            <div class="w-12 h-0.5 bg-white/60 rounded-full mx-auto"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <x-popup :team="$team" />

</section>
