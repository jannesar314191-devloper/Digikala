@extends("Admin.Layouts.moster");


@section("content")

<div class="col-lg-12 col-12 layout-spacing">

  <form action="{{route('Acount.Product.storeProductimage',$id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-row mb-4">
      <label for="image_id" class="d-block">بارگذاری تصویر </label>
      <input name="image" type="file" class="form-control" id="image_id" placeholder="">
     
      <button type="submit" class="btn btn-primary mt-3">ورود</button>
  </form>
</div>
</div>

@endsection