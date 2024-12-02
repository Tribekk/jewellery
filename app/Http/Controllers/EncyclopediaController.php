<?php

namespace App\Http\Controllers;

use App\Models\Encyclopedia;
use App\Models\EncyclopediaPage;
use Illuminate\Http\Request;

class EncyclopediaController extends Controller
{
    public function index(){
        $encyclopedias = Encyclopedia::all();
        return view('encyclopedia.encyclopedia', compact('encyclopedias'));
    }
    public function viewPage($page, $dopPage = null){
        $encyclopediaPage = Encyclopedia::where('type_stone', '=', $page)->firstOrFail();
        if (isset($dopPage)){
            $encyclopediaPage = EncyclopediaPage::where('uriName', '=', $dopPage)->firstOrFail();
        }
        return view('encyclopedia.encyclopediaPage', compact('encyclopediaPage'));
    }
}
