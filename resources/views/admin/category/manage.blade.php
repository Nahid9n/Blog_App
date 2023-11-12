@extends('admin.master_layout_admin.master')

@section('body')

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Category Module</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href=""><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Category</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Manage Category</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="card">
                                <div class="card-header">
                                    <h5>Default Ordering</h5>
                                    <span>Lets say you want to sort the fourth column (3) descending and the first column (0) ascending: your order: would look like this: order: [[ 3, 'desc' ], [ 0, 'asc' ]]</span>
                                </div>
                                <div class="card-block">
                                    <p class="text-center text-success">{{session('message')}}</p>
                                    <div class="dt-responsive table-responsive">
                                        <table id="order-table" class="table table-striped table-bordered nowrap">
                                            <thead>
                                            <tr class="text-center">
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr >
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                            <tr>

                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$category->name}}</td>
                                                <td class="text-center"><img src="{{asset($category->image)}}" height="50" width="70" alt=""></td>
                                                <td>{{$category->description}}</td>
                                                <td>{{$category->status == 1 ? 'published':'unpublished'}}</td>
                                                <td>
                                                    <a href="{{route('edit.category',['id'=>$category->id])}}" class="btn btn-success btn-sm m-1"><i
                                                            class="fa fa-edit"></i>
                                                    </a>
                                                    <a href="{{route('delete.category',['id'=>$category->id])}}" onclick="return confirm('Are you sure to delete this...')" class="btn btn-danger btn-sm"><i
                                                            class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>


@endsection
