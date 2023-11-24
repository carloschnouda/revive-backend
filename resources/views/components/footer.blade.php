<footer id="contact" class="bg-[#969797] py-10">

    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
            <!-- First Column -->
            <div class="col-span-1 md:col-span-1">
                <div class="text-center">
                    <img src="{{ Storage::url($settings['footer_logo']) }}" alt="Footer Logo">
                </div>
            </div>

            <!-- Second Column -->
            <div class="col-span-1 md:col-span-1 ">
                <div>
                    <h1 class="text-white font-montserrat-xbold md:text-xl lg:text-3xl mb-3 md:mb-10">
                        {{ $settings['connect_title'] }}</h1>
                    <div class="social-wrapper">
                        @foreach ($sociallinks as $item)
                            <a href="{{ $item['url'] }}" target="_blank">
                                <div class="flex flex-row items-center mb-3">
                                    <img class="me-1 w-6 h-6" src="{{ storage::url($item['icon']) }}"
                                        alt="{{ $item['title'] }}">
                                    <p class="text-white hover:text-[#A8D0CF] duration-500 font-bornova">
                                        {{ $item['title'] }}</p>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- Third Column -->
            <div class="col-span-1 md:col-span-1">
                <div class="booking_details">
                    <!-- Add content or links here -->
                    <h1 class="text-white font-montserrat-xbold md:text-xl lg:text-3xl mb-3 md:mb-10">
                        {{ $settings['booking_title'] }}</h1>
                    <div class="mb-2">
                        <h4 class="font-bornova-bold text-white border-bottom border-white border-b ">
                            {{ $settings['address_title'] }}</h4>
                    </div>
                    <div class="mb-4 text-white font-bornova">
                        {!! $contactdetails['location']['title'] !!}
                    </div>
                    <div class="text-white font-bornova mb-1">
                        {!! $contactdetails['phone']['title'] !!}
                    </div>
                    <div class="text-white font-bornova">
                        {!! $contactdetails['email']['title'] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
