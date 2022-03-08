<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\Site;

class SitesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
        // return view('sites.index', [
        //     'sites' => $sites,
        //     'sites' => $site
        // ]);
        $sites = Site::all();
        return view('sites.index', compact('sites'));
    }


    public function add()
    {
        return view('sites.add');   
    }

    public function save(Request $request)
    {

        //1
        //dd($request->all());
        $site = new Site();
        $site->title = $request->input('title');
        $site->description = $request->input('description');
        $site->save();

        //2
        //druga metoda dodawania danych do bezy nalezy jednak pamietac o tokenie ktory nie pasuej do zadnego pola w bazie
        //Site::create($request->all());

    }

}
