<section id='meet-the-team' class="bg-[#A8D0CF]">
    <div class="container py-[50px]">
        <div class="grid grid-cols-2 mb-[30px]">
            <div class="col-span-1" animate="right">
                <div class="text-white text-5xl md:text-8xl font-bornova-bold">{!! $settings['team_section_title'] !!}</div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2  gap-10">
            @foreach ($team as $i => $team_member)
                <div class="col-span-1 popup-gallery" data-id={{ $team_member['id'] }} animate="down" style="transition-delay: {{$i * 0.4 }}s ">
                    <div class="w-[350px] max-w-full mx-auto cursor-pointer">
                        <div class="relative border-b-[15px] border-[#E3E8EC] hover:border-[#a8d0cf] transition-colors ease-out duration-1000">
                            <img class="object-cover max-h-72 text-center mx-auto z-20 relative"
                                src="{{ Storage::url($team_member['image']) }}" alt="">
                            <div
                                class="bg-white absolute bottom-0 -translate-x-[50%] left-[50%] w-full h-[80%] z-10 team-box-radius">

                            </div>
                        </div>
                        <div class="py-5 bg-white">
                            <div class="text-[#969797] font-bornova-bold text-center">
                                {{ $team_member['name'] }}
                            </div>
                            <div class="text-[#969797] text-center font-montserrat">
                                {{$settings['team_button_title']}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

   <x-popup :team="$team" />


</section>
