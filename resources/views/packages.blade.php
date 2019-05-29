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
                    <label class="control-label col-md-2">Services <span class="required"> * </span></label>

                    <select name="supplier_id[]" id="supplier_id" class="form-control" multiple="multiple">
                    </select>
                </div>

                

            
        </form>

    </div>
@endsection

@section('custom-script')
    @include('includes.show-toast')
@endsection
