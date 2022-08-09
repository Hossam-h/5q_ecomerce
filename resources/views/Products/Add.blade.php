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

<!-- start modal add cat-->

<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" action="{{route('product.store')}}" autocomplete="off" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>name : <span class="text-danger">*</span></label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name AR: <span class="text-danger">*</span></label>
                                <input type="text"  name="name_ar" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>description</label>
                                <textarea name="description" id="" class="form-control"
                                    cols="30" rows="5"></textarea>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>description Ar </label>
                                <textarea name="description_ar" id="" class="form-control"
                                    cols="30" rows="5"></textarea>
                            </div>
                        </div>




                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>category</label>
                                <select class="custom-select mr-sm-2" name="category">
                                    <option disabled selected> Select Categotry .....</option>
                                    
                        @foreach($categories as $category)
                      <option value="{{$category->id}}">
                      {{$category->name}}
                      </option>

                        @endforeach


                                </select>
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Units</label>
                                <input type="text" name="units" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label>discount</label>
                                <input type="number" name="discount" class="form-control">
                            </div>
                        </div>



                    </div>






                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="academic_year"> photo</label>
                            <input type="file" accept="image/*" name="photo" multiple>
                        </div>
                    </div>



                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" style="font-size: 15px;"
                        type="submit">Create</button>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
@section('js')

@endsection