<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\HomePageSetting;
use App\Models\MenuItem;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slide;
use App\Models\SocialAccount;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company = Company::first();

        $slides = Slide::where('is_active', true)
            ->get();

        $services = Service::all();

        $homePageSettings = HomePageSetting::first();

        $works = Work::where('is_active', true)
            ->get();

        $featured = Post::where('is_featured', true)
            ->where('is_active', true)
            ->latest()
            ->first();

        $posts = Post::where('is_active', true)
            ->latest()
            ->take(3)
            ->get();

        $socials = SocialAccount::all();

        $menuItems = MenuItem::all();

        return view('home', compact([
            'company',
            'slides',
            'services',
            'homePageSettings',
            'works',
            'featured',
            'posts',
            'socials',
            'menuItems'
            ]));
    }
}
