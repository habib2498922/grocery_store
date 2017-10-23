@extends('admin.master')
@section('title')
    EspnBD - Product view
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"> puoduct information goes here</h3>
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <tr>
                                <th>puoduct ID</th>
                                <td>{{$ProductInfoById->id}}</td>
                            </tr>
                            <tr>
                                <th>puoduct Name</th>
                                <td>{{$ProductInfoById->product_name}}</td>
                            </tr>
                            <tr>
                                <th>category Name</th>
                                <td>{{$ProductInfoById->category_name}}</td>
                            </tr>
                            <tr>
                                <th>Product Code</th>
                                <td>{{$ProductInfoById->product_code}}</td>
                            </tr>
                            <tr>
                                <th>Product price</th>
                                <td>{{$ProductInfoById->product_price}}</td>
                            </tr>
                            <tr>
                                <th>Product Discription</th>
                                <td>{{$ProductInfoById->product_discription}}</td>
                            </tr>
                            <tr>
                                <th>Product Image</th>
                                <td><img src="{{asset($ProductInfoById->product_image)}}" alt="ddd" style="height: 70px" width="70px" ></td>
                            </tr>
                            <tr>
                                <th>Publication Status</th>
                                <td>{{$ProductInfoById->publication_status==1 ? 'Published':'Unpublished'}}</td>
                            </tr>

                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
@endsection
