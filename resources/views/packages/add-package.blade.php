@extends('layouts.base')


@section('page-content')
    <div class="page-bar ">
        <!-- BREADCRUMBS SECTION -->
        <ul class="page-breadcrumb">
            <li>
                <a href="/dashboard">Home</a>
            </li>
            <li>
                <a href="/student">Package</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/student/create">Add Package</a>
            </li>
        </ul>
        <!-- END OF BREADCRUMBS SECTION -->
        <div class="clearfix"></div>

        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Package
            <small>Add a new Package.</small>
        </h3>
        <!-- END PAGE TITLE-->


        <form action="{{ route('packages.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="form-group col-md-6 @error('package_name') has-error @enderror">
                    <label for="package_name" class="@error('package_name') text-danger @enderror">Package Name : </label>
                    @error('package_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" id="package_name" name="package_name" placeholder="Enter package : " value="{{ old('package_name') }}"
                           class="form-control">
                </div>

                <div class="form-group col-md-6 @error('price') has-error @enderror">
                    <label for="price" class="@error('price') text-danger @enderror">Price : </label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="price" placeholder="Enter the price : " value="{{ old('price') }}"
                           class="form-control">
                </div>

                <div class="form-group col-md-6 @error('estimated_time') has-error @enderror">
                    <label for="estimated_time" class="@error('estimated_time') text-danger @enderror">Services</label>
                    @error('phone_number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <select multiple="multiple" name="service[]" id="service">
                            <option value=""></option>
                            @foreach($services as $service)
                            <option value="{{$service->service_id}}" >{{$service->service_name}}</option>
                            @endforeach
                    </select>
                    
                </div>
            </div>

            <div class="pull-right margin-right-10 margin-bottom-25">
                <button class="btn blue" type="submit" id="add">Add Package</button>
            </div>
        </form>

    </div>
@endsection

@section('custom-script')
    @include('includes.show-toast')
@endsection
