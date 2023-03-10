<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\Products;
use App\Models\Cart ;

class ProductsController extends BaseController

{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function product()
    {
        //$products = Products::all(); /// all products
        $products=Products::paginate(6) ;
      // dd($products) ;
        return view ("index" ,compact('products'));
    }


    public function logout()
    {
        //$products = Products::all(); /// all products
        Auth::logout();
      // dd($products) ;
      return redirect('/login');
    }


    public function all_product()
    {
        $products = Products::all(); /// all products
        // $products=Products::paginate(6) ;
      // dd($products) ;
        return view ("products" ,compact('products'));
    }


    public function add_cart($product_id)
    {
       $type=new Cart() ;
       $type->product_id=$product_id ; 
       $type->user_id= Auth::user()->id  ;  
       $type->date=date('Y-m-d H:i:s')  ;
       $type->save() ; 
       return redirect('/')->with('success','done') ;

    }

    public function search_product(Request $request)
    {

        if($request->search==null)
        {
            $products=Products::paginate(6) ;
        }
        else
        {
       // dd($request->all()) ;
        //$products = Products::all(); /// all products
        $products=   products::where('name','LIKE','%'.$request->search.'%')->get();
        }
      // dd($products) ;
        return view ("index" ,compact('products'));
    }

    public function product_detail($id)
    {
        $product = Products::find($id); /// all products
        // $products=Products::paginate(6) ;

        return view ("product" ,compact('product'));


// $query=Products::select('*') ;
// if(request->name!=null)
// {
//   $query->where('name','like',"$request->name%") ;
// }

    }


    public function show_filter()
    {
      return view ("advanced_search");
    }
    public function advaned_search(Request $request)

    {
      $data=Products::select('*');
     
      if($request->name !=null)
      {
        $data->where('name', 'LIKE', '%'. $request->name .'%');
      }

      if($request->describtion !=null)
      {
        $data->where('describtion', 'LIKE', '%'. $request->describtion .'%');
      }
    
      if($request->from !=null && $request->to !=null)
      {
        $data->whereBetween('price', [$request->from, $request->to]);
      }
      $products=$data->get();
      // dd($de) ;
      // $products= $data->get() ;
      return view ("products" ,compact('products'));



    }
}
