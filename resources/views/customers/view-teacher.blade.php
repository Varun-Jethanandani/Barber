@extends('layouts.base')


@section('page-content')
    <div class="page-bar ">
        <!-- BREADCRUMBS SECTION -->
        <ul class="page-breadcrumb">
            <li>
                <a href="/dashboard">Home</a>
            </li>
            <li>
                <a href="/teacher">Teacher</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/teacher/{{ $teacher->id }}">View Teacher</a>
            </li>
        </ul>
        <!-- END OF BREADCRUMBS SECTION -->
        <div class="clearfix"></div>

        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Teacher
            <small>View a Teacher.</small>
        </h3>
        <!-- END PAGE TITLE-->


        <div class="row margin-bottom-25">

            <div class="form-group col-md-6 @error('name') has-error @enderror">
                <label for="name">Name : </label>
                <input type="text" id="name" name="name" placeholder="Enter the name : "
                       class="form-control" value="{{ $teacher->user->name }}" disabled>
            </div>

            <div class="form-group col-md-6 @error('email') has-error @enderror">
                <label for="email">Email : </label>
                <input type="email" name="email" placeholder="Enter the email id : "
                       class="form-control"  value="{{ $teacher->user->email }}" disabled>
            </div>

            <div class="form-group col-md-6 @error('phone_number') has-error @enderror">
                <label for="phone-number">Phone Number : </label>
                <input type="tel" name="phone_number" placeholder="Enter the phone number : "class="form-control" value="{{ $teacher->user->phone_number }}" disabled>
            </div>
        </div>
    </div>
@endsection

@section('custom-script')
    @include('includes.show-toast')
@endsection
