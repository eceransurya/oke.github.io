<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projek;
class ProjekController extends Controller
{
   
    public function index()
    {
        $dtprojek = projek::all();
        $dtprojekpasif = projek::onlyTrashed();
        
        return view('projek.listprojek', compact('dtprojek', 'dtprojekpasif'));
    }

  
    public function create()
    {
        return view('projek.addprojek');
    }

   
    public function store(Request $request)
    {
        $databaru = $request->all();
        $simpanprojek = projek::create($databaru);
        return redirect('projek')->with('pesan','data projek sukses di simpan');
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
