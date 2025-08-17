@extends("Admin.Layouts.moster");


@section("content")

<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow"">
        <form action="{{route('Acount.Product.updateProduct',$product->id)}}" method="post" enctype="multipart/form-data">
           @csrf
        <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label for="inputname4">نام محصول</label>
                    <input name="name" value="{{$product->name}}" type="text" class="form-control" id="inputname4" placeholder="نام محصول">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputprice4">قیمت محصول </label>
                    <input value="{{$product->price}}" name="price" type="text" class="form-control" id="inputprice4" placeholder="قیمت محصول ">
                </div>
            </div>
            <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label for="inventory"> تعداد موجودی</label>
                    <input name="inventory" value="{{$product->inventory}}" type="number" class="form-control" id="inventory" placeholder=" تعداد موجودی">
                </div>
                <div class="form-group col-md-6">
                    <label for="category">دسته بندی  محصولات </label>
                    <select name="category_id" class="selectpicker form-control p-2" >
                    @foreach($categorys as $category)    
                    <option @if($product->category_id==$category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                    </select>
                </div>
            </div>


            <div class="form-row mb-4">
                    <label for="inputState">توضیحات محصول</label>

                <textarea name="description"  type="text" class="form-control" id="inputCity">{{$product->description}}</textarea>


            </div>

            <div class="form-row mb-4">
                <label for="image_id" class="d-block">بارگذاری تصویر    </label>

                <input name="image" type="file" class="form-control" id="image_id" placeholder="">

        </div>

          <button type="submit" class="btn btn-primary mt-3">ورود</button>
        </form>
    </div>
</div>

@endsection


