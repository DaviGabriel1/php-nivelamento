<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class SiteController extends Controller
{
    public function index()
    {
       $produtos = Produto::paginate(3);

        return view("site.home", compact("produtos"));
    }

    public function details($slug){
        $produto = Produto::where("slug",$slug)->first();#apenas o primeiro register e retornado, evita duplicidade

        return view("site.details",compact("produto"));
    }

}
