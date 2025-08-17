<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    public function createProduct(){
        $categorys=Category::all();
         return view('Admin.Product.createProduct',compact('categorys'));
    }

    public function storeProduct(Request $request){
     $product= $request->all();
     if($request->hasFile('image')){
          $newimageName=time().'.'.$request->image->extension();
          $request->image->move(public_path("adminAssest/Productimage"),$newimageName);
          $product['image']=$newimageName;

     }
     Product::create($product);
     Alert::success('محصول موفقانه ثبت شد');
     return redirect()->route('Acount.product.ProductList');
    }

    public function productList(){
        $products=Product::with('Category')->get();
       

        return view('Admin.Product.productList',compact('products'));
    }

    public function editeProduct($id){
    $product=Product::find($id);
    $categorys=Category::all();
    return view("Admin.Product.ProductEdite",compact('product','categorys'));
    }


public function updateProduct(Request $request ,$id){
 $product=Product::find($id);
 $updateproduct=$request->all();

 if($request->has('image')){
    $newimageName=time().'.'.$request->image->extension();
    $request->image->move(public_path("adminAssest/Productimage"),$newimageName);
    $updateproduct['image']=$newimageName;
    $picture="adminAssest/Productimage/".$product->image;
    if(File::exists($picture)){
        File::delete($picture);
    }

 }
 $product->update($updateproduct);

 Alert::success('محصول موفقانه آپدید شد');

 return redirect()->route('Acount.Product.ProductList');


}

public function productdelete($id){
    $product=Product::find($id);
    $picture="adminAssest/Productimage/".$product->image;
    if(File::exists($picture)){
        File::delete($picture);
    }
    $product->delete();
    Alert::success('محصول موفقانه حذف شد');
    return redirect()->route('Acount.Product.ProductList');
}

}

