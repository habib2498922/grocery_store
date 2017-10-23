@extends('admin.master')
@section('title')
    EspnBD - Manage Product
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">All Product information goes here</h3>
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Si no</th>
                                <th>Product Name</th>
                                <th>Category Name</th>
                                <th>Product code</th>
                                <th>Product Price</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $i=1 ?>
                            @foreach($allProductsInfo as $allProductInfo)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$allProductInfo->product_name}}</td>
                                    <td>{{$allProductInfo->category_name}}</td>
                                    <td>{{$allProductInfo->product_price}}</td>
                                    <td>{{$allProductInfo->product_code}}</td>
                                    <td>{{$allProductInfo->publication_status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        <a href="{{url('/product/view/'.$allProductInfo->id)}}" class="btn btn-primary btn-xs" title="view product">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        @if($allProductInfo->publication_status == 1)
                                            <a href="{{url('/product/unpublished/'.$allProductInfo->id)}}" class="btn btn-success btn-xs" title="Published product">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/product/published/'.$allProductInfo->id)}}" class="btn btn-warning btn-xs" title="UnPublished product">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="{{url('/product/edit/'.$allProductInfo->id)}}" class="btn btn-primary btn-xs" title="Edit product">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{url('/product/delete/'.$allProductInfo->id)}}" onclick="return confirm('Are you sure to Delete this!!')" class="btn btn-danger btn-xs" title="Delete product">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++?>
                            @endforeach

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
