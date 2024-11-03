<?php

namespace App\Http\Controllers;

use App\Models\StoneModel;
use App\Models\TypeStone;
use Illuminate\Http\Request;

class StoneModelController extends Controller
{
    function index(){
        $stones = StoneModel::all();
        return view('stone.stone', compact('stones'));
    }

    function filter($type, $color = null){
        $query = StoneModel::whereHas('typeBelongsTo', function($query) use ($type) {
            $query->where('uriName', $type);
        });
        $stones = $query->get();
        if (sizeof($stones)<1)
        {
            $color = $type;
            $query = StoneModel::whereHas('colorBelongsTo', function($query) use ($color) {
                $query->where('uriName', $color);
            });
        }

        elseif ($color) {
            $query->whereHas('colorBelongsTo', function($query) use ($color) {
                $query->where('uriName', $color);
            });
        }

        $stones = $query->get();
        return view('stone.stone', compact('stones', 'type', 'color'));
    }

    function show($article){
        $item = StoneModel::where('article', '=', $article)->first();
        return view('stone.stone_item', compact('item'));
    }
}
