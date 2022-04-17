<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Respon;
use Illuminate\Support\Facades\Auth;
use Redirect;

class KeluhanController extends Controller
{
    public function index() {
        $keluhans = Keluhan::orderBy('user_id','asc')->get();
        
        return view('user.index', compact('keluhans'));
    }

    public function create() {                
        return view('user.create');
    }

    public function store(Request $request) {        
        $this->validate($request,[
            'judul' => 'required',
            'keluhan' => 'required'
        ]);

        $keluhan = Keluhan::create([
            'user_id' => auth()->user()->id,            
            'judul' => $request->judul,
            'keluhan' => $request->keluhan
        ]);
        $keluhan->save();
        return Redirect::to('/user/keluhan/index');
    }

    public function show($id) { 
        $keluhans = Keluhan::find($id);
        $respons = Respon::all();
        return view('user.detail', compact('keluhans', 'respons'));
    }

    public function edit(Request $request, $id) { 
        $keluhans = Keluhan::find($id);
        return view('user.edit', compact('keluhans'));
    }

    public function update(Request $request, $id) {
        $update = [
            'judul' => $request->judul,
            'keluhan' => $request->keluhan
        ] ;
        Keluhan::where('id', $id)->update($update);        
        return Redirect::to('/user/keluhan/show/'.$id);
    }

    public function delete($id) {
        Respon::where('keluhan_id',$id)->delete();
        $keluhans = Keluhan::find($id);
        $keluhans->delete();
        return Redirect::to('/user/keluhan/index');
    }
}
