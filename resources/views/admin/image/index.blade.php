@extends('layouts.adminwindow')

@section('title', 'Content Image Gallery ')

@section('content')

<h1> {{$content->title}} </h1>
<hr>
    <div class="container body">
        <div class="main_container">
            <form action="{{route('admin.image.store',['pid'=>$content->id])}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="item form-group">
                    <label>Title </label>
                    <input type="text" name="title" class="form-control" placeholder="Title">
                    <div class="col-md-6 col-sm-6 ">
                        <input type="file" data-role="magic-overlay" name="image" data-target="#pictureBtn" data-edit="insertImage">
                    </div>
                    <div class="item form-group">
                        <input class="input-group-text" type="submit" value="Upload">
                    </div>
                </div>
            </form>
            <!-- page content -->

                    <div class="row">
                        <div class="col-md-12 col-sm-12  ">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Product Image Gallery <small>Product Image Gallery subtitle</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Delete</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach( $images as $rs)
                                        <tr>
                                            <td scope="row">{{$rs->id}} </td>
                                            <td>{{$rs->title}} </td>
                                            <td>
                                                @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" style="height: 40px" >
                                                @endif
                                            </td>
                                            <td> <a href="{{route('admin.image.destroy',['pid'=>$content->id ,'id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure ?')" class="btn btn-danger"
                                                >Delete</a> </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- /age content -->
        </div>
    </div>
@endsection
