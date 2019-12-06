@extends('backend._layout')

@section('title')
    Show Tender
@endsection
@section('content')
<div class="page-inner">
    <div class="page-header">
        <h4 class="page-title">
            @yield('title','Show Tender')
        </h4>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                      
                    <a href="{{ url('/add/tender') }}" class="btn btn-primary btn-round ml-auto">
                            <i class="fa fa-plus"></i>
                            Add Tender
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
                                    
                                    <th>Tender Category</th>
                                    <th>Tender Title</th>
                                    <th>Tender Description</th>
                                    <th>Tender Quantity</th>
                                    <th>Tender Price</th>
                                    <th>Tender Image</th>
                                    <th>Tender Area</th>
                                   
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach ($services as $service) 
                                <tr>
                                <td>{{$service->Category->category_name}} </td>
                                <td>{{ $service->service_tender_name }}</td>
                                <td>{!! str_limit($service->service_tender_description , 50) !!}</td>

                                <td>{{ $service->service_tender_quantity }}</td>
                                <td>{{ $service->service_tender_any_price }}</td>
                                <td><img style="width:100%;max-width:100px" src="{{ asset('storage') }}/{{ $service->service_image }}"/></td>
                                <td>{{ $service->service_tender_area }}</td>
                                
                                    <td>
                                        <div class="form-button-action">
                                        {{-- <a href="{{ route('editCategory', $category->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                <i class="fa fa-edit"></i>
                                            </a>  --}}
                                        <a href="{{ route('deleteTender', $service->id) }}" type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove">
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