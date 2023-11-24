<?php

namespace App\Http\Controllers;

use App\ContactSetting;
use App\FixedSetting;
use App\MenuItem;
use App\OurTeam;
use App\SeoPage;
use App\Service;
use App\SocialLink;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    function getAllServices() {
        return Service::orderBy('ht_pos')->get();
    }

    function getSingleService($slug) {
        return Service::where('slug', $slug)->firstOrFail();
    }

    function getAllTeamMembers() {
        return OurTeam::orderBy('ht_pos')->get();
    }



    function index() {
        $team = $this->getAllTeamMembers();
        $services = $this->getAllServices();
        $seo_page = SeoPage::where('slug', 'home')->firstOrFail();

        return view('home', compact('team', 'services', 'seo_page'));
    }

    function singleService($slug) {

        $service = $this->getSingleService($slug);

        return view('single-service', compact('service'));
    }
}
