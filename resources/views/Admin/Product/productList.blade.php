@extends('Admin.Layouts.moster')
@section('content')

<div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow"">
        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>سبک 3</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <table id="style-3" class="table style-3  table-hover">
                                <thead>
                                    <tr>
                                        
                                       
                                        <th>نام </th>
                                        <th>قیمت</th>
                                        <th>تعداد</th>
                                        <th>دسته بندی محصول</th>
                                        <th>توضیحات</th>
                                        <th class="text-center">تصویر</th>
                                        <th class="text-center">وضیعت</th>
                                        <th class="text-center">عمل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($products as $product)
                                  
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->inventory}}</td>
                                        <td>{{$product->Category->name}}</td>
                                        <td>{{$product->description}}</td>
                                        <td class="text-center">
                                            <span><img src="{{asset('adminAssest/Productimage/'.$product->image)}}"  width="65px" class="profile-img" alt="avatar"></span>
                                        </td>
                                       
                                        <td class="text-center"><span class="shadow-none badge badge-primary">تایید شده</span></td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li><a href="{{route('Acount.Product.EditeProduct',$product->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="ویرایش"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                <li><a href="{{route('Acount.Product.ProductDelete',$product->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="حذف"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></a></li>
                                              
                                                <li><a href="{{route('Acount.Product.ProductAddPicture',$product->id)}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="افزودن عکس برای محصول">
                                                    <!-- https://feathericons.dev/?search=download&iconset=feather -->
                                                 <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                   <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                                   <polyline points="7 10 12 15 17 10" />
                                                   <line x1="12" x2="12" y1="15" y2="3" />
                                                 </svg>

                                                </a></li>
                                               
                                                <li><a href="{{route('Acount.Product.ProductImageList')}}" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="مشاهده عگس ها محصول">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                   <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" />
                                                   <circle cx="12" cy="12" r="3" />
                                                 </svg>
                                                </a></li>
                                            
                                            </ul>
                                        </td>
                                    </tr>
                                   
                                    @endforeach
                             
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection