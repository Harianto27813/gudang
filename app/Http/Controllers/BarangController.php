<?php

namespace App\Http\Controllers;
use  App\Models\BarangsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index()
     
    {
        $barangs = DB::table('barangs')->get();
 
        return view('gudang.barang', ['barangs' => $barangs]);
    }

   public function create()
   {
    return view('gudang.binput');
   }
   public function store(Request $request)
   {
    //validation with key value
    $this->validate($request, [
        'nama_barang' => 'required',
        'satuan' => 'required',
        'stok' => 'required',
     ]);
     foreach ($request->nama_barang as $key => $value)
      {
        DB::table('barangs')->insert([
            'nama_barang' => $request->nama_barang[$key],
            'satuan' => $request->satuan[$key],
            'stok' => $request->stok[$key]
        ]);
    }  
    // success and error message
    return redirect('/barang')->with('success', 'Data berhasil ditambahkan');

   }
    public function delete(request $request)
    {
        $barangs = DB::table('barangs')->where('id',$request->id)->delete();
        if($barangs){
            //redirect dengan pesan sukses
            return redirect()->route('barang')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('barang')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function edit(request $request, $id)
    {
        $barangs = DB::table('barangs')->where('id',$request->id)->get();
        return view('gudang.beredit', ['barangs' => $barangs]);
    }
    
}
