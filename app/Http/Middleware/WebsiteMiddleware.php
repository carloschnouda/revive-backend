<?php

namespace App\Http\Middleware;

use App\ContactSetting;
use App\FixedSetting;
use App\MenuItem;
use App\SocialLink;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\View;

class WebsiteMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        function getFixedSettings() {
            return FixedSetting::firstOrFail();
        }

        function getContactDetails() {
            return ContactSetting::orderBy('ht_pos')->get()->keyby('slug');
        }
    
        function getMenuItems() {
            return  MenuItem::orderBy('ht_pos')->get()->keyBy('slug');
        }

        function getSocialLinks() {
            return SocialLink::orderBy('ht_pos')->get();
        }

        $settings = getFixedSettings();
        $contact_details = getContactDetails();
        $menu_items = getMenuItems();
        $social_links = getSocialLinks();

        View::share(compact('settings', 'menu_items', 'contact_details', 'social_links'));
        return $next($request);
    }
}
