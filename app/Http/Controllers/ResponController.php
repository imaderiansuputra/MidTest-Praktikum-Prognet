<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluhan;
use App\Models\Respon;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Illuminate\Pagination\Paginator;

class ResponController extends Controller
{
    public function index() {        
        $keluhans = Keluhan::with('user','respon')->paginate(5);
        $respons = Respon::all();
        Paginator::useBootstrap();
       
        return view('admin.index', compact('keluhans','respons'));
    }

    public function show($id) {
        $keluhans = Keluhan::find($id);
        $users = User::all();
        $respons = Respon::all();
        return view('admin.detail', compact('keluhans','respons','users'));
    }

    public function create($id) { 
        $keluhans = Keluhan::find($id);
        $users = User::all();
        $respons = Respon::all();
        return view('admin.create', compact('keluhans','respons','users'));
    }

    public function edit($id) { 
        $keluhans = Keluhan::find($id);
        $users = User::all();
        $respons = Respon::all();
        return view('admin.edit', compact('keluhans','respons','users'));
    }

    public function save(Request $request, $id) {
        $keluhan = Keluhan::find($id);
        $respons = new Respon;
        $respons->admin_id = auth()->user()->id;
        $respons->keluhan_id = $id;
        $respons->respon = $request->respon;
        if(!empty($request->respon)){
            $keluhan->status = '0';
            $keluhan->save();
            $respons->save();
        }
        return Redirect::to('/admin/respon/show/'.$id);
    }

    public function update(Request $request, $id) {
        $update = [
            'respon' => $request->respon,
        ];
        Respon::where('keluhan_id',$id)->update($update);
        // dd($update);
        return Redirect::to('/admin/respon/show/'.$id);
    }

    public function delete($id) {
        $keluhan = Keluhan::find($id);
        $keluhan->status = '1';
        $keluhan->save();
        Respon::where('keluhan_id',$id)->delete();
        return Redirect::to('/admin/respon/index');
    }
}
