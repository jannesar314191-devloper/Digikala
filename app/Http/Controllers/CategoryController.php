<?php

namespace App\Http\Controllers;


use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;



class CategoryController extends Controller
{
public function create(){
  return  view('Admin.Category.createCategory');
}

public function storeCategory(Request $request){

  $imageNewName=time().'.'.$request->image->extension();
  $request->image->move(public_path("/adminAssest/Categorimage"),$imageNewName);
  //$Category=new Category();
  //$Category->name=$request->name;
  //$Category->image=$imageNewName;
  //$Category->save();
  $formData=$request->all();
  $formData['image']=$imageNewName;
  Category::create($formData);
  Alert::success('بخش موفقانه ثبت شد');

 
  return redirect()->route('Acount.Category.CategoryList');
  

  //$info=$request->all();
// $info['name'];
// $request->name;

}

public function categoryList(){
  $Categorys=Category::all();
  return view('Admin.Category.categoryList',compact('Categorys'));
}


public function categoryEdite($id){
  $Category=Category::find($id);
  return view('Admin.Category.categoryEdite',compact('Category'));
}


public function categoryUpdate(Request $request, $id){
  $Category=Category::find($id);
   //$newCategory=$request->all();
  $imageNewName='';
 
  if($request->hasFile('image')){
  $imageNewName=time().'.'.$request->image->extension();
  $request->image->move(public_path('/adminAssest/Categorimage'),$imageNewName);
  $picture="adminAssest/Categorimage/".$Category->image;
  if(File::exists($picture)){
    File::delete($picture);
  }
  $Category->image=$imageNewName;

 

  //$newCategory['image']=$imageNewName;
  }
 
  
  
  $Category->name=$request->name;
 //$Category->update($newCategory);
  $Category->update();
  Alert::success('بخش موفقانه آپدیت شد');
  return redirect()->route('Acount.Category.CategoryList');
}

public function categorydelete($id){
 
  $Category=Category::find($id);
  $picture="adminAssest/Categorimage/".$Category->image;
  if(File::exists($picture)){
    File::delete($picture);
  }
  $Category->delete();
  Alert::success('بخش موفقانه خذف شد',);
  return redirect()->route('Acount.Category.CategoryList');

   
}
}

