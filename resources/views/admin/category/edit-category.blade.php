@extends('admin.master')
@section('title')
    EspnBD - Add Category
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <div class="well text-bold text-blue text-center" style="margin-top: 25px">Edit Category Form</div>
                    <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                    <form class="form-horizontal" name="editCategoryForm" action="{{url('/category/update')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="CategoryName" class="col-sm-2 control-label">Category Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="{{$categoryInfoById->category_name}}" name="category_name" id="CategoryName" placeholder="Category Name">
                                <input type="hidden" name="category_id" value="{{$categoryInfoById->id}}" class="form-control">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="category_discription" class="col-sm-2 control-label">Category Discription</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="4" name="category_discription" placeholder="Category Discription" id="category_discription">{{$categoryInfoById->category_discription}}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="publicationStatus" class="col-sm-2 control-label">publication Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="publicationStatus" name="publication_status">
                                    {{--<option> -- Select publication Status--</option>--}}
                                    <option value="1">Published</option>
                                    <option value="0">UnPublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Update Category info</button>
                            </div>
                        </div>
                    </form>
                </div>
        <!-- /.col-lg-12 -->
            </div>
        </div>
    </div>
    <script>
        document.forms['editCategoryForm'].elements['publication_status'].value='{{$categoryInfoById->publication_status}}';
    </script>
@endsection