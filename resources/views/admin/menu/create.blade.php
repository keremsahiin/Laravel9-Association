@extends('layouts.adminbase')

@section('title', 'Add Menu')

@section('content')
    <div class="container body">
        <div class="main_container">
            <!-- page content -->
            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Add Menu</h3>
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
                        <div class="col-md-12 col-sm-12 ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Menu Elements <small>different menu elements</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="{{route('admin.index')}}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a class="dropdown-item" href="#">Settings 1</a>
                                                </li>
                                                <li><a class="dropdown-item" href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br>
                                    <form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="" role="form" action="{{route('admin.menu.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="title" class="form-control" placeholder="Title">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Keywords<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Description<span class="required"></span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="text" name="description" class="form-control" placeholder="Description">
                                            </div>
                                        </div>

                                        <div class="item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Status<span class="required"></span>   </label>
                                                <select class="form-control" name="status">
                                                    <option>TRUE</option>
                                                    <option>FALSE</option>
                                                </select>
                                        </div>

                                        <div class="item form-group">
                                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Image <span class="required"></span> </label>
                                            <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                            <div class="col-md-6 col-sm-6 ">
                                                <input type="file" data-role="magic-overlay" name="image" data-target="#pictureBtn" data-edit="insertImage">
                                            </div>

                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="item form-group">
                                            <div class="col-md-6 col-sm-6 offset-md-3">
                                                <button class="btn btn-primary" type="button">Cancel</button>
                                                <button class="btn btn-primary" type="reset">Reset</button>
                                                <button type="submit" class="btn btn-success">Save</button>
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
    </div>
    </div>
    <!-- /page content -->
    </div>
    </div>
@endsection

