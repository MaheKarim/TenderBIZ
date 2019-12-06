
@extends('backend._layout')

@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Add Review')
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                      
                    <a href="{{ route('addReview') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Add Review
                        </a>
                    </div>
                </div>
                <div class="card-body">
                <!-- Modal -->
                    
                                   <!-- Notification Start Here -->
                                   @if (session()->has('success'))
                                   <div class="alert alert-success">
                                       {{ session()->get('success') }}
                                   </div>
                                      @endif
                                   <!-- Notification End Here -->

                     <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Designation</th>
                                    <th>Review</th>
                                    <th>Image</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($reviews as $review) 
                                <tr>
                                <td>{{ $review->reviewer_name }}</td>
                                <td>{{ $review->reviewer_designation }}</td>
                                <td>{{ $review->reviewer_review }}</td>
                              
                                <td>
                                    <img style="width:100%; max-width:100px" src="{{ asset('storage') }}/{{ $review->reviewer_image }}" />                            
                                </td>
                              
                                    <td>
                                        <div class="form-button-action">
                                             <a href="{{ route('deletereview', $review->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
                                                <i class="fa fa-times"></i>
                                            </a> 
                                        </div>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
