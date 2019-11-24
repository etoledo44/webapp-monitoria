<?php

namespace App\Http\Controllers;

use App\Monitores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MonitoresController extends Controller
{
    //
    public function index()
    {
        $monitores = Monitores::all();
        return view('monitores.index', compact('monitores'));
    }

    public function create(){
        return view('monitores.create');
    }
    public function store(Request $request){
        Monitores::create($request->all());
        return redirect()->route('monitores.index');
    }
}
