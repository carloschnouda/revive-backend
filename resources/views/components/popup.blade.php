@foreach ($team as $item)
    <div
        class="popup-wrapper z-[9999] hidden fixed inset-0 w-full h-screen popup-wrapper-{{ $item->id }} bg-gradient-to-br from-[#1E293B]/95 via-[#334155]/90 to-[#0F172A]/95 backdrop-blur-md transition-all duration-500 ease-out opacity-0"
        style="animation: fadeIn 0.4s ease-out forwards;">

        <div
            class="fixed top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white rounded-3xl shadow-2xl w-[90%] max-w-4xl max-h-[90vh] overflow-hidden transform scale-95 transition-all duration-500"
            style="animation: scaleIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;">

            <!-- Close Button -->
            <button class="close-modal absolute top-4 right-4 z-10 w-12 h-12 rounded-full bg-gradient-to-br from-red-500 to-red-600 hover:from-red-600 hover:to-red-700 shadow-lg hover:shadow-xl flex items-center justify-center transition-all duration-300 group">
                <svg class="w-6 h-6 text-white transition-transform duration-300 group-hover:rotate-90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <!-- Content Wrapper with Scroll -->
            <div class="content-wrapper overflow-y-auto max-h-[90vh] p-8 md:p-12">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-12">

                    <!-- Image Column -->
                    <div class="col-span-1 md:col-span-2">
                        <div class="relative rounded-2xl overflow-hidden shadow-xl bg-gradient-to-br from-[#CCFBF8] to-[#A8D0CF] p-4">
                            <img class="object-contain w-full h-auto max-h-80 rounded-xl"
                                 src="{{ Storage::url($item['image']) }}"
                                 alt="{{ $item['name'] }}">
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="col-span-1 md:col-span-3">
                        <!-- Name and Title -->
                        <div class="mb-6">
                            <h3 class="text-3xl md:text-4xl font-black text-gray-900 mb-3 leading-tight">
                                {{ $item['name'] }}
                            </h3>
                            <div class="w-20 h-1 bg-gradient-to-r from-[#14b8a6] to-[#87C8C6] rounded-full"></div>
                        </div>

                        <!-- Description -->
                        <div class="prose prose-lg max-w-none team-member-description">
                            {!! $item['description'] !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
