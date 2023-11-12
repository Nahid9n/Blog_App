@extends('admin.master_layout_admin.master')

@section('body')

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>blog Module</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href=""><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">blog</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Add blog</a>
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
                                    <h5>Edit blog Form</h5>
                                    <span>Edit class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <h4 class="sub-title">{{session('message')}}</h4>
                                    <form action="{{route('blog.update',['id'=>$blog->id])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">blog Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" class="form-control" placeholder="blog Name" value="{{$blog->name}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="col-sm-10">
                                                <select name="category_id" class="form-control" id="">
                                                    <option value="1">--select </option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">blog Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description" placeholder="blog Description" >{{$blog->description}}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">blog Image</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image" placeholder="Password input">
                                                <img src="{{asset($blog->image)}}" alt="" height="50" width="70">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Publication Status</label>
                                            <div class="col-sm-10">
                                                <label for=""><input name="status" type="radio" value="1" {{$blog->status == 1 ? 'checked':''}} > Published</label>
                                                <label for=""><input name="status" type="radio" value="0" {{$blog->status == 0 ? 'checked':''}} > Unpublished</label>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <input type="submit" class="btn btn-success" placeholder="" value="Update blog Info">
                                            </div>
                                        </div>
                                    </form>
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
