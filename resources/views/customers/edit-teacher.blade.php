 @extends('layouts.base')


@section('page-content')
    <div class="page-bar ">
        <!-- BREADCRUMBS SECTION -->
        <ul class="page-breadcrumb">
            <li>
                <a href="/dashboard">Home</a>
            </li>
            <li>
                <a href="/teacher">teacher</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="/teacher/{{ $teacher->id }}">Edit teacher</a>
            </li>
        </ul>
        <!-- END OF BREADCRUMBS SECTION -->
        <div class="clearfix"></div>

        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> teacher
            <small>Edit a new teacher.</small>
        </h3>
        <!-- END PAGE TITLE-->


        <form action="{{ route('teacher.update', ['id' => $teacher->id]) }}" method="POST">
            @method("PUT")
            @csrf
            <div class="row">

                <div class="form-group col-md-6 @error('name') has-error @enderror">
                    <label for="name" class="@error('name') text-danger @enderror">Name : </label>
                    @error('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="text" id="name" name="name" placeholder="Enter the name : " value="{{ $teacher->user->name }}"
                           class="form-control">
                </div>

                <div class="form-group col-md-6 @error('email') has-error @enderror">
                    <label for="email" class="@error('email') text-danger @enderror">Email : </label>
                    @error('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="email" name="email" placeholder="Enter the email id : " value="{{ $teacher->user->email  }}"
                           class="form-control">
                </div>

                <div class="form-group col-md-6 @error('phone_number') has-error @enderror">
                    <label for="phone-number" class="@error('phone_number') text-danger @enderror">Phone Number : </label>
                    @error('phone_number')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                    <input type="tel" name="phone_number" placeholder="Enter the phone number : "
                           value="{{ $teacher->user->phone_number }}" class="form-control">
                </div>
            <div class="pull-right margin-right-10 margin-bottom-25">
                <a href="/teacher" class="btn default">Cancel</a>
                <button class="btn blue" type="submit" id="add">Save Changes</button>
            </div>
        </form>

    </div>
@endsection

@section('custom-script')
    @include('includes.show-toast')
@endsection
