@extends("Admin.Layouts.moster");


@section("content")

<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow"">
        <form action="{{route('Acount.Product.StoreProductColor',$id)}}" method="post" >
           @csrf
        <div class="form-row mb-4">
                <div class="form-group col-md-6">
                    <label for="inputname4">نام رنک</label>
                    <input name="name" type="text" class="form-control" id="inputname4" placeholder="نام رنگ">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputprice4">رنگ</label>
                    <input name="color" type="color" class="form-control" id="inputprice4" >
                </div>
          <button type="submit" class="btn btn-primary mt-3">وارد کردن</button>
        </form>
    </div>
</div>

@endsection


