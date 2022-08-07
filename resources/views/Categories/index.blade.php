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
@include('Categories/Add')

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
                            <th>description_ar</th>
                            <th>opertaion</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->name_ar}}</td>
                            <td>{{$category->description}}</td>
                            <td>{{$category->description_ar}}</td>
                            <td>
                                <a href="" class="btn btn-info btn-sm"
                                    role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete_Teacher"
                                    title=""><i class="fa fa-trash"></i></button>
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