<?php

namespace App\Http\Controllers;

use App\Model\Menu;
use App\Model\Todayspecial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $todayspecial = DB::table("todayspecials")->select("id","image","title_".app()->getLocale()." as title","description_".app()->getLocale(). " as description" ,"parent_id","price")->get() ;;
        $menu = DB::table("menus")->select("id","image","title_".app()->getLocale()." as title","description_".app()->getLocale(). " as description" ,"parent_id","price")->get() ;
        return view('home', [
            "result"=>$menu,
            "todayspecial"=>$todayspecial
        ]);
    }
}
