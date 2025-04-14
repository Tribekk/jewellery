<?php

namespace App\Http\Controllers;

use App\Models\SemiPreciousStones;
use Illuminate\Http\Request;

class SemiPreciousStonesController extends Controller
{
    public function index(){
        $stones = SemiPreciousStones::all();
        return view('semi_stone.stone', compact('stones'));
    }

    function show($article){
        $item = SemiPreciousStones::where('article', '=', $article)->first();
        return view('semi_stone.stone_item', compact('item'));
    }
}
