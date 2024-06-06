<x-layout :seo="$seo_page">
    <x-navbar :settings="$settings" :menulinks="$menu_items" />
    <x-banner :settings="$settings" />
    <x-who-we-are :settings="$settings" />
    <x-team :team="$team" :settings="$settings" />
    <section id="parallax">
        <div class="h-[420px] w-full overflow-y-scroll bg-cover bg-scroll lg:bg-fixed bg-center bg-no-repeat"
            style="background-image:url({{ Storage::url($settings['our_work_image']) }});">
        </div>
    </section>
    <x-services :services="$services" />
    <x-footer :settings="$settings" :sociallinks="$social_links" :contactdetails="$contact_details" />
</x-layout>
