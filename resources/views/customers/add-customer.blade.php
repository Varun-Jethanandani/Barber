@extends('layouts.base')


@section('page-content')
    <div class="page-bar ">
        <!-- BREADCRUMBS SECTION -->
        <ul class="page-breadcrumb">
            <li>
                <a href="/dashboard">Home</a>
            </li>
            <li>
                <a href="/student">Customer</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/student/create">Add Customer</a>
            </li>
        </ul>
        <!-- END OF BREADCRUMBS SECTION -->
        <div class="clearfix"></div>

        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Customer
            <small>Add a new Customer.</small>
        </h3>
        <!-- END PAGE TITLE-->


        <form action="{{ route('customer.store') }}" method="POST">
            @csrf
            <div class="row">

                <div class="form-group col-md-6 @error('name') has-error @enderror">
                    <label for="name" class="@error('name') text-danger @enderror">Name : </label>
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" id="name" name="name" placeholder="Enter the name : " value="{{ old('name') }}"
                           class="form-control">
                </div>

                <div class="form-group col-md-6 @error('email') has-error @enderror">
                    <label for="email" class="@error('email') text-danger @enderror">Email : </label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="email" name="email" placeholder="Enter the email id : " value="{{ old('email') }}"
                           class="form-control">
                </div>

                <div class="form-group col-md-6 @error('phone_number') has-error @enderror">
                    <label for="phone-number" class="@error('phone_number') text-danger @enderror">Phone Number : </label>
                    @error('phone_number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="tel" name="phone_number" placeholder="Enter the phone number : "
                           value="{{ old('phone_number') }}" class="form-control">
                </div>
            </div>

            <div class="pull-right margin-right-10 margin-bottom-25">
                <button class="btn blue" type="submit" id="add">Add Customer</button>
            </div>
        </form>

    </div>
@endsection

@section('custom-script')
    @include('includes.show-toast')
@endsection
