@extends('layouts.base')


@section('page-content')
    <div class="page-bar ">
        <!-- BREADCRUMBS SECTION -->
        <ul class="page-breadcrumb">
            <li>
                <a href="/dashboard">Home</a>
            </li>
        </ul>
        <!-- END OF BREADCRUMBS SECTION -->
        <div class="clearfix"></div>

        <!-- BEGIN PAGE TITLE-->
        <h3 class="page-title"> Customer
            <small>Add a new Customer.</small>
        </h3>
        <!-- END PAGE TITLE-->

        <table class="table table-bordered table-stripped" id="Customers">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
        </table>

        <div class="clearfix margin-bottom-25"></div>
        <!-- END OF DASHBOARD STATS CARDS -->
    </div>

    @component('includes.confirm-modal', [
        "id" => "deleteModal",
        "title" => "Delete Customer",
        "message" => "Are you sure you want to delete the Customer ? ",
        "path" => '/Customer',
    ])
        @slot('method')
            @method('DELETE')
        @endslot
    @endcomponent
@endsection

@section('custom-script')
    @include('includes.show-toast')

    <script src="{{ asset("js/teachers/manage-teacher.js") }}"></script>
@endsection
