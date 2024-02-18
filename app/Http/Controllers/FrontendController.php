<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;
use App\Models\Hero;
use App\Models\HeroImage;
use App\Models\ServiceTitle;
use App\Models\Service;
use App\Models\Tab;
use App\Models\Portfolio;
use App\Models\Team;
use App\Models\Account;

class FrontendController extends Controller
{
    public function index(){
        $logos = Logo::first();
        $heros = Hero::first();
        $heroimages = HeroImage::first();
        $tabs = Tab::all();
        $portfolios = Portfolio::all();
        $teams = Team::all();
        $accounts = Account::all();
        $service_titles = ServiceTitle::all();
        $services = Service::all();

        return view('index', [
            'logos' => $logos,
            'heros' => $heros,
            'heroimages' => $heroimages,
            'tabs' => $tabs,
            'portfolios' => $portfolios,
            'teams' => $teams,
            'accounts' => $accounts,
            'service_titles' => $service_titles,
            'services' => $services,
        ]);
    }
}
