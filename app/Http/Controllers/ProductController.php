<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use File;

class ProductController extends Controller
{
    //
    public function index()
    {
        //$brand = DB::table('brand')->join('model', 'brand.brand_id', '=', 'model.brand_id')->join('variant', 'model.model_id', '=', 'variant.model_id')->select('*')->get();
 
        $product = DB::table('produk')->get();
    	// mengirim data pegawai ke view index
    	return view('index',['product' => $product]);
 
    }
    
    public function tambah()
    {
    
        $brand = DB::table('brand')->get();
        $model = DB::table('model')->get();
        $variant = DB::table('variant')->get();
        // memanggil view tambah
        return view('tambah',['brand' => $brand, 'model' => $model, 'variant' => $variant]);
    
    }
    public function save(Request $request)
    {
        DB::table('produk')->insert([
            'brand' => $request->brand,
            'model' => $request->model,
            'bbm' => $request->fuel,
            'harga' => $request->price,
            'foto' => $request->file->getClientOriginalName()
        ]);
        
		$file = $request->file('file');
        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$file->getClientOriginalName());
        return redirect('/');
    
    }
    public function edit($id)
    {
        $produk = DB::table('produk')->where('product_id',$id)->get();
        return view('edit',['produk' => $produk]);
    
    }
    public function update(Request $request)
    {
        DB::table('produk')->where('product_id',$request->id)->update([
            'bbm' => $request->fuel,
            'harga' => $request->price
        ]);
        return redirect('/');
    }
    public function hapus($id)
    {

        $produk = DB::table('produk')->where('product_id',$id)->get();
        foreach ($produk as $object){
            $file = $object->foto;
        }
        //echo $file;
        File::delete('data_file/'.$file);
        DB::table('produk')->where('product_id',$id)->delete();
        return redirect('/');
    }
    public function detail($id)
    {
        $produk = DB::table('produk')->where('product_id',$id)->get();
        return view('detail',['produk' => $produk]);
    
    }
}
