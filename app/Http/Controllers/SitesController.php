<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function index()
    {
        echo "Co tu sie dzieje";
    }

    public function add()
    {
        return view('sites.add');   
    }
}
