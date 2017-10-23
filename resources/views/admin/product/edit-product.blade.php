@extends('admin.master')
@section('title')
    add-product
@endsection
@section('content')
    <div class="row">
        <div class=" col-lg-offset-1 col-lg-10 panel"style="margin-top: 50px">
            <div class="box box-primary">
                <div class="well text-bold text-blue text-center" style="margin-top: 25px">Edit Product Form</div>
                <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>
                <form class="form-horizontal" name="editProductForm" action="{{url('/product/update')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="CategoryName" class="col-sm-2 control-label">Category Name</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="CategoryName" name="category_id">
                                <option>Select Category Name</option>
                                @foreach($publishdeCategories as $publishdeCategory)
                                    <option value="{{$publishdeCategory->id}}">{{$publishdeCategory->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductName" class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$ProductById->product_name}}" class="form-control" name="product_name" id="ProductName" placeholder="Product Name">
                            <input type="hidden" value="{{$ProductById->id}}" class="form-control" name="product_id">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductCode" class="col-sm-2 control-label">Product code</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="{{$ProductById->product_code}}" name="product_code" id="ProductCode" placeholder="Product code">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductPrice" class="col-sm-2 control-label">Product price</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" value="{{$ProductById->product_price}}" name="product_price" id="ProductPrice" placeholder="Product price">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductDiscription" class="col-sm-2 control-label">Product Discription</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="8" name="product_discription" placeholder="Product Discription" id="ProductDiscription">{{$ProductById->product_discription}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ProductPrice" class="col-sm-2 control-label">Product Image</label>
                        <div class="col-sm-10">
                            <input type="file" name="product_image" id="ProductPrice" accept="image/*">
                            <img src="{{asset($ProductById->product_image)}}" height="70" width="70">
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
                            <button type="submit" class="btn btn-success">Update Product info</button>
                        </div>
                    </div>
                </form>
            </div>
        <!-- /.col-lg-12 -->
        </div>
    </div>
    <script>
        document.forms['editProductForm'].elements['category_id'].value='{{$ProductById->category_id}}';
        document.forms['editProductForm'].elements['publication_status'].value='{{$ProductById->publication_status}}';
    </script>
@endsection