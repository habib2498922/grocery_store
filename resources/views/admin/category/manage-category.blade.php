@extends('admin.master')
@section('title')
    Grocery Store - Manage Category
@endsection
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">All category information goes here</h3>
                        <h3 class=" text-bold text-blue text-center" style="margin-top: 25px">{{session('message')}}</h3>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Si no</th>
                                <th>Category Nmae</th>
                                <th>Category Disciption</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <?php $i=1 ?>
                            @foreach($allCategoriesInfo as $allCategoryInfo)
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$allCategoryInfo->category_name}}</td>
                                    <td>{{$allCategoryInfo->category_discription}}</td>
                                    <td>{{$allCategoryInfo->publication_status==1 ? 'Published':'Unpublished'}}</td>
                                    <td>
                                        @if($allCategoryInfo->publication_status== 1)
                                            <a href="{{url('/category/unpublished/'.$allCategoryInfo->id)}}" class="btn btn-success btn-xs" title="Published Category">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{url('/category/published/'.$allCategoryInfo->id)}}" class="btn btn-warning btn-xs" title="UnPublished Category">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif

                                        <a href="{{url('/category/edit/'.$allCategoryInfo->id)}}" class="btn btn-primary btn-xs" title="Edit Category">
                                            <span class="glyphicon glyphicon-edit"></span>
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
