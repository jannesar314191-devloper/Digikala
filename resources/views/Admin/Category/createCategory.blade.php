@extends('Admin.Layouts.moster')
@section('content')
<br>
<br>
<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
        <form action="{{route('Acount.Categoryt.StoreCategory')}}" method="post" enctype="multipart/form-data" id="my-form">
            @csrf
            <div class="row mb-4">
                <div class="col">
                    <label for="name_id" class="d-block">نام دسته بندی </label>
                    <input  name="name" id="name_id" type="text" class="form-control" placeholder="نام دسته بندی ">
                </div>
                <div class="col">
                    <label for="image_id" class="d-block">بارگذاری تصویر    </label>

                    <input  name="image" type="file" class="form-control" id="image_id" placeholder="">
                </div>
            </div>
            <button type="submit" name="sub" class="btn btn-primary">ثبت دسته بندی</button>
        
        </form>
    </div>
</div>
@endsection

