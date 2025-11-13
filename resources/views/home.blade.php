<x-layout :seo="$seo_page">
    <x-navbar :settings="$settings" :menulinks="$menu_items" />
    <x-banner :settings="$settings" />
    <x-who-we-are :settings="$settings" />
    <x-experience :settings="$settings" :experienceStats="$experience_stats" />
    <x-team :team="$team" :settings="$settings" />
    <x-services :services="$services" />
    <x-footer :settings="$settings" :sociallinks="$social_links" :contactdetails="$contact_details" />
</x-layout>
