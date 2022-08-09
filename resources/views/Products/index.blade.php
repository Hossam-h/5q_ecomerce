@extends('Dashboard/layouts.master')
@section('css')

@section('title')
empty
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">{{__('dashboard.categories')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
                <li class="breadcrumb-item active">Page Title</li>
            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')

<!-- Button trigger modal -->

<a href="/product/create">
    <button type="button" class="btn btn-primary">
        Add Product
    </button>

</a>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<!-- row -->
<div class="row" style="margin-top: 15px;">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Name_ar</th>
                            <th>description</th>
                            <th>description Ar</th>
                            <th>price</th>
                            <th>stock</th>
                            <th>discount</th>
                            <th>category</th>
                            <th>operation</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->name_ar}}</td>
                            <td>{{$product->getTranslation('description','en')}}</td>
                            <td>{{$product->getTranslation('description','ar')}}</td>
                            <td>{{$product->stock}}</td>
                            <td>{{$product->discount}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->category->name}}</td>

                            <td>
                                <a class="btn btn-primary" href="{{route('product.edit',$product->id)}}">
                                    <i class="fa fa-edit"></i>
                                </a>

                                @include('Products.delete')
                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection