@extends('layouts.adminbase')

@section('title', 'Menu List')

@section('content')
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Menu List</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Menu List <small>Menu List subtitle</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Settings 1</a>
                                                <a class="dropdown-item" href="#">Settings 2</a>
                                            </div>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Keywords</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Show</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $data as $rs)
                                        <tr>
                                            <th scope="row">{{$rs->id}}</th>
                                            <td>{{$rs->title}}</td>
                                            <td>{{$rs->keywords}}</td>
                                            <td>{{$rs->description}}</td>
                                            <td>{{$rs->status}}</td>
                                            <td>{{$rs->image}}</td>
                                            <td><a href="/admin/menu/edit{{$rs->id}}" class="btn btn-primary" >Edit</a>  </td>
                                            <td><a href="/admin/menu/delete{{$rs->id}}" class="btn btn-danger">Delete</a></td>
                                            <td><a href="/admin/menu/show{{$rs->id}}"class="btn btn-success">Show</a></td>
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
            <!-- /page content -->
        </div>
    </div>
@endsection
