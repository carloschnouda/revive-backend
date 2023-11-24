<x-layout :service="$service">
    <x-navbar :settings="$settings" :menulinks="$menu_items" />
    <x-single-page-banner :service="$service" />
    <div class="container py-10">
        <div class="description text-[#464159] font-bornova">
            @if ($service['long_description'])
                @php
                    $service['long_description'] = str_replace('%%gallery%%', view('components/gallery-images', ['service' => $service]), $service['long_description']);
                @endphp
            @endif
            {!! $service['long_description'] !!}
        </div>
    </div>
    <x-footer :settings="$settings" :sociallinks="$social_links" :contactdetails="$contact_details" />

</x-layout>
