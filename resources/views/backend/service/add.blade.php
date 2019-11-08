@extends('backend._layout')

@section('title')
    Create Tender Information
@endsection


@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Tender')
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
            <li class="nav-item">
                <a href="#">Forms</a>
            </li>
            <li class="separator">
                <i class="flaticon-right-arrow"></i>
            </li>
            <li class="nav-item">
                <a href="#">Basic Form</a>
            </li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    <div class="card-title">Add Tender Here</div>
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
                    <form action="{{ route('storeTender') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                            {{-- <label for="category_name_id">Select Your Category</label>
                            <div class="form-group">
                                    <select class="form-control" name="category_name_id">
                                            <option disabled selected>Select a Category</option>
                                            @php( $categories = \App\Category::all())
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                            <div> --}}
                                <input name="_method" type="hidden" value="POST">
                               
                                <label for="text">Add Tender Title</label>
                                <input type="text" class="form-control" name="service_tender_name" id="text" placeholder="Enter Tender Name">
                                <input name="_method" type="hidden" value="POST">
                                <label for="text">Add Tender Description</label>
                                <textarea type="text" class="form-control" name="service_tender_description" id="editor" placeholder="Enter Tender Description"> </textarea>
                                <label for="text">Add Tender Quantity</label>
                                <input type="text" class="form-control" name="service_tender_quantity" id="text" placeholder="Enter Tender Quantity">
                                <label for="text"> Tender Price</label>
                                <input type="text" class="form-control" name="service_tender_any_price" id="text" placeholder="Enter Tender Price">
                                <label for="text"> Tender Area</label>
                                <input type="text" class="form-control" name="service_tender_area" id="text" placeholder="Enter Tender Area">
                                <label for="text">Choose Product Image</label>
                                <input type="file" class="form-control" name="service_image">
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