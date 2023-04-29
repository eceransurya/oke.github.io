<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Userontroller extends Controller
{
   
    public function index()
    {
        $dtuser = User::all();
        $dtuserpasif = User::onlyTrashed()->get();
        
        return view('User.listuser', compact('dtuser', 'dtuserpasif'));
        
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
      $dtedit = User::where('id','=',$id)->first();
      return view('User.edituser',compact('dtedit'));
    }

    
    public function update(Request $request, $id)
    {
   $dtedit = User::where('id', "=", $id)->update (['name' => $request->name, 'username' => $request->email]);  
   return redirect('admin/User')->with('pesan','simpan sukses');
    }

   
    public function destroy($id)
    {
        $dthapus = User::where('id','=',$id)->delete();
        return redirect('admin/User')->with('pesan','Data User Berhasil Di Hapus');
    }

    public function restore(Request $request)
    {
        $id = $request->id;
       
        $dthapus = User::onlyTrashed()->where('id','=',$id)->restore();
        return redirect('admin/User')->with('pesan','Data User Sukses Di restore');
    }
}
