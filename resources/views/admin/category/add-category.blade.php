@extends('admin.master')
@section('title')
    Grocery Store - Add Category
@endsection
@section('content')
    <div class="row">

        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD Category Form</div>
                    <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                    <form class="form-horizontal" action="{{url('/category/new')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="CategoryName" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="category_name" id="CategoryName" placeholder="Category Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_discription" class="col-sm-2 control-label">Category Discription</label>
                            <div class="col-sm-10">
                                <div class="box-body pad">
                                <textarea class="form-control" rows="4" name="category_discription" placeholder="Category Discription" id="editor1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="publicationStatus" class="col-sm-2 control-label">publication Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="publicationStatus" name="publication_status">
                                    <option> -- Select publication Status--</option>
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Save Category info</button>
                            </div>
                        </div>
                    </form>
                </div>
        <!-- /.col-lg-12 -->
            </div>
        </div>
    </div>
@endsection