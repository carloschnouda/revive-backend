@foreach ($team as $item)
    <div
        class="popup-wrapper z-40 hidden fixed top-0 left-0 w-full h-[100vh] popup-wrapper-{{ $item->id }} bg-[#87c8c638]">

        <div
            class="fixed top-[50%] z-50 left-[50%] -translate-x-1/2 -translate-y-1/2 bg-[#fff] w-3/4 h-3/4 sm:h-auto md:w-auto overflow-y-auto p-10">
            <div class="content-wrapper">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="col-span-1 pe-5">
                        <img class="object-contain max-h-72 w-full text-center" src="{{ Storage::url($item['image']) }}"
                            alt="">
                    </div>
                    <div class="col-span-1">
                        <div class="title mt-5">
                            <div class="text-[#969797] font-bornova-bold border-b-2 border-[#E3E8EC]">
                                {{ $item['name'] }}
                            </div>

                            <div class="mt-5">
                                {!! $item['description'] !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="close-modal fixed right-[10px] top-[10px] cursor-pointer ">
                    <img src="{{ asset('images/close.svg') }}" alt="">
                </div>
            </div>
        </div>

    </div>
@endforeach
