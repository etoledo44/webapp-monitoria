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
    public function edit($id)
    {
        $monitores = Monitores::find($id);
        return view('monitores.edit',compact('monitores'));
    }
    
    public function update(Request $request, $id)
    {
        DB::table('monitores')
            ->where('id', $id)
            ->update([
                'nome'=>$request->nome,
                'email'=>$request->email,
                'disciplina'=>$request->disciplina,
                'horaDe'=>$request->horaDe,
                'horaAte'=>$request->horaAte
            ]);

        return redirect()->route('monitores.index');
    }

    public function destroy($id)
    {
        Monitores::destroy($id);
        return redirect()->route('monitores.index');
    }
}
