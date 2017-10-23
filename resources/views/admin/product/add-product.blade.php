@extends('admin.master')
@section('title')
    add-product
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="box box-primary">
                <div class="well text-bold text-blue text-center" style="margin-top: 25px">ADD Product Form</div>
                <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                <form class="form-horizontal" action="{{url('/product/new')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="CategoryName" class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="CategoryName" name="category_id">
                                <option>Select Category Name</option>
                                @foreach($publishedcategories as $publishedcategory)
                                    <option value="{{$publishedcategory->id}}">{{$publishedcategory->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductName" class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_name" id="ProductName" placeholder="Product Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductCode" class="col-sm-2 control-label">Product code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="product_code" id="ProductCode" placeholder="Product code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductPrice" class="col-sm-2 control-label">Product price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="product_price" id="ProductPrice" placeholder="Product price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductDiscription" class="col-sm-2 control-label">Product Discription</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="8" name="product_discription" placeholder="Product Discription" id="ProductDiscription"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductPrice" class="col-sm-2 control-label">Product Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="product_image" id="ProductPrice" accept="image/*">
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
                            <button type="submit" class="btn btn-success">Save Product info</button>
                        </div>
                    </div>
                </form>
            </div>
        <!-- /.col-lg-12 -->
        </div>
    </div>
@endsection