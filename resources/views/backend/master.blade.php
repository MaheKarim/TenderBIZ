@extends('backend._layout')
@section('content')
<div class="content">
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                    <h5 class="text-white op-7 mb-2">Admin Activity - Dashboard</h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                    <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt--5">
        <div class="row mt--2">
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-secondary mr-3">
                                <i class="fa fa-dollar-sign"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">132 <small>Sales</small></a></b></h5>
                                <small class="text-muted">12 waiting payments</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-success mr-3">
                                <i class="fa fa-shopping-cart"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">78 <small>Orders</small></a></b></h5>
                                <small class="text-muted">32 shipped</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-danger mr-3">
                                <i class="fa fa-users"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">1,352 <small>Members</small></a></b></h5>
                                <small class="text-muted">163 registered today</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                            <span class="stamp stamp-md bg-warning mr-3">
                                <i class="fa fa-comment-alt"></i>
                            </span>
                            <div>
                                <h5 class="mb-1"><b><a href="#">132 <small>Comments</small></a></b></h5>
                                <small class="text-muted">16 waiting</small>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div> 
@endsection