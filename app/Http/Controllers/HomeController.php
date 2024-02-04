<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $company = Company::first();

        $slides = Slide::where('is_active', true)
            ->get();

        $services = Service::all();

        return view('home', compact(['company', 'slides', 'services']));
    }
}
