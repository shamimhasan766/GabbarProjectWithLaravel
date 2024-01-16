<?php

namespace App\Http\Controllers;

use App\Models\Intro;
use App\Models\Logo;
use App\Models\Menu;
use App\Models\Portfolio;
use App\Models\Promo;
use App\Models\RecentNews;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Work;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Index(){
        $menu = Menu::all();
        $promo = Promo::all();
        $service = Service::all();
        $portfolio = Portfolio::all();
        $testimonial = Testimonial::all();
        $recentnews = RecentNews::all();
        $intro = Intro::first();
        $work = Work::first();
        $logo = Logo::first();
        return view('index', [
            'menus'=>$menu,
            'intro'=>$intro,
            'promos'=>$promo,
            'work'=>$work,
            'services'=>$service,
            'portfolios'=>$portfolio,
            'testimonails'=>$testimonial,
            'recentnews'=>$recentnews,
            'logo'=>$logo,
        ]);
    }
}
