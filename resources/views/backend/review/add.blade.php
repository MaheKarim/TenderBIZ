@extends('backend._layout')

@section('title')
    Create Review Option
@endsection


@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Review Option')
        </h4>
        <ul class="breadcrumbs">
            <li class="nav-home">
            <a href="{{ url('/home') }}">
                    <i class="flaticon-home"></i>
                </a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-title">Add Review</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-8">

                        <!-- error message -->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                 @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <!-- error message end --> 
                        <!-- Notification Start Here -->
                        @if (session()->has('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                           @endif
                        <!-- Notification End Here -->
                    <form action="{{ route('storereview') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                                <label for="text">Add Team Mate Name</label>
                                <input type="text" class="form-control" name="reviewer_name" id="text" placeholder="Enter Team Mate Name">
                                <input name="_method" type="hidden" value="POST">
                                <label for="text">Add Team  Designation</label>
                                <textarea type="text" class="form-control" name="reviewer_designation" id="editor" placeholder="Enter Tender Designation"> </textarea>
                                
                                <label for="text">Add Reviewer Review</label>
                                <textarea type="text" class="form-control" name="reviewer_review" id="editor" placeholder="Enter Tender Designation"> </textarea>
                                
                                <label for="text">Choose Team Image</label>
                                <input type="file" class="form-control" name="reviewer_image">
                            </div>
                            </div> 
                        </div>
                    </div>
                    <div class="card-action">
                            <button class="btn btn-success">Submit</button>
                            <a href="{{ route('showTender') }}" class="btn btn-danger">Cancel</a>
                    </div> 
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection