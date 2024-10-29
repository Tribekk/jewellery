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
}
