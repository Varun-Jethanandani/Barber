@extends('layouts.base')


@section('page-content')
    <div class="page-bar ">
        <!-- BREADCRUMBS SECTION -->
        <ul class="page-breadcrumb">
            <li>
                <a href="/dashboard">Home</a>
            </li>
            <li>
                <a href="/student">Service</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/student/create">Add Service</a>
            </li>
        </ul>
        <!-- END OF BREADCRUMBS SECTION -->
        <div class="clearfix"></div>

        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Service
            <small>Add a new Service.</small>
        </h3>
        <!-- END PAGE TITLE-->


        <form action="{{ route('packages.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="form-group col-md-6 @error('service_name') has-error @enderror">
                    <label for="service_name" class="@error('service_name') text-danger @enderror">Service Name : </label>
                    @error('service_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" id="service_name" name="service_name" placeholder="Enter service : " value="{{ old('service_name') }}"
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
                    <label for="estimated_time" class="@error('estimated_time') text-danger @enderror">Estimated Time : </label>
                    @error('phone_number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" name="estimated_time" placeholder="Enter the estimated time for service : "
                           value="{{ old('estimated_time') }}" class="form-control">
                </div>
            </div>

            <div class="pull-right margin-right-10 margin-bottom-25">
                <button class="btn blue" type="submit" id="add">Add Service</button>
            </div>
        </form>

    </div>
@endsection

@section('custom-script')
    @include('includes.show-toast')
@endsection
